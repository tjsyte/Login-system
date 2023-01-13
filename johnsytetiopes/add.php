<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add user</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS/stylesheet.css">

</head>
<body>
   
<div class="form-container">

   <form action="addnew.php" method="POST">
      <span class="blue">Print</span>
      (<span class="green">'Add user!'</span>)
      <br><br>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="submit" name="submit" value="add now" class="form-btn">
   </form>

</div>

</body>
</html>