<html>
<body>
  <?php 
    $date = date('D');
    if ($date == 'Fri') {
      # code...
      echo "Have a nice weekend";
    }else {
      echo "Have a anice day";
      echo "<br>";
    }

    $first = 0;
    $second = 0;
    
    for ($i=0; $i <5 ; $i++) { 
      # code...
      $first +=5;
      $second +=10;
    }
    echo 'At loop end, first is' .$first. ' while second is '.$second. '<br>';
  
  ?>  
</body>
</html>