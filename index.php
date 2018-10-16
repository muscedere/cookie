<?php
session_start();
$carts=[];
require 'connexion.php';

if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}

if(isset($_GET['name'])){
    $_SESSION['carts']['name'][] = $_GET['name'];
}


    ?>


    <?php require 'inc/head.php'; ?>
    <section class="cookies container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Pecan nuts</h3>
                        <p>Cooked by Penny !</p>
                        <a href="?add_to_cart=46&name=Pecan nuts&quantite=0" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate chips</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="?add_to_cart=36&name=Chocolate chips&quantite=0" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate cookie</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="?add_to_cart=58&name=Chocolate cookie&quantite=0" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>M&M's&copy; cookies</h3>
                        <p>Cooked by Penny !</p>
                        <a href="?add_to_cart=32&name=M'n'M's cookies&quantite=0" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

<?php
    require 'inc/foot.php';