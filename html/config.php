<?php
$display = true;

$settings['web_path'] = 'http://downloadfreemusic.eu/';

$settings['user_visible_name'] = 'downloadfreemusic.eu';

//Max recent searches to display
$settings['recentlimit'] = '50';

//Display only the last x results on non-home pages
$settings['last_low'] = 'true';

$settings['last_low_limit'] = 50;

$settings['meta_keywords'] = 'free mp3 music download, listen, ' . $settings['user_visible_name'] . ', mp3 search engine.';

$settings['meta_description'] = 'Site for free mp3 music download - ' . $settings['user_visible_name'];

$settings['site_name'] = 'Free mp3 music search, download & listen engine - ' . $settings['user_visible_name'];

// Maximum length for result title
$settings['result_n_length'] = 300;

$settings['contact_us_url'] = 'https://www.facebook.com/downloadfreemusiceu-1166986500094696/messages/';

$settings['max_pages'] = 40;

$settings['htm_sitemap_pages_size'] = 50;

$settings['append_to_sitemap'] = ' free mp3 music download - ' . $settings['user_visible_name'];

$settings['search_server_url'] = 'xxxx';

$settings['sitemap_url'] = $settings['search_server_url'] . '/search/last-searches';

$settings['last_results_url'] = $settings['search_server_url'] . '/search/last-searches?size=';

$settings['number_of_urls_in_one_sitemap_page'] = 10;

//Source Config
$settings['sources'][0] = 'results.php';

//nebula results limit
$settings['nebula_results'] = 10;

if (!defined('WEB_PATH'))
    define("WEB_PATH", $settings['web_path']);

/* ================== ADS ============================= */
$_300_ad = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- downloadfree -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:600px"
                 data-ad-client="ca-pub-8750724939348971"
                 data-ad-slot="5849598185"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>';

$_720_ad = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- downloadfree 720 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-8750724939348971"
                 data-ad-slot="1227826897"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>';

$settings['home_page_ad'] = $_300_ad;

$settings['search_result_ad'] = $_720_ad;

?>