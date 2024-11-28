<?php require_once __DIR__ . '/../resources/config.php';
?>

<?php include TEMPLATE_FRONT."header.php" ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">


          <?php include TEMPLATE_FRONT."side_nav.php" ?>


            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">

                      <?php include TEMPLATE_FRONT."slider.php" ?>

                    </div>

                </div>

                <div class="row">

                    <?php get_products_with_pagination(10); ?>


                </div><!-- ROw ends here-->

            </div>

        </div>

    </div>
    <!-- /.container -->
<?php include TEMPLATE_FRONT."footer.php" ?>
