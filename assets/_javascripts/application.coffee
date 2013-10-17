$ ->
  window.App =
    trackEvent: (name, properties) =>
      mixpanel.track(name, properties)

  mixpanel.track_links(".nav", "Clicked .nav link", {'referrer': document.referrer })
  mixpanel.track_links(".social", "Clicked .social link", {'referrer': document.referrer })

  $("a[href^=\"http://\"],a[href^=\"https://\"]").not("[href*=\"devgrow.com\"]").click (e) ->
    url = @href
    window.App.trackEvent "Outbound Link",
      host: e.currentTarget.host
      target: url

  $(".page-nav-item").click (e) ->
    url = @href
    window.App.trackEvent "Clicked post navigation link",
      target: url