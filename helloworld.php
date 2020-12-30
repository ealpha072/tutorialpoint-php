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

    $myNum = 46;

    while($myNum<60){
      $myNum ++;
      if($myNum === 59){
        break;
      }
    }
    echo "Loop stopped when my number was ".$myNum. '<br>';
    
    $evenNum = array(2,4,6,8,10);
    foreach ($evenNum as $value) {
      # code...
      if($value ===4){
        continue;
       
      }
      echo "Value is ".$value. '<br>';

    }
    ##associative array
    $people = array('moham'=>2000,'queen'=>4000, 'alp'=>800);
    
    echo 'Mohams salary is '.$people['moham']. ',<br/>';
    
  ?>  
</body>
</html>