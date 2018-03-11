<?php
$default_name = $name;
$name = $name . " (free mp3 music download)";
if (strlen($name) > $settings['result_n_length']) {
    $name = substr($name, 0, strrpos(substr($name, 0, $settings['result_n_length']), ' ')) . '...';
}
?>
<div class="row">
    <div class="col-sm-12 mb-1">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title"><?php echo $default_name . ' free mp3 music download'; ?></h2>
                <p class="card-text"><b>Song source:</b> <?php echo $song_source; ?></p>
                <p class="card-text">
                    <audio controls>
                        <source src="<?php echo $url; ?>" type="audio/mpeg"/>
                        Your browser does not support the audio element.
                    </audio>
                </p>
                <a href="<?php echo $license_url; ?>" rel="nofollow" target="_blank" class="btn btn-primary">Read
                    license</a>
                <a href="<?php echo $url; ?>" rel="nofollow" target="_blank" class="btn btn-success">Download</a>
            </div>
        </div>
    </div>
</div>