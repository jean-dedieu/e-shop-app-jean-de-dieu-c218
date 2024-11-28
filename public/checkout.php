<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

<!-- /.row -->

<div class="row">
      <h4 class="text-center bg-danger"><?php display_message(); ?></h4>
      <h1>Checkout</h1>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="sb-i47mgj11320218@business.example.com">
<input type="hidden" name="currency_code" value="DO">
<input type="hidden" name="upload" value="1">


    <table class="table table-striped">
        <thead>
          <tr>
           <th>Produit</th>
           <th>Prix</th>
           <th>Quantité</th>
           <th>Sous-total</th>

          </tr>
        </thead>
        <tbody>
          <?php cart(); ?>
        </tbody>
    </table>

  <?php
//  show_paypal();
  echo show_buy_button();
  ?>
</form>



<!--  ***********CART TOTALS*************-->

<div class="col-xs-4 pull-right ">
<h2>Total Panier</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php
echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";?></span></td>
</tr>
<tr class="shipping">
<th>Livraison et réception</th>
<td>Livraison gratuite</td>
</tr>

<tr class="order-total">
<th>Total Commande</th>
<td><strong><span class="amount">&#36;<?php
echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";?>



</span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


    </div>
    <!-- /.container -->



<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>

<script src="https://js.stripe.com/v3"></script>
<script>

    let stripe = Stripe('<?= $_ENV['STRIPE_PUB_KEY'] ?>');

    $('#btn').on('click', function(e){
        e.preventDefault();


     stripe.redirectToCheckout({sessionId: '<?= isset($_SESSION['checkout_session_id'])  ?  $_SESSION['checkout_session_id'] : null; ?>'})

    })
</script>