<?php
function clean($old, $new, $string)
{
    while (strpos($string, $old)) {
        $string = str_replace($old, $new, $string);
    }
    return $string;
}

function seoit($string)
{
    $string = strtolower($string);
    $string = preg_replace("/[^a-zA-Z0-9\s-]/", " ", $string);
    $string = trim($string);
    $string = str_replace(' ', '-', $string);
    $string = clean('--', '-', $string);
    return $string;
}

function readable_text($text)
{
    return preg_replace("/[^a-zA-Z0-9\s]/", " ", clean("  ", " ", urldecode($text)));
}

function run_results()
{
    include dirname(__FILE__) . "/../config.php";
    foreach ($settings['sources'] as $source) {
        include dirname(__FILE__) . "/../sources/" . $source;
    }
    return $result_count;
}

function obfuscate_text($input, $escape_special_chars = false)
{
    $output = '';
    for ($i = 0; $i < strlen($input); $i++) {
        $output .= "&#" . ord($input[$i]) . ';';
    }
    if ($escape_special_chars) {
        $output = htmlspecialchars($output);
    }
    return $output;
}

function api_results($limit, $url)
{
    $html = @file_get_contents($url . $limit);
    if ($html) {
        $array = json_decode($html, true);
        foreach ($array['content'] as $one_result) {
            $searched_query = clean("  ", " ", urldecode($one_result['query']));
            $searched_query_for_seo = seoit($searched_query);
            $search_query_visible = preg_replace("/[^a-zA-Z0-9\s]/", " ", $searched_query);
            if (!empty($searched_query)) {
                echo '<a class="badge badge-light" href="/search/mp3/1/' . $searched_query_for_seo . '.html" title="' . $search_query_visible . ' free mp3 download">' . $search_query_visible . '</a> ';
            }
        }
    }
}

function get_first_words($sentence, $count)
{
    $array = split(" ", $sentence);
    $to_return = "";
    for ($i = 0; $i <= $count; $i++) {
        if (isset($array[$i]))
            $to_return .= $array[$i] . " ";
    }
    return trim($to_return);
}

function isBanned($text)
{
    @require_once 'banned_pages.php';
    return in_array($text, $blocked_urls);
}