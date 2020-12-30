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
    
    $a = 0;
    $final =25;
    while ($a < 10) {
      # code...
      $final--;
      $a++;
    }
    echo "Loop stopped when a was ".$a. " and final was ".$final. '<br>';
  
    $initial = 0;
    $last = 30;

    /*do {
      # code...
      $initial +=5;
    } while ($last <= 50);

    echo 'Loop stopped when initial was '.$initial;*/

    $numArray = array(1,2,3,4,5);
    foreach ($numArray as $value) {
      # code...
      $value +=3;
      echo "Value is ".$value. "<br />";
    }
  
  ?>  
</body>
</html>