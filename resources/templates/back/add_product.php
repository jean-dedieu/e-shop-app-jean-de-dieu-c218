<?php add_product(); ?>
<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Ajout Produit
</h1>
</div>



<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Titre Produit </label>
        <input type="text" name="product_title" class="form-control">

    </div>


    <div class="form-group">
           <label for="product-title">Description Produit</label>
      <textarea name="product_description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>



    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Prix Produit</label>
        <input min="0" type="number" name="product_price" class="form-control" size="60">
      </div>
    </div>



    <div class="form-group">
           <label for="product-title">Description brève produit</label>
      <textarea name="short_desc" id="" cols="30" rows="3" class="form-control"></textarea>
    </div>




</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">


     <div class="form-group">
       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
        <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
    </div>


     <!-- Product Categories-->

    <div class="form-group">
         <label for="product-title">Catégorie produit</label>

        <select name="product_category_id" id="" class="form-control">
            <option value="">Séléctionner Catégorie</option>

            <?php show_categories_add_product_page(); ?>

        </select>


</div>





    <!-- Product Brands-->


    <div class="form-group">
      <label for="product-title">Quantité en stock</label>
        <input type="number" name="product_quantity" class="form-control">
    </div>


<!-- Product Tags -->


   <!--  <div class="form-group">
          <label for="product-title">Product Keywords</label>
          <hr>
        <input type="text" name="product_tags" class="form-control">
    </div>
 -->
    <!-- Product Image -->
    <div class="form-group">
        <label for="product-title">Image Produit</label>
        <input type="file" name="file">

    </div>



</aside><!--SIDEBAR-->



</form>
