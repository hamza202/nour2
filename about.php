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
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </section>

        <section class="about-us">
            <div class="row">
                <div class="col">
                    <h3 class="second-title mt-4">
                        about us:
                    </h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto aspernatur
                        consectetur culpa cupiditate dolor et ex illo incidunt maiores natus nulla perferendis quo
                        recusandae rerum, similique, soluta ut voluptatem.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3 class="second-title mt-4">
                        Our vision:
                    </h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto aspernatur
                        consectetur culpa cupiditate dolor et ex illo incidunt maiores natus nulla perferendis quo
                        recusandae rerum, similique, soluta ut voluptatem.
                    </p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <h3 class="second-title mt-4">
                        Our goals:
                    </h3>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet
                    </p>
                    <ul class="list-number">
                        <li><p class="paragraph">Lorem ipsum dolor sit amet, consectetur</p></li>
                        <li><p class="paragraph">Lorem ipsum dolor sit amet, consectetur</p></li>

                        <li><p class="paragraph">Lorem ipsum dolor sit amet, consectetur</p></li>

                        <li><p class="paragraph">Lorem ipsum dolor sit amet, consectetur</p></li>

                    </ul>
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