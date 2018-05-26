<!doctype html>
<html lang="en">
<head>
    <?php
    include('style.php');
    ?>
    <title>Document</title>
</head>
<body>
<div class="container page-container">
    <div class="page">
        <?php
        include('header.php');
        ?>

        <section class="breadcrumb-section mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Your Project</li>
                </ol>
            </nav>
        </section>

        <section class="about-us">
            <div class="row">
                <div class="col">
                    <h3 class="second-title mt-4">
                        Add Your Project:
                    </h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="file-loading">
                        <input id="input-20" type="file" multiple>
                    </div>
                </div>
            </div>

        </section>
        <?php
        include('footer.php');
        ?>
    </div>
</div>


<?php
include('javasecript.php');
?>
</body>
</html>