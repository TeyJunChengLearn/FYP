@extends('layouts.forumlayout')
@section('css')
<link rel="stylesheet" href="/css/test.css">
<link rel="stylesheet" href="/css/nologin.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map { height: 600px; }
    </style>
@endsection
@section('content')
<div id="map"></div>
    <h2 id="locationName">Select a location</h2>
    <p id="address">address</p>
    <p id='category'>category</p>
    <p id="locationDescription"></p>

    <script>
        // Set the map view to the center of Malaysia
        var map = L.map('map').setView([4.2105, 108.9758], 6);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var locations = @json($locations);

        locations.forEach(function(location) {
            var marker = L.marker([location.latitude, location.longitude]).addTo(map);

            marker.on('click', function() {
                document.getElementById('locationName').textContent = location.name;
                document.getElementById('address').textContent = location.address;
                document.getElementById('category').textContent = location.category;
                document.getElementById('locationDescription').textContent = location.description;
            });
        });

        // Add user location functionality with red color
        function onLocationFound(e) {
            var radius = e.accuracy / 2;

            var userIcon = L.icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            L.marker(e.latlng, {icon: userIcon}).addTo(map)
                .bindPopup("You are within " + radius + " meters from this point").openPopup();

            L.circle(e.latlng, {
                radius: radius,
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.2
            }).addTo(map);
        }

        function onLocationError(e) {
            alert(e.message);
        }

        map.on('locationfound', onLocationFound);
        map.on('locationerror', onLocationError);

        map.locate({setView: true, maxZoom: 16});
    </script>
@endsection
