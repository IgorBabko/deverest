$ ->
    $('.Portfolio__gallery').magnificPopup
        type: 'image'
        delegate: 'a'
        zoom:
            enabled: true
            duration: 300
            easing: 'ease-in-out'

    $('.Portfolio__button').click (e) ->
        e.preventDefault()
        e.stopPropagation()
        document.location.href = $(this).data('url')

    return
