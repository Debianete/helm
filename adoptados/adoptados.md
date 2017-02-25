---
layout: perros
title: Peludos felizmente adoptados
section: Adoptados
permalink: /adoptados/
excerpt: >
  Ut enim ad minim veniam,
  quis nostrud exercitation
  ullamco laboris nisi ut aliquip
  ex ea commodo consequat.
---

{% assign perros = site.perros | sort: "order" %}
{% for perro in perros %}
{% if perro.adoptado %}
<article class="article">
  <a class="absoluteCenter" href="{{ perro.url | relative_url }}" title="{{ perro.nombre | escape }}">
    <h3 class="">{{ perro.nombre | escape }}</h3>
  <img
    class=""
    src="{{ perro.avatar | relative_url }}"
    alt="Imagen con la cara de {{ perro.nombre | escape }}"
    title="Imagen con la cara de {{ perro.nombre | escape }}"
    width="200"
    height="200">
  <ul class="">
    <li><b>Sexo:</b> {{ perro.sexo | escape }}</li>
    <li><b>Raza:</b> {{ perro.raza | escape }}</li>
    <li><b>Tamaño:</b> {{ perro.talla | escape }}</li>
    <li><b>Nacido:</b> {{ perro.nacimiento | escape }}</li>
    <li><b>Entrada:</b> {{ perro.entrada | escape }}</li>
    <li><b>Situación:</b> {{ perro.situacion | escape }}</li>
  </ul>
</a>
</article>
{% endif %}
{% endfor %}
