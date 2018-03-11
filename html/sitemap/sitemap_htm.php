<?php
@require_once "../config.php";
@require_once "../includes/functions.php";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>Site map</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1>Site Map</h1>
<p>Date of indexing: <?php echo date("Y.m.d"); ?><br>
    <?php echo $settings['htm_sitemap_pages_size']; ?> items per page</p>


<?php
$html = @file_get_contents($settings['sitemap_url'] . "?size=" . $settings['htm_sitemap_pages_size']);
if ($html) {
    $array = json_decode($html, true); ?>

    <p>Total elements indexed: <?php echo $array['totalElements']; ?> </p>


    <?php
    $totalPages = $array['totalPages'];
    if ($totalPages) {
        for ($page = 1; $page <= $totalPages; $page++) {
            echo "<p><a href=\"" . $settings['web_path'] . "sitemap-" . $page . ".htm\">Free mp3 downloads sitemap page " . $page . " </a></p>";
        }
    }
}
?>
<p><a href="<?php echo $settings['web_path']; ?>"><?php echo $settings['site_name']; ?></a><br></p>

</body>
</html>