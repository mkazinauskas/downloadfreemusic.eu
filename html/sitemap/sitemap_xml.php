<?php
header('Content-Type: text/xml');
@require_once "../config.php";
echo '<?xml version = "1.0" encoding = "UTF-8" ?>';
?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php
    $to = json_decode(@file_get_contents($settings['sitemap_url'] . "?size=" . $settings['number_of_urls_in_one_sitemap_page']), true)['totalPages'];
    for ($i = 0; $i < $to; $i++) {
        echo "<sitemap>\n\r";
        echo "<loc>" . $settings['web_path'] . "sitemap-" . ($i + 1) . ".xml</loc>\n\r";
        echo "<lastmod>" . date("Y-m-d") . "</lastmod>\n\r";
        echo "</sitemap>\n\r";
    }
    ?>
</sitemapindex>