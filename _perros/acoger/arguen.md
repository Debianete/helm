---
nombre:     Argüen
sexo:       Hembra
color:      Blanco, Gris y Negro
raza:       Galgo
talla:      Mediano    # opciones: Grande - Mediano - Pequeño
nacimiento: 10-11-2016 # DD-MM-AAAA

entrada:    11-10-2011 # DD-MM-AAAA
origen:     Calle
situacion:  Albergue

chip:         si
castrado:     si
enfermedades: El moquillo, La parvirosis
caracter:

  compatible: Niños, Gatos, Perros
  actividad:  Tranquilo, Juguetón, Activo
  miedos:     Truenos, Fuegos artificiales
  manias:     Morder pelotas, Cagar, Mear

historia: > # "OJO" escribir en la línea de abajo, con 2 espacios al principio
  Aquí se escribe la historia del perro, dejando dos espacios
  al principio de cada línea, tal cual está escrito este
  ejemplo.

###
# Filtros
###

adopta:   false # poner en 'true' la opción correcta, pueden ser 1, 2, o las 3
apadrina: false # poner en 'true' la opción correcta, pueden ser 1, 2, o las 3
acogida:  true  # poner en 'true' la opción correcta, pueden ser 1, 2, o las 3

order:    1     # habilita la prioridad sobre las demás fichas

galeria:  false # si tiene ficha de galería, poner en 'true'

###
# Filtros
###

###
# Imágenes
###

avatar:     /assets/images/perros/avatar/dog.svg        # foto de la cara
cabecera:   /assets/images/perros/cabecera/cabecera.jpg # foto cabecera ficha

###
# Imágenes
###
---

{% include fichas/ficha-larga.html %}
