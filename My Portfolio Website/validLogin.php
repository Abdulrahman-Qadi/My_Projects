<?php
    session_start();
    include 'include/common.php';
    $conn = OpenCon();
    $email = $_POST['email'];
    $password = $_POST['password'];


    
    $SQL="SELECT * FROM `users` WHERE `email`='" . $email . "' and `password`='" . $password . "'";
    $result = mysqli_query($conn,$SQL);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 0) {
       ?>
       <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title></title>
            </head>
            <body>
                <h1 align="center"> Email and Password not found in database! </h1>
                <p class="back" align="center"><a href="login.php">Back to login</p>
                
            </body>
            </html>
  <?php          
    }
else {
    ?>
    <script>
    function auto() {
      document.myform.submit();
    }
    </script>
    <body onload="auto();">
    <form action="addPost.php" method="POST" name="myform">
    <input type="hidden" value="<?php print $row['firstname'];?>" name="User_FirstName">
    <input type="hidden" value="<?php print $row['lastname'];?>" name="User_LastName">
    </form>
<?php
	 
	}
?>