---
title: Nuestras victorias
section: Adoptados
permalink: /adoptados/
excerpt: >
  Ut enim ad minim veniam,
  quis nostrud exercitation
  ullamco laboris nisi ut aliquip
  ex ea commodo consequat.
---

<h2>{{ page.title | escape }}</h2>

{% assign perros = site.perros | sort: "order" %}
{% for perro in perros %}
{% if perro.adoptado %}
<article class="">
  <h3 class="">
    <a class="" href="{{ perro.url | relative_url }}" title="{{ perro.nombre | escape }}">
      <img
        class=""
        src="{{ perro.avatar | relative_url }}"
        alt="Imagen con la cara de {{ perro.nombre | escape }}"
        title="Imagen con la cara de {{ perro.nombre | escape }}"
        width="128"
        height="128">
      <span class="">{{ perro.nombre | escape }}</span>
    </a>
  </h3>
  <ul class="">
    <li><b>Sexo:</b> {{ perro.sexo | escape }}</li>
    <li><b>Raza:</b> {{ perro.raza | escape }}</li>
    <li><b>Tamaño:</b> {{ perro.talla | escape }}</li>
    <li><b>Nacido:</b> {{ perro.nacimiento | escape }}</li>
    <li><b>Entrada:</b> {{ perro.entrada | escape }}</li>
    <li><b>Situación:</b> {{ perro.situacion | escape }}</li>
  </ul>
</article>
{% endif %}
{% endfor %}
