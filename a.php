<?php
session_start();



?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Navigation Map</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
	body { margin: 0; padding: 0; }
  #map { position: absolute; top: 100px;  width: 100%; height: 83%;}
  #inputForm{bottom:0;}
</style>
</head>
<body>

  <style>
    
    .distance-container {
    position: absolute;
    top: 80px;
    left: 10px;
    z-index: 1;
    }
     
    .distance-container > * {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    font-size: 11px;
    line-height: 18px;
    display: block;
    margin: 0;
    padding: 5px 10px;
    border-radius: 3px;
    }

    .btn btn-info dropdown-toggle {
      align-content: center;
      text-align: center;
      font-size: x-large;

      
      
      top: 0;
      left: 0;
       width: 100%; 
       height:100px; 
       
       background-color:lightskyblue;}

.btn-grp{
  float: right;
  background-color: white;
  border: none;
  color: black;
  padding: 15px 25px;
  text-align: center;
  font-size: 26px;
  cursor: pointer;
  left:70%;
}

.btn-grp:hover {
  background-color:skyblue;
}

p{
  font-size: 35px;
  color: black;
}

    </style>

  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js"></script>
  <link
  rel="stylesheet"
  href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.css"
  type="text/css"
  />
  <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js"></script>
  <link
  rel="stylesheet"
  href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.css"
  type="text/css"
  />


<div class="dropdown" style="background-color:skyblue;">
  <h1  style="display: inline " style="font-size: x-large ;">Health And Social Care System</h1>
  <button type="button" class="btn btn-info dropdown-toggle float-right btn-lg" data-toggle="dropdown" style="display: inline; ">
    profile
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="profile.php">user detail</a>
    <button class="dropdown-item" onclick="xyz()" style="inline">Navigation</button>
    <a class="dropdown-item" href="login.php">log out</a>
    
  
  </div>
  
</div>

<div id="map">

</div>

<div id="distance" class="distance-container"></div>
 <script src="https://npmcdn.com/@turf/turf@5.1.6/turf.min.js"></script>


<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoic2h1YmhhbTAwOSIsImEiOiJjazg4ZGhqZmEwNGZhM3BwNTJ0aG96aXpzIn0.3ibkrwHySvAF28NpodTXsg';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [73.0297, 19.0330],
zoom: 10
});
 

let lat="1";
let lon='1';
function test()
{
   lat=document.getElementById("latitude").value;
   lon=document.getElementById("longitude").value;
   new mapboxgl.Marker().setLngLat([lon,lat]).addTo(map);
}

map.on('load', function() {
map.addSource('points', {
'type': 'geojson',
'data': {
'type': 'FeatureCollection',
'features': [

{
'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [73.0267, 19.0421]
},
'properties': {
'title': 'DY Patil',
'icon': 'hospital'
}
},
{

'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [73.1047, 19.0164]
},
'properties': {
'title': 'MGM',
'icon': 'hospital'
}
},
{
'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [72.9960, 19.0835]
},
'properties': {
'title': 'Fortis',
'icon': 'hospital'
}
}
]
}
});
map.addLayer({
'id': 'points',
'type': 'symbol',
'source': 'points',
'layout': {

'icon-image': ['concat', ['get', 'icon'], '-15'],
'text-field': ['get', 'title'],
'text-font': ['Open Sans Semibold', 'Arial Unicode MS Bold'],
'text-offset': [0, 0.1],
'text-anchor': 'top'
}
});
});

map.addControl(
new mapboxgl.GeolocateControl({
positionOptions: {
enableHighAccuracy: true
},
trackUserLocation: true
})
);


map.addControl(
new MapboxGeocoder({
accessToken: mapboxgl.accessToken,
mapboxgl: mapboxgl
})
);


  var distanceContainer = document.getElementById('distance');
 

 var geojson = {
 'type': 'FeatureCollection',
 'features': []
 };
  
 
 var linestring = {
 'type': 'Feature',
 'geometry': {
 'type': 'LineString',
 'coordinates': []
 }
 };
  
 map.on('load', function() {
 map.addSource('geojson', {
 'type': 'geojson',
 'data': geojson
 });
  

 map.addLayer({
 id: 'measure-points',
 type: 'circle',
 source: 'geojson',
 paint: {
 'circle-radius': 5,
 'circle-color': '#000'
 },
 filter: ['in', '$type', 'Point']
 });
 map.addLayer({
 id: 'measure-lines',
 type: 'line',
 source: 'geojson',
 layout: {
 'line-cap': 'round',
 'line-join': 'round'
 },
 paint: {
 'line-color': '#000',
 'line-width': 2.5
 },
 filter: ['in', '$type', 'LineString']
 });
  
 map.on('click', function(e) {
 var features = map.queryRenderedFeatures(e.point, {
 layers: ['measure-points']
 });
  
 
 if (geojson.features.length > 1) geojson.features.pop();
  

 distanceContainer.innerHTML = '';
  

 if (features.length) {
 var id = features[0].properties.id;
 geojson.features = geojson.features.filter(function(point) {
 return point.properties.id !== id;
 });
 } else {
 var point = {
 'type': 'Feature',
 'geometry': {
 'type': 'Point',
 'coordinates': [e.lngLat.lng, e.lngLat.lat]
 },
 'properties': {
 'id': String(new Date().getTime())
 }
 };
  
 geojson.features.push(point);
 }
  
 if (geojson.features.length > 1) {
 linestring.geometry.coordinates = geojson.features.map(function(
 point
 ) {
 return point.geometry.coordinates;
 });
  
 geojson.features.push(linestring);
  

 var value = document.createElement('pre');
 value.textContent =
 'Total distance: ' +
 turf.length(linestring).toLocaleString() +
 'km';
 distanceContainer.appendChild(value);
 }
  
 map.getSource('geojson').setData(geojson);
 });
 });
  
 map.on('mousemove', function(e) {
 var features = map.queryRenderedFeatures(e.point, {
 layers: ['measure-points']
 });
 
 map.getCanvas().style.cursor = features.length
 ? 'pointer'
 : 'crosshair';
 });




function xyz(){
  map.addControl(
new MapboxDirections({
accessToken: mapboxgl.accessToken
}),
'top-left'
);
}



</script>
 
</body>
</html>