---
layout: atom
permalink: /feed/
---
{% for post in site.posts %}
  {% if forloop.index < 10 %}
    {% include atom_post.xml %}
  {% endif %}
{% endfor %}