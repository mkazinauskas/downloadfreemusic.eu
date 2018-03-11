<?php
$query = preg_replace("[^A-Za-z0-9]", " ", $_GET['search']);
$query = str_replace('  ', ' ', $query);
$query = strip_tags(str_replace(array(" "), "%20", urldecode($query)));

$current = strip_tags($_GET['page']);
$count = $settings['nebula_results'];
if ($current > $settings['max_pages']) {
    header("Location: " . WEB_PATH . "search/mp3/" . $settings['max_pages'] . "/" . seoit($_REQUEST['search']) . ".html");
    exit();
}
$result_count = 0;
$html = @file_get_contents($settings['search_server_url'] . "/search/entries/search?query=$query&page=$page&size=$count");
$array = json_decode($html, true);
if ($array['content'] != null) {
    foreach ($array['content'] as $song) {
        $id = $song['id'];
        $name = $song['artistName'] . $song['name'];
        $url = obfuscate_text("https://mp3d.jamendo.com/download/track/" . $song['id'] . "/mp32");
        $license_url = $song['licenseUrl'];
        $song_source = "jamendo.com";
        $result_count++;
        $dl_message = "Instructions: For this download, right click and Save-As.";
        include("templates/result.php");
    }
}
?>
