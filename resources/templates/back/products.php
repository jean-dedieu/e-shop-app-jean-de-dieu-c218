
<h1 class="page-header">
   Tous les Produits

</h1>

<h3 class="bg-success"><?php display_message(); ?></h3>
<table class="table table-hover">


    <thead>

      <tr>
           <th>Id</th>
           <th>Titre</th>
           <th>Catégorie</th>
           <th>Prix</th>
           <th>Quantité</th>
      </tr>
    </thead>
    <tbody>

      
      <?php get_products_in_admin(); ?>


  </tbody>
</table>



