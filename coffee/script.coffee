# properties for alignChildren() function. You can add more targets here. Key = row, values = children to keep track of and resize
rows = {
  'mod-row' : [
    'card',
    'tile',
    'flip'
  ],
  'mod-lists .list-item' : [
    'pull-left',
    'pull-right',
  ]
}
# function to align row children height-wise
alignChildren = (rows = {}) ->
  for row, children of rows
    $('.'+row).each ->
      parent = $(this)
      tallest = false
      
      for child in children
        parent.find('.'+child).each ->
          obj = $(this)
          obj.css 'height', 'auto'
          height = obj.outerHeight()
          if height > tallest
            tallest = height

        if tallest
          for child in children
            parent.find('.'+child).css 'height', tallest

# properties for makeSquare() function. You can add more targets here. Values = what elements to target.
elements = ['resize', 'circle']
# function to force square measurements. This is used for circles, circles are really squares with border-radius, right? :)
makeSquare = (elements = ['resize'], angle = 'height') ->
  for element in elements
    $('.'+element).each ->
      obj = $(this)
      if angle is 'height'
        value = obj.innerWidth()
        reset = 'width'
      else
        value = obj.outerHeight()
        reset = 'height'
      obj.css angle, value

checkResize = () ->
  $(window).resize ->
    clearTimeout(window.counter)
    window.counter = setTimeout ->
      makeSquare(elements)
      alignChildren(rows)
      window.platform = getPlatform()
    , 500

activateLists = () ->
  $('.minimized li a').on 'click', () ->
    obj = $(this)
    if obj.attr('href') is '#'
      children = obj.parent().children('ul')
      toggle = obj.find('.toggle')
      if children.hasClass 'opened'
        children.removeClass 'opened'
        toggle.removeClass toggle.attr 'data-altclass'
        toggle.addClass toggle.attr 'data-class'
        children.slideUp 'fast'
      else
        children.addClass 'opened'
        toggle.removeClass toggle.attr 'data-class'
        toggle.addClass toggle.attr 'data-altclass'
        children.slideDown 'fast'
      return false

initFlip = () ->
  flips = $('.flip')

  flips.each ->
    flip = $(this)

    events = {}

    if flip.hasClass 'onclick'
      events.click = ->
        if !flip.hasClass 'toggle'
          flip.addClass 'toggle'
        else
          flip.removeClass 'toggle'
    else
      events.mouseenter = ->
        flip.addClass 'toggle'
      events.mouseleave = ->
        flip.removeClass 'toggle'

    flip.on events
      
    return
  return

slide = (obj, nextslide) ->
  marginleft = nextslide*100
  obj.self.children('.stripe').animate {
    'marginLeft' : '-'+marginleft+'%'
  }

  obj.nav.find('a').removeClass 'active'
  obj.nav.find('a:eq('+nextslide+')').addClass 'active'

  obj.self.data 'currentslide', nextslide

  if (nextslide+1) is obj.self.find('.slide').length
    obj.prevbutton.removeClass 'inactive'
    obj.nextbutton.addClass 'inactive'
    return 0
  else
    obj.nextbutton.removeClass 'inactive'
    if nextslide is 0
      obj.prevbutton.addClass 'inactive'
    else
      obj.prevbutton.removeClass 'inactive'
    return nextslide

slideTo = (direction, slider, interval = false) ->
  if !interval
    clearInterval slider.self.data('interval')
  currentslide = slider.self.data 'currentslide'
  if direction is 'next'
    currentslide++
    if currentslide >= slider.self.find('.stripe.crow .slide').length
      currentslide = 0
    slide slider, currentslide
  else if direction is 'prev'
    currentslide--
    if currentslide < 0
      currentslide = slider.self.find('.stripe.crow .slide').length-1
    slide slider, currentslide

initSlider = () ->
  sliders = $('.slider')
  sliders.each ->
    slider = {
      self : $(this)
      nav : $(this).find('.slider-nav')
      nextbutton : $(this).find('.next')
      prevbutton : $(this).find('.prev')
      interval : 0
    }
    
    if slider.self.find('.stripe.crow .slide').length > 1
      if typeof slider.self.data('currentslide') is 'undefined'
        slider.self.data 'currentslide', 0

      if slider.interval
        slider.self.data 'interval', setInterval ->
          slideTo 'next', slider, true
        , slider.interval

      hammertime = new Hammer slider.self[0]
      hammertime.on 'swipeleft', (ev) ->
        slideTo 'next', slider

      hammertime.on 'swiperight', (ev) ->
        slideTo 'prev', slider

    if slider.nextbutton.length
      slider.nextbutton.on 'click', ->
        slideTo 'next', slider
        return false

    if slider.prevbutton.length
      slider.prevbutton.on 'click', ->
        slideTo 'prev', slider
        return false

    slider.nav.find('a').on 'click', ->
      clearInterval slider.self.data('interval')
      index = slider.nav.find('a').index(this)
      slide slider, index
      return false
    
  return

initWaves = () ->
  Waves.displayEffect()

leafInit = () ->
  imagesLoaded($('body')[0]).on 'always', ->
    makeSquare(elements)
    alignChildren(rows)
  
  checkResize()
  activateLists()
  initSlider()
  initWaves()
  initFlip()

leafInit()