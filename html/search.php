<?php
if (!isset($_GET['search']) || empty($_GET['search'])) {
    header("Location:  " . $settings['web_path']);
}
require_once dirname(__FILE__) . "/config.php";
require_once dirname(__FILE__) . "/includes/functions.php";
require_once dirname(__FILE__) . "/templates/header.php";
$search = $_GET['search'];
$page = $_GET['page'];
$npage = $page + 1;
$ppage = $page - 1;
$type = $_GET['type'];
include "templates/main.php";
?>
    <h1 class="text-center mt-1 mb-1"><?php echo $ssearch . " free mp3 music download results:"; ?></h1>
    <?php echo $settings['search_result_ad']; ?>
<?php
$result_count = 0;
if (!isBanned($search)) {
    $result_count = run_results();
}
if (empty($search) || $result_count == 0) {
    ?>
    <div class="row">
        <div class="col-sm-12 mb-1">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Sorry! No results found for <strong>"<?php echo $ssearch; ?>"</strong>.</p>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    if (($npage <= $settings['max_pages'] && $result_count == $settings['nebula_results']) || $page > 1) {
        ?>
        <div class="pagination"><?php
            if ($page > 1) { ?>
                <a class="btn btn-primary mr-1" role="button"
                   href="/search/<?php echo "$type"; ?>/<?php echo "$ppage"; ?>/<?php echo seoit($search); ?>.html">Previous</a>
                <?php
            }
            if ($npage <= $settings['max_pages'] && $result_count == $settings['nebula_results']) { ?>
                <a class="btn btn-primary" role="button"
                   href="/search/<?php echo $type; ?>/<?php echo $npage; ?>/<?php echo seoit($search); ?>.html">More
                    "<?php
                    if (isset($ssearch)) {
                        echo $ssearch;
                    }
                    ?>" free mp3 music results</a>
                <?php
            }
            ?>
        </div>
        <?php
    }
}
?>
<?php
include dirname(__FILE__) . "/templates/footer.php";
?>