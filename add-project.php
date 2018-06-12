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

        <section class="about-us mb-3 project-section">
            <div class="row">
                <div class="col">
                    <h3 class="second-title mt-4">
                        Add Your Project:
                    </h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <form class="project-form" action="#" name="#" data-parsley-validate>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="pro-name">Type the title of the service
                                        <span class="small-f">Example: Translation of an electronic contract</span>
                                    </label>
                                    <input data-parsley-required="true" type="text" class="form-control"  placeholder="" id="pro-name" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mt-19">
                                    <label for="exampleFormControlSelect1">Document / video language</label>
                                    <select class="form-control" id="exampleFormControlSelect1" required>
                                        <option value="">1</option>
                                        <option value="1">2</option>
                                        <option value="2">3</option>
                                        <option value="3">4</option>
                                        <option value="4">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="pro-l">Languages you wish to translate</label>
                                    <input type="text" required class="form-control" placeholder="" id="pro-l" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="d-c">Document / video content</label>
                                    <select class="form-control" required id="d-c">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Notes to the translator</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="d-t">Delivery time
                                    <span class="small-f">translation time will be calculated after payment and viewing of document pages</span>
                                    </label>
                                    <select required class="form-control" id="d-t">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mt-38">
                                    <label for="p-m">Payment method</label>
                                    <select required class="form-control" id="p-m">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="file-loading">
                                    <input data-parsley-required="true" id="input-20" type="file" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="v-code">Do you have a discount code?</label>
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" id="v-code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">Check the code</button>
                                    </div>

                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" required type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        I agree to the <a href="#">terms of use</a>
                                    </label>
                                </div>
                                <button type="submit" id="form-submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="project-content">
                        <h4>How to use the translation request form?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at aut corporis cum elit. Accusamus at aut corpori </p>
                        <h4>Languages ​​you wish to translate</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at aut corporis cum elit. Accusamus at aut corpori </p>
                        <h4>Document / video content</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at aut corporis cum elit.</p>
                        <h4>Notes to the translator</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at aut corporis cum elit.</p>
                        <h4>Delivery time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at aut corporis cum elit. Accusamus at aut corpori ipsum dolor sit amet, consectetur adipisicing </p>
                        <h4>Payment method</h4>
                        <p>Lorem ipsum dolor sit amet</p>
                        <h4>Add files</h4>
                        <p>Lorem ipsum dolor sit amet</p>
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