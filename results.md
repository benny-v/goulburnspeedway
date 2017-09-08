---
layout: default
permalink: /results/
title: Results
---

<ul class="post-list">
  {% for post in site.posts %}
    {% if post.categories contains "results" %}
    <li>
        <h2>
          <a class="post-link" href="{{ post.url | prepend: site.baseurl }}">{{ post.title }} - {{ post.date | date: "%b %-d, %Y" }}</a>
        </h2>
      </li>
      {% endif %}
  {% endfor %}
</ul>
