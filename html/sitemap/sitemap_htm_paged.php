<?php
@require_once "../config.php";
@require_once "../includes/functions.php";

$page = (int)$_GET['page'] - 1;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>Site map</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1>Site Map</h1>
<?php
$html = @file_get_contents($settings['sitemap_url'] . "?size=" . $settings['htm_sitemap_pages_size'] . "&page=$page");
if ($html) {
    $array = json_decode($html, true);
    foreach ($array['content'] as $one) {
        $readable_text = ucfirst(readable_text($one['query']));
        $url = $settings['web_path'] . "search/mp3/1/" . seoit($readable_text) . ".html";
        ?><p><a href="<?php echo $url; ?>"><?php echo $readable_text . $settings['append_to_sitemap']; ?></a></p>
        <?php
    }
}
?>
<a href="<?php echo $settings['web_path'] . "sitemap.htm" ?>">Main page</a>

<?php if ($page !== 1) { ?>
    <a href="<?php echo $settings['web_path'] . "sitemap-" . $page . ".htm" ?>">Go to previous page</a>
<?php } ?>
<a href="<?php echo $settings['web_path'] . "sitemap-" . ($page + 2) . ".htm" ?>">Go to next page</a>
</body>
</html>