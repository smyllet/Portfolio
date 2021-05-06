let projets = []
let type = []
let status = []

$(document).ready(() => {
    try {
        $.get('/listProjets.json', (data) => {
            projets = data.projets
            type = data.type
            status = data.status

            updateForm()
            updateProjetList()
        })
    } catch (e) {
        alert('Erreur lors de la récupération des projets')
    }
})

function updateForm() {
    let statusSelect = $('#filter-status')
    statusSelect.html('<option value="all">Tous</option>')
    status.forEach(s => {
        statusSelect.append(`<option value="${s.code}">${s.libelle}</option>`)
    })

    let typeSelect = $('#filter-type')
    typeSelect.html('<option value="all">Tous</option>')
    type.forEach(t => {
        typeSelect.append(`<option value="${t.code}">${t.libelle}</option>`)
    })

    $('select').on('change', () => {
        updateProjetList()
    })

    $('input[type=checkbox]').on('change', () => {
        updateProjetList()
    })

    $('#filter-search-input').on('input', () => {
        updateProjetList()
    })
}

function updateProjetList() {
    let keyword = $('#filter-search-input').val().split(',').map(key => key.trim().toLowerCase()).filter(key => key.length > 0)
    let status_filter = $('#filter-status').val()
    let type_filter = $('#filter-type').val()
    let u4 = $('#filter-u4').prop('checked')
    let opensource = $('#filter-opensource').prop('checked')

    let projectsFiltre = projets.filter(projet => {
        if((status_filter !== "all") && (status_filter !== projet.status)) return false
        else if((type_filter !== "all") && (type_filter !== projet.type)) return false
        else if(u4 && !projet.u4) return false
        else if(opensource && !projet.git) return false
        else if(!keyword.every(current => (projet.keyword.find(key => key.includes(current)) || projet.language.find(key=> key.toLowerCase().includes(current))))) return false
        else return true
    })

    let projetContainer = $('#projets-container')

    if(projectsFiltre.length > 0) {
        let projetsList = $('<div id="projets-list" class="custom_scrollbar"></div>')
        projectsFiltre.forEach(projet => {
            let projetTemplate = $($('#projet-template').html())
            projetTemplate.find('.projet-name').html(projet.name)
            projetTemplate.find('.projet-description').html(projet.description)

            let projet_status = status.find(s => s.code === projet.status)
            if(projet_status) projetTemplate.find('.projet-status').html(projet_status.libelle)
            let projet_type = type.find(t => t.code === projet.type)
            if(projet_type) projetTemplate.find('.projet-type').html(projet_type.libelle)

            projetTemplate.find('.projet-langage').html(projet.language.join(', '))

            if(projet.u4) projetTemplate.find('.projet-u4').show()

            if(projet.detail) projetTemplate.find('.projet-buttons').append(`<a href="/projet/${projet.detail}"><button class="btn btn-light">Détail</button></a>`)
            if(projet.git) projetTemplate.find('.projet-buttons').append(`<a href="${projet.git}"><button class="btn btn-dark">GitHub</button></a>`)

            projetsList.append(projetTemplate)
        })
        projetContainer.html(projetsList)
    } else {
        let projetNothingTemplate = $('#projet-nothing-template').html()
        projetContainer.html(projetNothingTemplate)
    }
}