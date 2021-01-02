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
    <!--<form action="welcome.php" method = 'post'>-->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="name">Name</label><br>
      <input type="text" name='name' required><br>
      <label for="E-mail">E-mail</label><br>
      <input type="email" name='email' required><br>
      <label for="website">Website</label><br>
      <input type="text" name='website'><br>
      <label for="comment">Comment</label><br>
      <textarea name="comment" id="" cols="30" rows="6"></textarea><br>
      <label for="gender">Gender</label>
      <input type="radio" name='gender' value=female>Female
      <input type="radio" name='gender' value=male>Male
      <input type="radio" name='gender' value=other>Other
      <input type="submit">
    </form>
    <h2>Your input: </h2>
    <ul>
      <li>Name: <?php echo $name;?></li>
      <li>E-mail: <?php echo $email;?></li>
      <li>Website: <?php echo $website;?></li>
      <li>Gender: <?php echo $gender;?></li>
      <li>Comment: <?php echo $comment;?></li>
  </ul>
  </body>
</html>