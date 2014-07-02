$('img').each ->
  if !$(this).attr('src')
    $(this).attr('src', window.app_url+'assets/image/dummies/dummy-rectangular.jpg')

getPlatform = () ->
  return window.getComputedStyle(document.body,':before').getPropertyValue('content').replace(/'/g,'').replace(/"/g,'')


rows = {
  'mod-row' : [
    'card',
    'tile'
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
          parent.find('.'+child).css 'height', tallest

elements = ['resize', 'circle']

makeSquare = (elements = ['resize'], angle = 'height') ->
  for element in elements
    $('.'+element).each ->
      obj = $(this)
      if angle is 'height'
        value = obj.outerWidth()
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

init = () ->
  makeSquare(elements)
  alignChildren(rows)
  checkResize()

init()