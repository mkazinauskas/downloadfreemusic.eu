<?php
header('Content-Type: text/xml');
@require_once "../config.php";
@require_once "../includes/functions.php";

$page = (int)$_GET['page'] - 1;

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

if ($page == 0) {
    echo '<url>';
    echo '<loc>' . $settings['web_path'] . '</loc>';
    echo '<lastmod>' . date("Y-m-d") . '</lastmod>';
    echo '<changefreq>monthly</changefreq>';
    echo '<priority>0.5</priority>';
    echo '</url>';
}
$html = @file_get_contents($settings['sitemap_url'] . "?size=" . $settings['number_of_urls_in_one_sitemap_page'] . "&page=$page");
if ($html) {
    $array = json_decode($html, true);
    foreach ($array['content'] as $one) {
        $query = readable_text($one['query']);
        echo '<url>';
        echo '<loc>' . $settings['web_path'] . "search/mp3/1/" . seoit($query) . ".html</loc>";
        echo '<changefreq>weekly</changefreq>';
        echo '<lastmod>' . date("Y-m-d") . '</lastmod>';
        echo '<priority>0.8</priority>';
        echo "</url>";
    }
}
echo '</urlset>';
?>
