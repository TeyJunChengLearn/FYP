@extends('layouts.forumlayout')
@section('css')
<link rel="stylesheet" href="/css/test.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map {
            height: 400px;
        }
        body {
            background-color: #fff8f2;
        }
    </style>
@endsection
@section('content')
    <main>
    <div class="container m-5">
        <h3>Recommend/Nearby Hospitals</h3>
        <p>A page where you can search through clinic or hospital all around Malaysia!</p>
        <hr>
    </div>
    <div class="container mx-5 my-3">
        <div class="row">
            <div class="col">
                <h5>Please Select a Location:</h5>
                <h4 id="locationName"></h4>
                    <p>Address:</p>
                    <p id="address"></p>
                    <p>Category:</p>
                    <p id='category'></p>
                    <p id="locationDescription"></p>
            </div>
            <div class="col">
                <div id="map"></div>
            </div>
        </div>
    </div>
    </main>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection
