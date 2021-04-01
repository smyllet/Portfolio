$(document).ready(() => {
    $('#next').on('click', () => {
        let current = $('#carousel > section.active')
        let next = current.next()
        let first = current.parent().children().first()

        current.removeClass('active')

        if(next.is('section')) {
            next.addClass('active')
        }
        else {
            first.addClass('active')
        }
    })

    $('#previous').on('click', () => {
        let current = $('#carousel > section.active')
        let prev = current.prev()
        let last = current.parent().children().last()

        current.removeClass('active')

        if(prev.is('section')) {
            prev.addClass('active')
        }
        else {
           last.addClass('active')
        }

    })
})