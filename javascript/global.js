$(document).ready(() => {
    $('.navbar-toggler').on('click', (e) => {
        let current = $(e.currentTarget)
        let navbar = $('.navbar')

        setTimeout(() => {
            if(current.hasClass('collapsed')) setTimeout(() => navbar.removeClass('active'), 400)
            else navbar.addClass('active')
        }, 1)
    })
})