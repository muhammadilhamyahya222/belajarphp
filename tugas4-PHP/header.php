<?php

include_once ('navbar.php');
include_once ('bs.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPEKU STORE</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container justify-content-center">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <?php
                    
                        foreach ($navbar as $nav => $value) {
                            // echo "$nav $value <br>";
                            echo "<li class='nav-item'>
                                        <a class='nav-link' href='index.php?page=$nav'>
                                  </li>
                                $value
                            </a>";
                        }

                    ?>
                </ul>
            </div>
        </div>
    </nav>