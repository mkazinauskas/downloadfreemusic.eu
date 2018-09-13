<?php

require_once dirname(__FILE__) . "/config.php";
require_once dirname(__FILE__) . "/includes/functions.php";

if (isset($_REQUEST['search'])) {
    header("Location: /search/mp3/1/" . seoit($_REQUEST['search']) . ".html");
} else {
    $is_home = true;
    require_once dirname(__FILE__) . "/templates/header.php";
    require_once dirname(__FILE__) . "/templates/home.php";
}


require_once dirname(__FILE__) . "/templates/footer.php";
?>