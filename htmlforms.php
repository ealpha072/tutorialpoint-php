<?php
   /*if( $_POST["location"] ) {
      $location = $_POST["location"];
      header( "Location:$location" );
      
      exit();
   }*/
   if( $_GET["name"] || $_GET["age"] ) {
    echo "Welcome ". $_GET['name']. "<br />";
    echo "You are ". $_GET['age']. " years old.";
    
    exit();
?>

<html>
   <body>
   
      <!--<p>Choose a site to visit :</p>
      
      <form action = "<?php $_SERVER['PHP_SELF'] ?>" method ="POST">
         <select name = "location">.
         
            <option value = "http://www.tutorialspoint.com">
               Tutorialspoint.com
            </option>
         
            <option value = "http://www.google.com">
               Google Search Page
            </option>
         
         </select>
         <input type = "submit" />
      </form>-->

      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html>