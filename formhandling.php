<html>
  <body>
    <form action="welcome.php" method = 'post'>
      <label for="name">Name</label><br>
      <input type="text" name='name' require><br>
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
  </body>
</html>