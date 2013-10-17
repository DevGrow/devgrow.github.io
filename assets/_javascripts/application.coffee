$ ->
  window.App =
    trackEvent: (name, properties) =>
      mixpanel.track(name, properties)

  $("a[href^=\"http://\"],a[href^=\"https://\"]").not("[href*=\"devgrow.com\"]").click (e) ->
    url = @href
    window.App.trackEvent "Outbound Link",
      host: e.currentTarget.host
      target: url

  $(".page-nav-item").click (e) ->
    url = @href
    window.App.trackEvent "Clicked post navigation link",
      target: url

  $(".nav, .social").click (e) ->
    url = @href
    type = $(@).attr('class')
    window.App.trackEvent "Clicked menu navigation",
      target: url
      type: type