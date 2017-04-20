<?php
  if ($_post['submit']) { //check what fields are filled in when the submit button is pressed.//
    if (!$_post['Username']) {
      $error = "please enter the empty fields"
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact the superiors</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/website.css" rel="stylesheet">
  </head>
  <body>

    <!--php navigation-->
      <?php include "navigation.php"; ?>

    <!--contact-->
      <header class="contact">
        <h1>Loggin</h1>
      </header>

  <!--CONTACT FORM-->

    <form method="post">
      <input type="text" name="Username" placeholder="Username" required autofocus>
      <input type="password" name="Password" placeholder="Password" required>
      <input type="email" name="mail" placeholder="example@example.com" required>
      <textarea rows="10" name="Person" placeholder="Your personal information" required></textarea>
      <input type="checkbox" required>i am not a robot
      <input type="submit" name="submit" class="button" value="send message">
    </form>

    <!--FOOTER-->
      <footer>&copy; <?php echo date("d/m/Y")?></footer>

  </body>
</html>
