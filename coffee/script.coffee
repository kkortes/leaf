# checks what media query platform is running (on window resize). Returns:
# tablet-horizontal, tablet-vertical, smartphone-horizontal, smartphone-vertical or desktop
getPlatform = () ->
  return window.getComputedStyle(document.body,':before').getPropertyValue('content').replace(/'/g,'').replace(/"/g,'')

# temporary click function for showcase web
$('.icon.icon-list2').on 'click', ->
  if getPlatform() is 'smartphone vertical' || getPlatform() is 'smartphone horizontal'
    if $('.top-nav').hasClass 'relative'
      $('.top-nav span').remove()
      $('.top-nav').removeClass 'relative'
      $('.top-nav').removeClass 'desktop-nav'
    else
      $('.top-nav').addClass 'relative'
      $('.top-nav').addClass 'desktop-nav'
  return


# properties for alignChildren() function. You can add more targets here. Key = row, values = children to keep track of and resize
rows = {
  'mod-row' : [
    'card',
    'tile'
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

slide = (obj, nextslide, nav) ->
  marginleft = nextslide*100
  obj.children('.stripe').animate {
    'marginLeft' : '-'+marginleft+'%'
  }

  nav.find('a').removeClass 'active'
  nav.find('a:eq('+nextslide+')').addClass 'active'

  if (nextslide+1) is obj.find('.slide').length
    return 0
  else
    return nextslide+1

initSlider = () ->
  sliders = $('.slider')
  interval = 8000 #milliseconds
  sliders.each ->
    slider = $(this)
    nav = slider.find('.slider-nav')

    if slider.find('.stripe.crow .slide').length > 1
      slider.data 'interval', setInterval ->
        if typeof slider.data('nextslide') is 'undefined'
          nextslide = 1
          slider.data 'nextslide', nextslide
        else
          console.log 'now here'
          nextslide = slider.data 'nextslide'
        
        slider.data 'nextslide', slide(slider, nextslide, nav)
      , interval

    nav.find('a').on 'click', ->
      clearInterval(slider.data('interval'))
      index = nav.find('a').index(this)
      console.log index
      slide(slider, index, nav)
      return false
  return

init = () ->
  setTimeout ->
    makeSquare(elements)
    alignChildren(rows)
  , 100
  checkResize()
  activateLists()
  initSlider()

init()