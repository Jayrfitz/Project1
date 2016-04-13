<?php
    session_start();
    $counter = 0;

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
    <center>
  <div>
    <center><form action = "index.php" method = "POST">
             <center>
              <div>
                 <h1> Otter Box: </h1>
                  <b>Director Name: </b>
                  <select name="Directed" >
                      <option selected disabled hidden value= ''></option>
                      <option value="Director1">Steven Spielberg</option>
                      <option value="Director2">Disney</option>
                      <option value="Director3">Michael Bay</option>
                      <option value="Director4">Judd Apatow</option>
                      <option value="Director5">Peter Jackson</option>
                      <option value="Director6">Rob Zombie</option>
                      <option value="Director7">Nickelodeon</option>
                      <option value="Director8">John Landis</option>
                      <option selected="selected" value="default">Any</option>
                  </select>
                  <b>OR</b>
                  <b>Genre: </b>
                   <select name="Genre" >
                      <option selected disabled hidden value= ''></option>
                      <option value="Genre1">Thriller</option>
                      <option value="Genre2">Kids</option>
                      <option value="Genre3">Action</option>
                      <option value="Genre4">Comedy</option>
                      <option selected="selected" value="default">Any</option>
                  </select>
            <input type='submit' value='Search Products'/>  
        </div>
      </center>
      </form ></center>
      <br>
      <br>
      <div>
        <form action="cart.php" method ="POST">
        <?php
          
        include 'includes/database.php'; 
        include 'includes/sqls.php';
        $conn = getDatabaseConnection();
        $sql = displayAllProducts();
            if ($_POST['Directed'] == "Director1"){
             $sql = displayDirector1();
            }
            if ($_POST['Directed'] == "Director2"){
             $sql = displayDirector2();
            }
            if ($_POST['Directed'] == "Director3"){
             $sql = displayDirector3();
            }
            if ($_POST['Directed'] == "Director4"){
             $sql = displayDirector4();
            }
            if ($_POST['Directed'] == "Director5"){
             $sql = displayDirector5();
            }
            if ($_POST['Directed'] == "Director6"){
             $sql = displayDirector6();
            }
            if ($_POST['Directed'] == "Director7"){
             $sql = displayDirector7();
            }
            if ($_POST['Directed'] == "Director8"){
             $sql = displayDirector8();
            }
            
            if($_POST['Genre'] == "Genre1"){
              $sql = displayGenre1();
            }
            if($_POST['Genre'] == "Genre2"){
               $sql = displayGenre2();
            }
            if($_POST['Genre'] == "Genre3"){
              $sql = displayGenre3();
            }
            if($_POST['Genre'] == "Genre4"){
              $sql = displayGenre4();
            }
        $records = getDataBySQL($conn, $sql);
        echo "<table>";
        echo "<tr>"; 
        echo "<td><b>Checkout</b></td>"; 
        echo "<td><b>No.</b></td>"; 
        echo "<td><b>Movies:</b></td>"; 
        echo "<td><b>Description:</b></td>"; 
        echo "<td><b>Genre:</b></td>";
        echo "<td><b>Director:</b></td>";
        echo "<td><b>Price:</b></td>";
        echo "</tr>";
        foreach ($records as $record) {
          $counter++;
          echo "<tr>"; 
          echo "<td><input type=\"checkbox\" name =\"$counter\" value=\"$counter\"></td>"; 
          echo "<td>" . $counter . "</td>"; 
          echo "<td>" . $record['MovieName'] . "</td>"; 
          echo "<td>" .$record['Description']. "</td>";
          echo "<td>" . $record['Rating'] . "</td>";
          echo "<td>" . $record['DirectorName'] . "</td>";
          echo "<td>$" . $record['Price'] . "</td>";
          echo "</tr>";
          $_SESSION["Counter"] = $counter;
          $_SESSION["CartedItem$counter"] = $record['Price'] ;
           $_SESSION["CrtName$counter"] =  $record['MovieName'];
        } //endForeach
        echo "</table>";
        ?>
          <br>
          <input type="submit" value="Add to Cart" />    
        </form>
      </div>
      <div>
      <footer>
        <br>
        <b>Made by Jason & Jason for Jason's Amusement</b>
      </footer>
      </div>
      </div>
      </center>
</body>
</html>