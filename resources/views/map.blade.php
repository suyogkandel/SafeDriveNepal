@extends('master')
@section('content')

    <div id = "map" class=" m-24 w-50 h-50 justify-between items-center" style="width: 85vw; height: 100vh;"></div>
    <script>

        // leaflet map with osm titlelayer
        var map = L.map('map').setView([27.66882, 84.43168], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19
}).addTo(map);

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
}

map.on('click', onMapClick);

//marker icon
var busIcon = L.icon({
    iconUrl: "/images/bus.png",
    iconSize: [30,30]
})

//marker
var marker = L.marker([27.66882, 84.43168],{icon: busIcon}).addTo(map);

//map click event
map.on('click',function(e) {
    console.log(e)
    // adding lat and long 
    var secondMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
    L.Routing.control({
            waypoints: [
                // L.latLng(27.707771, 85.319564),
                L.latLng(27.66882, 84.43168),
    // second location is from the click
                //L.latLng(e.latlng.lat, e.latlng.lng)
                L.latLng(27.69197, 84.43716)

            ]
    }).on('routesfound', function(e){
        console.log(e)
        e.routes[0].coordinates.forEach(function(coord, index){
            setTimeout(() => {
                marker.setLatLng([coord.lat, coord.lng])
            }, 700 * index); // every 100 millisec times index change the marker|
        })
    })
    
    .addTo(map);
})


//marker
var marker = L.marker([27.66882, 84.43168],{icon: busIcon}).addTo(map);

//map click event
map.on('click',function(e) {
    console.log(e)
    // adding lat and long 
    var secondMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
    L.Routing.control({
            waypoints: [
                // L.latLng(27.707771, 85.319564),
                L.latLng(27.66882, 84.43168),
    // second location is from the click
                L.latLng(e.latlng.lat, e.latlng.lng)
                // L.latLng(27.69197, 84.43716)

            ]
    }).on('routesfound', function(e){
        console.log(e)
        e.routes[0].coordinates.forEach(function(coord, index){
            setTimeout(() => {
                marker.setLatLng([coord.lat, coord.lng])
            }, 600 * index); // every 100 millisec times index change the marker|
        })
    })
    
    .addTo(map);
})

    </script>

@endsection