<h1 class="page-header">
    Rapports
</h1>

<style>

    @media print {
        #delete-report-button, #print-button {
            display: none;
        }
    }

</style>

<button class="btn btn-primary" onclick="window.print()" id="print-button">Print</button>

<h3 class="bg-success"><?php display_message(); ?></h3>
<table class="table table-hover">


    <thead>

    <tr>
        <th>Id</th>
        <th>Nom client</th>
        <th>Courriel client</th>
        <th>Prix</th>
        <th>Titre Produit</th>
        <th>Quantité Produit</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>


    <?php get_reports(); ?>

    </tbody>
</table>