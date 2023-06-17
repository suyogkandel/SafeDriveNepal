<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Drive Nepal: Journey Beyond Speed</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- leaflet css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

    <!-- leaflet routine machine -->
     <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

    <!-- leaflet js -->
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

     <!-- leaflet routing machine js -->
     <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

</head>
<body>
    <nav class="bg-blue-600 p-4 text-white flex justify-between px-20">
        <a href="/" class="font-bold justify-center text-xl m-2 ">SAFE DRIVE NEPAL</a>
        <a href="/map" class="font-bold text-xl m-2 ">Map</a>
        <a href="/report" class="font-bold text-xl m-2 ">Report</a>

    </nav>

    @yield('content')


    <footer class="bg-gray-800 text-white p-4 mt-4 flex justify-between px-36">
        <span>All Rights Reserved</span>
        <span>Powered By SSRK Squad</span>
    </footer>
</body>
</html>