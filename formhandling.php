<?php 
  $name = $email = $website = $comment= $gender= '' ;
  $name_error = $email_err= $gender_err= $website_err= $comment_err='';

  if($_SERVER["REQUEST_METHOD"]=='POST'){
    #name validation 
    if(empty($_POST['name'])){
      $name_error = 'Name is required';
    }else{
      $name = sanitizeData($_POST['name']);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        # code...
        $name_error = "Only letters and white space allowed";
      }
    }
    #email validity
    if(empty($_POST['email'])){
      $email_err = "E-mail is required";
    }else{
      $email = sanitizeData($_POST['email']);
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_err = 'Invalid email address';
      }
    }

    #website validity
    if(empty($_POST['website'])){
      $website = "";
    }else{
      $website = sanitizeData($_POST['website']);
      if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
        $website_err = "Invalid url";
      }
    }

    #gender validity
    if(empty($_POST['gender'])){
      $gender_err = "Gender is required";
    }else{
      $gender = sanitizeData($_POST['gender']);
    }

    #comment validity
    if(empty($_POST['comment'])){
      $comment = "";
    }else{
      $comment = sanitizeData($_POST['comment']);
    }


    /*
    $name = sanitizeData($_POST['name']);
    $email = sanitizeData($_POST['email']);
    $website = sanitizeData($_POST['website']);
    $comment = sanitizeData($_POST['comment']);
    $gender = sanitizeData($_POST['gender']);*/
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <label for="name">Name</label><br>
      <input type="text" name='name' value="<?php echo $name;?>"><span class='error'> <?php echo $name_error;?></span>
      <br>
      <label for="E-mail">E-mail</label><br>
      <input type="email" name='email' value="<?php echo $email;?>">
      <span class='error'> <?php echo $email_err;?></span>
      <br>
      <label for="website">Website</label><br>
      <input type="text" name='website' value="<?php echo $website;?>">
      <span class='error'> <?php echo $website_err;?></span>
      <br>
      <label for="comment">Comment</label><br>
      <textarea name="comment" id="" cols="30" rows="6" value="<?php echo $comment?>"></textarea>
      <span class='error'> <?php echo $comment_err;?></span>
      <br>
      <label for="gender">Gender</label>
      <input type="radio" name='gender' 
      <?php if(isset($gender)&& $gender==='female'){echo "checked";};?>
      value=female>Female
      <input type="radio" name='gender' 
      <?php if(isset($gender)&& $gender==='male'){echo "checked";};?>
      value=male>Male
      <input type="radio" name='gender' 
      <?php if(isset($gender)&& $gender==='other'){echo "checked";};?>
      value=other>Other
      <br>
      <span class='error'> <?php echo $gender_err;?></span><br>
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