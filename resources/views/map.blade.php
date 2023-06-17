@extends('master')
@section('content')

    <div id = "map" class=" m-24 w-50 h-50 justify-between items-center" style="width: 85vw; height: 100vh;"></div>
    <script>

        // leaflet map with osm titlelayer
        var map = L.map('map').setView([27.707771, 85.319564], 13);
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
var marker = L.marker([27.707771, 85.319564],{icon: busIcon}).addTo(map);

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
                // L.latLng(e.latlng.lat, e.latlng.lng)
                L.latLng(27.69197, 84.43716)

            ]
    }).on('routesfound', function(e){
        console.log(e)
        e.routes[0].coordinates.forEach(function(coord, index){
            setTimeout(() => {
                marker.setLatLng([coord.lat, coord.lng])
            }, 400 * index); // every 100 millisec times index change the marker|
        })
    })
    
    .addTo(map);
})



// //adding a circle
// var circle = L.circle([27.707771, 85.319564], {
//     color: 'red',
//     fillColor: '#f03',
//     fillOpacity: 0.5,
//     radius: 500
// }).addTo(map);

// //adding a polygon
// var polygon = L.polygon([
//     [27.70776, 85.312],
//     [27.70711, 85.311],
//     [27.70669, 85.301]
// ]).addTo(map);
    </script>

@endsection