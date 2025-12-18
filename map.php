<?php


// Default location (India)
$lat = 20.5937;
$lon = 78.9629;
$zoom = 5;
$searchedPlace = "";

// Handle search
if (!empty($_GET['q'])) {
    $searchedPlace = trim($_GET['q']);
    $query = urlencode($searchedPlace);

    $url = "https://nominatim.openstreetmap.org/search?q=$query&format=json&limit=1";
    $opts = [
        "http" => [
            "header" => "User-Agent: WanderMind/1.0\r\n"
        ]
    ];
    $context = stream_context_create($opts);
    $response = file_get_contents($url, false, $context);
    $data = json_decode($response, true);

    if (!empty($data)) {
        $lat = $data[0]['lat'];
        $lon = $data[0]['lon'];
        $zoom = 14;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>WanderMind - Map</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<style>
body { margin: 0; font-family: Arial, sans-serif; background: #f5f7fa; }
header {
    background: #0077b6;
    color: white;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
nav a {
    color: #ffdf00;
    margin: 0 10px;
    text-decoration: none;
    font-weight: bold;
}
nav a:hover { text-decoration: underline; }

.search-section {
    text-align: center;
    margin: 20px auto;
}
.search-box {
    display: inline-flex;
    width: 60%;
    max-width: 500px;
}
.search-box input {
    flex: 1;
    padding: 10px;
    border: 2px solid #0077b6;
    border-radius: 6px 0 0 6px;
}
.search-box button {
    padding: 10px 20px;
    background: #0077b6;
    color: white;
    border: none;
    font-weight: bold;
    border-radius: 0 6px 6px 0;
    cursor: pointer;
}
.search-box button:hover { background: #023e8a; }

#map {
    width: 100%;
    height: 780px;
}
</style>
</head>

<body>

<header>
    <h1>🌍 WanderMind</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="destinations.php">Destinations</a>
        <a href="my_bookings.php">My Bookings</a>
        <a href="map.php">Map</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<section class="search-section">
    <h2>🗺 Explore on Map</h2>

    <form class="search-box" method="get">
        <input type="text" name="q"
               placeholder="Search for a place..."
               value="<?= htmlspecialchars($searchedPlace) ?>" required>
        <button type="submit">Search</button>
    </form>
</section>

<!-- Leaflet Map -->
<div id="map"></div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    // Initialize map
    var map = L.map('map').setView([<?= $lat ?>, <?= $lon ?>], <?= $zoom ?>);

    // OpenStreetMap tile
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Marker
    var marker = L.marker([<?= $lat ?>, <?= $lon ?>]).addTo(map);

    <?php if (!empty($searchedPlace)): ?>
        marker.bindPopup("<?= htmlspecialchars($searchedPlace) ?>").openPopup();
    <?php endif; ?>
</script>

</body>
</html>
