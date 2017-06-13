jQuery(document).ready(function ($) {
  'use strict'

  var wph = $('main')
  var aside = $('aside')
  var wph_h = wph.height()
  var wph_w = wph.width()
  var gray = 'rgba(204, 202, 202, 1)'
  var is_svg = true

  $.ajax({
    url: 'api/',
    type: 'GET',
    headers: {
      'Content-Type': 'application/json; charset=utf-8'
    }
  })
    .done(function (data, textStatus, jqXHR) {
      console.log('HTTP Request Succeeded: ' + jqXHR.status)

      var items = data.hierarchy_items
      var stable = data.stable
      var stable_link = data.stable_link

      $('.version').text('WordPress ' + stable)
      $('.version').attr('href', stable_link)

      $('svg g').each(function () {
        for ( var i in items) {
          var object_id = items[ i ].object_id
          var icon_type = items[ i ].classification
          var name = items[ i ].name
          var link = items[ i ].link
          var child = items[ i ].child
          var tip = items[ i ].tip

          // match node data attribute against key in array
          if ($(this).data('position') === object_id) {
            var rectX = $(this).children('rect').attr('x')
            var rectY = $(this).children('rect').attr('y')
            var rHeight = $(this).children('rect').attr('height')
            var rWidth = $(this).children('rect').attr('width')
            $(this).find('.svgl').attr('href', link)
            $(this).find('.svgl').attr('tip', tip)
            $(this).find('.svgl').text(name)
            $(this).find('.svgl').css('width', rWidth)
            $(this).find('.svgl').css('height', rHeight)

            if (rectY === undefined) {
              rectY = 1.06;
            }

            $(this).children('foreignobject').attr('x', rectX)
            $(this).children('foreignobject').attr('y', rectY)
            $(this).children('foreignobject').attr('height', rHeight)
            $(this).children('foreignobject').attr('width', rWidth)
          }
        }
      })

      $('.embeds a').each(function () {
        for ( var i in items) {
          var object_id = items[ i ].object_id
          var icon_type = items[ i ].classification
          var name = items[ i ].name
          var link = items[ i ].link
          var child = items[ i ].child
          var tip = items[ i ].tip

          // match node data attribute aginst key in array
          if ($(this).data('position') === object_id) {
            $(this).text(name)
            $(this).attr('href', link)
            $(this).data('tip', tip)
          }
        }
      })
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
      console.log('HTTP Request Failed :(')
    })
    .always(function () {})
})
