<footer class="mt-5">
    <?php
    if ($settings['last_low'] == 'true') {
        $limit = $settings['last_low_limit'];
    } else {
        $limit = $settings['recentlimit'];
    }
    echo '<h3 class="text-center">LAST ' . $limit . ' FREE MP3 DOWNLOAD SEARCHES</h3>'; ?>
    <p class="text-center">
        <?php api_results($limit, $settings['last_results_url']); ?>
    </p>
    <hr/>
    <div class="site-info col-sm-12">
        <p class="text-muted"> Copyright © 2017 <?php echo $settings['user_visible_name']; ?>
            <a href="<?php echo $settings['contact_us_url']; ?>" target="_blank"
               class="float-right ml-1 badge badge-light">Contact us!</a>
            <a href="/sitemap.htm" target="_blank" class="float-right ml-1 badge badge-light">Sitemap</a>
            <a href="/copyright.htm" target="_blank" class="float-right ml-1 badge badge-light">Copyright</a>
        </p>
    </div>
    <div class="site-info col-sm-12">
        <p class="text-muted text-center">
            This site does not store any files on its server. We only index and link to content provided by other
            sites. If you see illegal links, please contact us and we will delete them.
        </p>
    </div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>