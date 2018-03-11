<?php $is_search_page = false;
if (isset($_GET['search'])) {
    $ssearch = ucfirst(str_replace('-', ' ', $_GET['search']));
    $is_search_page = true;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="keywords" content="<?php
    if ($is_search_page) {
        echo $ssearch . ', ' . str_replace(' ', ', ', $ssearch) . ", ";
    }
    echo $settings['meta_keywords'];
    ?>"/>
    <meta name="description" content="<?php
    if (isset($ssearch)) {
        echo 'Download ' . $ssearch . ' mp3 for free. Free ' . $ssearch . ' mp3 download - ' . $settings['user_visible_name'];
        if (isset($is_search_page)) {
            echo " page " . $_GET['page'];
        }
    } else {
        echo $settings['meta_description'];
    }
    ?>"/>
    <?php if (isset($is_home) && $is_home) {
        ?>
        <link rel="canonical" href="<?php echo $settings['web_path']; ?>"/>
    <?php }
    ?>
    <title><?php
        if (isset($ssearch)) {
            echo $ssearch . ' mp3 music download';
            if ($is_search_page) {
                echo " page " . $_GET['page'];
            }
        } else {
            echo $settings['site_name'];
        }
        ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
</head>
<body>