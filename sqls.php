<?php
function displayAllProducts(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID";
  				        return $sql;
        
    }
    
    function displayDirector1(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID
  				        WHERE DirectorName = \"Steven Spielberg\"
  				        ORDER BY Movies.MovieName ASC";
  				        
  				        echo "STEVEN SPIELBERG";
  				        
  				        return $sql;
    }
    function displayDirector2(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID
  				        WHERE DirectorName = \"Disney\"
  				        ORDER BY Movies.MovieName ASC";
  				        
  				        echo "DISNEY";
  				        
  				        return $sql;
    }
    
    function displayDirector3(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID
  				        WHERE DirectorName = \"Michael Bay\"
  				        ORDER BY Movies.MovieName ASC";
  				        
  				        echo "MICHAEL BAY";
  				        
  				        return $sql;
    }
    
    function displayDirector4(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID
  				        WHERE DirectorName = \"Judd Apatow\"
  				        ORDER BY Movies.MovieName ASC";
  				        
  				        echo "JUDD APATOW";
  				        
  				        return $sql;
    }
    
    function displayDirector5(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID
  				        WHERE DirectorName = \"Peter Jackson\"
  				        ORDER BY Movies.MovieName ASC";
  				        
  				        echo "PETER JACKSON";
  				        
  				        return $sql;
    }
    
    function displayDirector6(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID
  				        WHERE DirectorName = \"Rob Zombie\"
  				        ORDER BY Movies.MovieName ASC";
  				        
  				        echo "ROB ZOMBIE";
  				        
  				        return $sql;
    }
    
    function displayDirector7(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID
  				        WHERE DirectorName = \"Nickelodeon\"
  				        ORDER BY Movies.MovieName ASC";
  				        
  				        echo "NICKELODEON";
  				        
  				        return $sql;
    }
    
    function displayDirector8(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID
  				        WHERE DirectorName = \"John Landis\"
  				        ORDER BY Movies.MovieName ASC";
  				        
  				        echo "JOHN LANDIS";
  				        
  				        return $sql;
    }
    
    function displayGenre1(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                FROM Movies
                INNER JOIN Category ON Movies.CategoryID = Category.CategoryID
                INNER JOIN Director ON Movies.DirectorID = Director.DirectorID
                WHERE Rating =  \"Thriller\"
                ORDER BY Movies.MovieName ASC ";
                
                 echo "THRILLER";
                
                return $sql;
    }
    
    function displayGenre2(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID
  				        WHERE Rating = \"Kids\"
  				        ORDER BY Movies.MovieName ASC";
  				        
  				        echo "KIDS";
  				        
  				        return $sql;
    }
    
    function displayGenre3(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID
  				        WHERE Rating = \"Action\"
  				        ORDER BY Movies.MovieName ASC";
  				        
  				        echo "ACTION";
  		
  		return $sql;
    }
    
    function displayGenre4(){
        $sql = "SELECT Movies.CategoryID, Movies.DirectorID, Movies.MovieName, Movies.Price, Movies.Description, Category.Rating, Director.DirectorName
                  FROM Movies
                  INNER JOIN Category
                  ON Movies.CategoryID=Category.CategoryID
  				        INNER JOIN Director
  				        ON Movies.DirectorID=Director.DirectorID
  				        WHERE Rating = \"Comedy\"
  				        ORDER BY Movies.MovieName ASC";
  				        
  				        echo "COMEDY";
  				        
  			return $sql;
    }
?>