(function() {
  $(function() {
    var _this = this;
    window.App = {
      trackEvent: function(name, properties) {
        return mixpanel.track(name, properties);
      }
    };
    $("a[href^=\"http://\"],a[href^=\"https://\"]").not("[href*=\"devgrow.com\"]").click(function(e) {
      var url;
      url = this.href;
      return window.App.trackEvent("Outbound Link", {
        host: e.currentTarget.host,
        target: url
      });
    });
    $(".page-nav-item").click(function(e) {
      var url;
      url = this.href;
      return window.App.trackEvent("Clicked post navigation link", {
        target: url
      });
    });
    return $(".nav, .social").click(function(e) {
      var type, url;
      url = this.href;
      type = $(this).attr('class');
      return window.App.trackEvent("Clicked menu navigation", {
        target: url,
        type: type
      });
    });
  });

}).call(this);
