# calcular_distancia
Calcular la distancia entre dos puntos con JavaScript, los dos puntos serán definidos en coordenadas con sus respectiva Longitud y Latitud, asi mostrará su distancia en kilometros

<ul>
<li>
  1-) hacer: <b> git clone https://github.com/ErickGBR/gps_app.git</b>
</li>
<li>
  2-) abrir el archivo index en tu navegador y probar las coordenadas
</li>
  Ejemplo:
  <img src="https://github.com/ErickGBR/calcular_distancia/blob/master/example.jpg">
</ul>

Formula:

R = earth’s radius (mean radius = 6,371km)
Δlat = lat2− lat1
Δlong = long2− long1
a = sin²(Δlat/2) + cos(lat1).cos(lat2).sin²(Δlong/2)
c = 2.atan2(√a, √(1−a))
d = R.c

Conocida como La formula Haversine


