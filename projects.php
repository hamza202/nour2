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
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </section>

        <section class="about-us projects">
            <div class="border-bottom ">
                <div class="row ">

                    <div class="col-md-9 col-sm-8">
                        <h5 class="text-capitalize pt-3"><a href="#">project title</a></h5>
                        <p class="project-sub-details">
                            <span><i class="far fa-calendar-alt"></i> Posted 2 days ago</span>
                            <span class="project-comment"><i class="far fa-comment-dots"></i> 5 replies</span></p>
                    </div>
                    <div class="col-md-3 col-sm-4 d-flex align-self-center justify-content-center">
                        <div class="project-case text-center">
                            <p class="d-inline-block m-0 bg-danger">
                                Waiting for activation
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-bottom ">
                <div class="row ">

                    <div class="col-md-9 col-sm-8">
                        <h5 class="text-capitalize pt-3"><a href="#">project title</a></h5>
                        <p class="project-sub-details">
                            <span><i class="far fa-calendar-alt"></i> Posted 2 days ago</span>
                            <span class="project-comment"><i class="far fa-comment-dots"></i> 5 replies</span></p>
                    </div>
                    <div class="col-md-3 col-sm-4 d-flex align-self-center justify-content-center">
                        <div class="project-case text-center">
                            <p class="d-inline-block m-0 bg-success">
                                Translation...
                            </p>
                        </div>
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