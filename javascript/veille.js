$(document).ready(async () => {
    try {
        $.get('/listVeille.json', (data) => {
            setTimeout(() => {
                $('.progress-bar').css('width', '33%')
                $('#loading-screen-text').html('Traitement de la veille')

                setTimeout(async () => {
                    $('.progress-bar').css('width', '66%')
                    $('#loading-screen-text').html('Chargement de la page')

                    let main = $('main')
                    let dualPos = 1

                    data.forEach((veille) => {
                        let section = $(`<section ${(!veille.image && veille.color) ? `style="background-color:${veille.color}" class="colored"` : ""}></section>`)

                        let source = ""
                        if(veille.src) source = `<small class="source">Source : <a target="_blank" href="${veille.src}">${(new URL(veille.src)).hostname}</a></small>`
                        else source = `<small class="source">Source : Inconnue</small>`

                        let content = $(`<div class="content-center"><div><h1>${veille.title}</h1><p>${veille.text}</p>${source}</div></div>`)

                        let image = null
                        if(veille.image) {
                            image = `<div class="${(veille.bigPicture) ? "big-picture" : "image-center"}" ${(veille.color) ? `style="background-color:${veille.color}"` : ''}><img src="${veille.image}"/></div>`
                        }

                        if(dualPos === 1) {
                            dualPos--
                            if(image) section.append(image)
                            section.append(content)
                        } else {
                            dualPos++
                            section.append(content)
                            if(image) section.append(image)
                        }

                        main.append(section)
                    })

                    setTimeout(() => {
                        $('.progress-bar').css('width', '100%')
                        $('#loading-screen-text').html('Terminé')

                        setTimeout(() => {
                            $('main').removeClass('loading')
                        }, 200)
                    }, 500)
                }, 700)
            }, 300)
        })
    } catch (e) {
        alert('Erreur lors de la récupération de la veille technologique')
    }
})