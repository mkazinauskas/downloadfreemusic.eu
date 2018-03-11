<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <a href="/" class="navbar-brand"
           alt="<?php echo $settings['site_name']; ?>"><?php echo $settings['user_visible_name']; ?></a>
        <form class="form-inline" action="<?php echo WEB_PATH; ?>" method="post">
            <input class="form-control mr-sm-2" type="search" name="search"
                   placeholder="Enter song or artist name here..."
                   required="required" aria-label="Search" value="<?php if (!empty($_GET['search'])) {
                echo str_replace("-", " ", $_GET['search']);
            } ?>"/>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="container">