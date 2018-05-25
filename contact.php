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
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </section>

        <section class="about-us">
            <div class="row">
                <div class="col-lg-10 col-md-12 offset-lg-1">
                    <h3 class="second-title mt-4">
                        Contact Us:
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-12 offset-lg-1 top-address">
                    <p class="paragraph"><b class="bold dark-blue-color">Address:</b>Lorem ipsum dolor sit amet,
                        consectetur adipisici</p>
                    <p class="paragraph"><b class="bold dark-blue-color">phone:</b>Lorem ipsum dolor sit amet, <b
                                class="bold dark-blue-color">From</b> 10:00 am - 4:00 pm <b
                                class="bold dark-blue-color">From</b> Sunday to Thursday</p>
                </div>
            </div>
            <div class="row contact-form">
                <div class="col-lg-10 col-md-12 offset-lg-1 ">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group mb-3 mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-tie"></i></span>
                                    </div>
                                    <input required type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group mb-3 mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="far fa-envelope"></i></span>
                                    </div>
                                    <input required type="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="far fa-comment"></i></span>
                                    </div>
                                    <input required type="text" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea required class="form-control" placeholder="Message"  id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-5">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
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