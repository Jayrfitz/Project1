<?php 
    session_start();
    $totalPrice=0; 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
    <link rel="stylesheet" type="css" href="includes/main.css">
    <title>Movies</title>
</head>
<body>
    <center><h1>CART</h1>
    <?php 
    echo "<table><tr>";
    echo "<td><b>Price:</b></td><td><b>Movie:</b></td></tr><tr>";
    for($i = $_SESSION["Counter"]; $i > 0; $i--){
        if(isset($_POST["$i"])){
            echo "<td>$" . $_SESSION["CartedItem$i"] . "</td><td>" . $_SESSION["CrtName$i"] . "</td></tr>"; 
            $totalPrice+=$_SESSION["CartedItem$i"];
        }
    }
    echo "</table>";
    
    echo "<br><h2> Total Price: $" . number_format($totalPrice, 2, '.', '') ."</h2>";
    
    session_unset(); 

    // destroy the session 
    session_destroy(); 
    ?>
    <form action="index.php">
        <input type="submit" value="Back to Home Page" /> 
    </form></center>
</body>
</html>