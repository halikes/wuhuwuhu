
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha384-tuoy5Pw70jwKkqs/5Np+jn5ny9uew3ZnSlgIt9q+3VltgIhUa9QWTqZZ4wO9DYDr" crossorigin=""/>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha384-S6W24xD+Xr5z5rK1hO56mKyyUMFJ/cisRH+W1r0iQgG3TlzqJJz9eLzFXCCM8jlF" crossorigin=""></script>

<div id="map">
// 创建地图对象
var myMap = L.map('map').setView([51.505, -0.09], 13);

// 添加地图瓦片图层
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    maxZoom: 18,
}).addTo(myMap);

// 添加标记
var marker = L.marker([51.5, -0.09]).addTo(myMap);
marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();

</div>
