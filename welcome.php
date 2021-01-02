<?php 
  $name = $email = $website = $comment= $gender= '' ;

  if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name = sanitizeData($_POST['name']);
    $email = sanitizeData($_POST['email']);
    $website = sanitizeData($_POST['website']);
    $comment = sanitizeData($_POST['comment']);
    $gender = sanitizeData($_POST['gender']);
  }


  function sanitizeData($input){
    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);
    return $input;
  }
?>



<html>
<body>
  <h2>Your info is as follows:</h2> 
  <ul>
    <li>Name: <?php echo $name;?></li>
    <li>E-mail: <?php echo $email;?></li>
    <li>Website: <?php echo $website;?></li>
    <li>Gender: <?php echo $gender;?></li>
    <li>Comment: <?php echo $comment;?></li>
  </ul>
</body>
</html>