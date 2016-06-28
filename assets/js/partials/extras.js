// party time
jQuery(document).ready(function ($) {
  'use strict'

  if (! Modernizr.canvas) {
    return
  }

  const wph_debug = false
  var t0, t1

  var wph_display = {
    wapuu: true,
    neo: true,
    monochromatic: true,
    dark: true,
    light: true,
    tips: true
  }

  // key sequence listeners
  var sequences = {
    wapuu: 'w a p u u',
    neo: 'n e o',
    monochromatic: 'm o n o',
    dark: 'd a r k',
    light: 'l i g h t',
    tips: 't i p s'
  }

  cheet(sequences.wapuu)
  cheet(sequences.neo)
  cheet(sequences.monochromatic)
  cheet(sequences.dark)
  cheet(sequences.light)
  cheet(sequences.tips)

  cheet.done(function (seq) {
    if (seq === sequences.wapuu) {
      console.log('Wapuu!')
      wapuu()
      wph_display.wapuu = !wph_display.wapuu
    } else if (seq === sequences.neo) {
      console.log('Wake up, Neo.')
      neo()
    } else if (seq === sequences.monochromatic) {
      console.log('[Dostoyevsky quote here]')
      monochromatic()
    } else if (seq === sequences.dark) {
      console.log("Ah, that's better.")
      dark()
    } else if (seq === sequences.light) {
      console.log('Lighten up!')
      light()
    } else if (seq === sequences.tips) {
      console.log('Tips!')
      tips()
    }
  })

  /**
   * Monochromatic.
   * Displays an optional monochromatic view.
   *
   * @since  2.0
   *
   * @param  {[type]} wph_display.monochromatic [description]
   *
   * @return {[type]}                           [description]
   */
  function monochromatic () {
    if (wph_display.monochromatic) {
      $('body').toggleClass('monochromatic')
    }
  }

  /**
   * Monochromatic.
   * Displays an optional dark color scheme view.
   *
   * @since  2.0
   *
   * @param  {[type]} wph_display.dark [description]
   *
   * @return {[type]}                           [description]
   */
  function dark () {
    if (wph_display.dark) {
      $('body').toggleClass('dark')
    }
  }

  /**
   * Light.
   * Displays an optional light color scheme view.
   *
   * @since  2.0
   *
   * @param  {[type]} wph_display.light [description]
   *
   * @return {[type]}                           [description]
   */
  function light () {
    if (wph_display.light) {
      $('body').toggleClass('light')
    }
  }

  /**
   * Shows some contextual info for each item,
   * and example usage.
   *
   * @since  2.0
   *
   * @param  {[type]} wph_display.tips [description]
   *
   * @return {[type]}                  [description]
   */
  function tips () {
    if (wph_display.tips) {
      $('body').toggleClass('tips')
    }
  }

  /**
   * Wapuu time
   *
   * @since  2.0
   *
   * @return {[type]} [description]
   */
  function wapuu () {
    if (! wph_display.wapuu) {
      $('body').removeClass('wapuu')
      if ($('canvas').length) {
        $('canvas').remove()
      }
      return
    }

    if (wph_debug) {
      t0 = performance.now()
    }

    $('body').toggleClass('wapuu')

    if (wph_debug) {
      t1 = performance.now()
    }

    if (wph_debug) {
      console.log('damn yo it took ' + (t1 - t0) + ' milliseconds.')
    }
  }

  /**
   * It is not the spoon that eh whatever
   *
   * @since  2.0
   *
   * @return {[type]} [description]
   */
  function neo () {
    if (! wph_display.neo) {
      $('body').removeClass('neo')
      if ($('.neo-welcome').length) {
        $('.neo-welcome').remove()
      }
      if ($('canvas').length) {
        $('canvas').remove()
      }
      return
    }
    $('body').toggleClass('neo')
    // show greeting
    $('body').append('<div class="neo-welcome"></div>')
    // fade out
    $('.neo-welcome').toggle('slow')

    var canvas = document.body.appendChild(document.createElement('canvas'))
    var context = canvas.getContext('2d')
    context.globalCompositeOperation = 'lighter'
    canvas.width = window.innerWidth
    canvas.height = window.innerHeight

    var domurl = window.URL || window.webkitURL || window

    draw()

    var textStrip = [ 'ィ', 'ゥ', 'ウ', 'ェ', 'エ', 'ォ', 'オ', 'カ', 'ガ', 'キ', 'ギ', 'ク', 'グ', 'ケ', 'ゲ', 'コ', 'ゴ', 'サ', 'ザ', 'シ', 'ジ', 'ス', 'ズ', 'セ', 'ゼ', 'ソ', 'ゾ', 'タ', 'ダ', 'チ', 'ヂ', 'ッ', 'ツ', 'ヅ', 'テ', 'デ', 'ト', 'ド', 'ナ', 'ニ', 'ヌ', 'ネ', 'ノ', 'ハ', 'バ', 'パ', 'ヒ', 'ビ', 'ピ', 'フ', 'ブ', 'プ', 'ヘ', 'ベ', 'ペ', 'ホ', 'ボ', 'ポ', 'マ', 'ミ', 'ム', 'メ', 'モ', 'ャ', 'ヤ', 'ュ', 'ユ', 'ョ', 'ヨ', 'ラ', 'リ', 'ル', 'レ', 'ロ', 'ヮ', 'ワ', 'ヰ', 'ヱ', 'ヲ', 'ン', 'ヴ', 'ヵ', 'ヶ', 'ヷ', 'ヸ', 'ヹ', 'ヺ' ]

    var stripCount = 120
    var stripX = []
    var stripY = []
    var dY = []
    var stripFontSize = []

    for ( var i = 0; i < stripCount; i++) {
      stripX[ i ] = Math.floor(Math.random() * 1265)
      stripY[ i ] = -10
      dY[ i ] = Math.floor(Math.random() * 7) + 3
      stripFontSize[ i ] = Math.floor(Math.random() * 16) + 8
    }

    var greens = [ '#cefbe4', '#81ec72', '#5cd646', '#54d13c', '#4ccc32', '#43c728' ]

    function drawStrip (x, y) {
      for ( var k = 0; k <= 40; k++) {
        var randChar = textStrip[ Math.floor(Math.random() * textStrip.length) ]
        if (context.fillText) {
          switch ( k ) {
            case 0:
              context.fillStyle = greens[ 0 ]
              break
            case 1:
              context.fillStyle = greens[ 1 ]
              break
            case 3:
              context.fillStyle = greens[ 2 ]
              break
            case 7:
              context.fillStyle = greens[ 3 ]
              break
            case 13:
              context.fillStyle = greens[ 4 ]
              break
            case 17:
              context.fillStyle = greens[ 5 ]
              break
          }
          context.fillText(randChar, x, y)
        }
        y -= stripFontSize[ k ]
      }
    }

    function draw () {
      // clear the canvas and set the properties
      context.clearRect(0, 0, canvas.width, canvas.height)
      context.shadowOffsetX = context.shadowOffsetY = 0
      context.shadowBlur = 8
      context.shadowColor = '#94f475'

      for ( var j = 0; j < stripCount; j++) {
        context.font = stripFontSize[ j ] + 'px MatrixCode'
        context.textBaseline = 'top'
        context.textAlign = 'center'

        if (stripY[ j ] > 1358) {
          stripX[ j ] = Math.floor(Math.random() * canvas.width)
          stripY[ j ] = -100
          dY[ j ] = Math.floor(Math.random() * 7) + 3
          stripFontSize[ j ] = Math.floor(Math.random() * 16) + 8
          drawStrip(stripX[ j ], stripY[ j ])
        } else {
          drawStrip(stripX[ j ], stripY[ j ])

          stripY[ j ] += dY[ j ]
        }
        setTimeout(draw, 30)
      }
    }
  }
})
