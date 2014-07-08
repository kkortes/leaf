$('img').each ->
  if !$(this).attr('src')
    $(this).attr('src', window.app_url+'assets/image/dummies/dummy-rectangular.jpg')

getPlatform = () ->
  return window.getComputedStyle(document.body,':before').getPropertyValue('content').replace(/'/g,'').replace(/"/g,'')

rows = {
  'mod-row' : [
    'card',
    'tile'
  ],
  'mod-lists .list-item' : [
    'pull-left',
    'pull-right',
    'text'
  ]
}

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

elements = ['resize', 'circle']

makeSquare = (elements = ['resize'], angle = 'height') ->
  for element in elements
    $('.'+element).each ->
      obj = $(this)
      if angle is 'height'
        value = obj.innerWidth()
        console.log value
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

init = () ->
  setTimeout ->
    makeSquare(elements)
    alignChildren(rows)
  , 25
  checkResize()
  activateLists()

init()