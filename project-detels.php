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
    <div class="page ">
        <?php
        include('header.php');
        ?>

        <section class="breadcrumb-section mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Project Details</li>
                </ol>
            </nav>
        </section>

        <section class="project-details bg-gry">
            <div class="row">
                <div class="col-lg-4 order-lg-1">
                    asdasd
                </div>
                <div class="col-lg-8 order-lg-0">
                    <div class="project-details-card bg-white">
                        <div class="container border-bottom">
                            <div class="row">
                                <div class="col">
                                    <h3 class="dark-blue-color pt-2 pb-1">project details</h3>
                                </div>
                            </div>
                        </div>
                        <div class="container pt-2">
                            <div class="row">
                                <div class="col">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto aut
                                        cumque iure repellat! Atque beatae eligendi excepturi facere impedit laborum
                                        laudantium maxime molestias pariatur quasi ratione, reprehenderit tenetur,
                                        voluptas?
                                        <br><br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eveniet
                                        illum repudiandae unde vero voluptatibus? Cum ducimus eaque minus molestiae sed.
                                        Assumenda at consequatur cupiditate, earum non odio temporibus voluptatibus?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-comment-card bg-white mt-4">
                        <div class="container border-bottom">
                            <div class="row">
                                <div class="col">
                                    <h3 class="dark-blue-color pt-2 pb-1">Replies</h3>
                                </div>
                            </div>
                        </div>
                        <!-- start comment container  -->
                        <div class=" pt-2 container border-bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="media">
                                            <img class="mr-3 media-img img-thumbnail" src="images/avatar.png"
                                                 alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="m-0">name</h5>
                                                <p class="m-0"><i class="far fa-calendar-alt"></i> from 15 manet</p>
                                            </div>
                                        </div>
                                        <p class="comment-desc">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda
                                            distinctio illum itaque quis recusandae suscipit totam veritatis voluptate.
                                            Ab consequuntur deserunt dicta earum illo quas reiciendis, totam vel velit.

                                        </p>
                                        <p class="file-in-comment"><i class="far fa-file-alt"></i> <a
                                                    href="images/avatar2.png" download="file-name">img-name</a></p>
                                    </div>
                                </div>
                        </div>
                        <!-- End comment  -->
                        <!-- start comment container  -->
                        <div class=" pt-2 container border-bottom">
                            <div class="row">
                                <div class="col">
                                    <div class="media">
                                        <img class="mr-3 media-img img-thumbnail" src="images/avatar.png"
                                             alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="m-0">name</h5>
                                            <p class="m-0"><i class="far fa-calendar-alt"></i> from 15 manet</p>
                                        </div>
                                    </div>
                                    <p class="comment-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda
                                        distinctio illum itaque quis recusandae suscipit totam veritatis voluptate.
                                        Ab consequuntur deserunt dicta earum illo quas reiciendis, totam vel velit.

                                    </p>
                                    <p class="file-in-comment"><i class="far fa-file-alt"></i> <a
                                                href="images/avatar2.png" download="file-name">img-name</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End comment  -->
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