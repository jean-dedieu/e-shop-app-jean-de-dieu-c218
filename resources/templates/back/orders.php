
 <div class="col-md-12">
<div class="row">
<h1 class="page-header">
   Toutes les Commandes

</h1>

<h4 class= "bg-success"><?php display_message(); ?></h4>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>id</th>
           <th>Montant</th>
           <th>Transaction</th>
           <th>Devise</th>
           <th>Statut</th>
   
      </tr>
    </thead>
    <tbody>
        <?php display_orders(); ?>

    </tbody>
</table>
</div>