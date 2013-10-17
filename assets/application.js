(function() {
  $(function() {
    var _this = this;
    window.App = {
      trackEvent: function(name, properties) {
        return mixpanel.track(name, properties);
      }
    };
    mixpanel.track_links(".nav", "Clicked .nav link", {
      'referrer': document.referrer
    });
    mixpanel.track_links(".social", "Clicked .social link", {
      'referrer': document.referrer
    });
    $("a[href^=\"http://\"],a[href^=\"https://\"]").not("[href*=\"devgrow.com\"]").click(function(e) {
      var url;
      url = this.href;
      return window.App.trackEvent("Outbound Link", {
        host: e.currentTarget.host,
        target: url
      });
    });
    return $(".page-nav-item").click(function(e) {
      var url;
      url = this.href;
      return window.App.trackEvent("Clicked post navigation link", {
        target: url
      });
    });
  });

}).call(this);
