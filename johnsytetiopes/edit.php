<?php
  include "config.php";
  $id="";
  $name="";
  $email="";
  $password="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:view.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: view.php");
      exit;
    }
    $id=$row["id"];
    $name=$row["name"];
    $email=$row["email"];
    $password=$row["password"];

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=($_POST['password']);
    
    $sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$id'";
    $result = $conn->query($sql);
    header("location: view.php");
    
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update user</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="CSS/stylesheet.css">

</head>
<body>
   
<div class="form-container">

   <form action=" " method="POST">
      <span class="blue">Print</span>
      (<span class="green">'Update user!'</span>)
      <br><br>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="text" name="name" required placeholder="update your name">
      <input type="email" name="email" required placeholder="update your email">
      <input type="password" name="password" required placeholder="update your password">
      <input type="submit" name="submit" value="Update now" class="form-btn">
   </form>

</div>

</body>
</html>