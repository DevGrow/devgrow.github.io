---
layout: page
title: Archives
permalink: /archives/
sitemap:
  priority: 0.7
  changefreq: weekly
---

These are all of the articles on DevGrow.  Search using `cmd+f` or `ctrl+f`.

<ul class="archived-posts">
{% for post in site.posts %}
  {% if post.external-url %}
    <li>
      <a href="{{ post.external-url }}">{{ post.title }}</a>
      <a class="anchor" href="{{ post.url }}"><i class="icon-anchor"></i></a>
    </li>
  {% else %}
    <li><a href="{{ post.url }}">{{ post.title }}</a></li>
  {% endif %}
{% endfor %}
</ul>