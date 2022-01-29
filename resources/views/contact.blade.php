@extends('layouts.main')
<script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      const jakarta = { lat: -6.135200, lng: 106.813301 };
      // The map, centered at Uluru
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: jakarta,
      });
      // The marker, positioned at Uluru
      const marker = new google.maps.Marker({
        position: jakarta,
        map: map,
      });
    }
  </script>
@section('container')
    <div class="container-sm container-width mt-3">
        <div class="container">
            <h2>Contact</h2>
            <div class="container bg-steel-blue mb-2 p-2">
                <p class="text-muted ml-3">Telp : 083812xxxxxx</p>
                <p class="text-muted ml-3">Whatsapp : 083812xxxxxx </p>
                <p class="text-muted ml-3">Location : Jl. Gg Haji Naim No.68 RT 03/02 Kembangan Utara, Jakarta Barat</p>
            </div>
            <div id="map"></div>
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly" async></script>
        </div>
    </div>
@endsection