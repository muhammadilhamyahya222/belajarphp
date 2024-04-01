<div>
    <!-- Halaman Depan -->

    <?php
    
        $page = $_GET['page']; // index.php?page=home (di link website)

        if (!empty($page)) {
            include_once $content[$page];
        } else {
            include_once "home.php";
        }
    ?>
</div>