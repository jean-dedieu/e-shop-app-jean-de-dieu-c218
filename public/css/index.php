<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>


<!-- Début contenu de la page -->
<div class="container">

    <div class="row">


        <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>


        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">

                    <?php include(TEMPLATE_FRONT . DS . "slider.php") ?>

                </div>

            </div>

            <div class="row">

                <?php get_products_with_pagination(10); ?>


            </div><!-- fin lignes(Rows)-->

        </div>

    </div>

</div>
<!-- /.Fin contenu de la page -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
