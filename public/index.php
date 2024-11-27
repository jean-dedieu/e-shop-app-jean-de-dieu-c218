<?php
$DB_HOST = "e7qyahb3d90mletd.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$DB_USER = "hhxix97i153a8gn0";
$DB_NAME = "qnrmqtu379xet78q";
$DB_PASSWORD = "j6aj08bi9xdazdug";

$connect= mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME) or die("Erreur de connexion à la base de données");

$query = $connect->query("SELECT username FROM `users`");

// Debugging: Check connection status
if (!$connect) {
    // If the connection fails, output the error
    die("Database connection failed: " . mysqli_connect_error());
} else {
    // Debug: If the connection succeeds, output success message
    var_dump("Connection successful!");
}

// Run the query
$query = $connect->query("SELECT username FROM `users`");

// Debugging: Check if the query executed successfully
if (!$query) {
    // If the query fails, output the error
    die("Query failed: " . $connect->error);
}
?>

<table>
    <tr>
        <td>Nom Utilisateur</td>
    </tr>
    <?php
    while($row = $query->fetch_array()){
        echo "<tr>
                <td>".htmlspecialchars($row['username'])."</td>
             </tr>";
    }
    ?>
</table>
