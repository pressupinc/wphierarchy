jQuery(document).ready(function ($) {
  var nav = $('nav')
  var navToggle = $('button')

  navToggle.on('click', function () {
    $(this).toggleClass('active')
    $(this).attr('aria-expanded', function (i, attr) {
      return attr === 'true' ? 'false' : 'true'
    })
    nav.toggleClass('open')
  })
})
