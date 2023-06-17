<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Drive Nepal: Journey Beyond Speed</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-blue-600 p-4 text-white text-right px-24">
        <a href="/report" class="font-bold text-lg mx-4">Report</a>
        <a href="/map" class="font-bold text-lg mx-4">Map</a>
    </nav>

    @yeild('content')

    <footer class="bg-gray-800 text-white p-4 mt-4 flex justify-between px-36">
        <span>All Rights Reserved</span>
        <span>Powered By SSRK Squad</span>
    </footer>
</body>
</html>