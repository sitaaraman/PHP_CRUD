<?php

// Default location
$lat = 20.5937;
$lon = 78.9629;
$zoom = 5;
$place = "";

if (!empty($_GET['q'])) {
    $place = trim($_GET['q']);
    $query = urlencode($place);

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
<html>
<head>
<title>WanderMind - Map</title>
<style>
body { margin:0; font-family: Arial; background:#f5f7fa; }
header { background:#0077b6; color:#fff; padding:15px 30px; }
.search-section { text-align:center; margin:20px; }
.search-box input { padding:10px; width:300px; }
.search-box button { padding:10px 15px; background:#0077b6; color:white; border:none; }
iframe { width:100%; height:780px; border:none; }
</style>
</head>

<body>

<header>
    <h2>🌍 WanderMind</h2>
</header>

<div class="search-section">
    <form class="search-box" method="get">
        <input type="text" name="q" placeholder="Search place"
               value="<?= htmlspecialchars($place) ?>" required>
        <button type="submit">Search</button>
    </form>
</div>

<iframe
src="https://www.openstreetmap.org/export/embed.html?mlat=<?= $lat ?>&mlon=<?= $lon ?>&zoom=<?= $zoom ?>&marker=<?= $lat ?>,<?= $lon ?>">
</iframe>

</body>
</html>
