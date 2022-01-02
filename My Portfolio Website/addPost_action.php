<?php
    session_start();
    include 'include/common.php';
    $conn = OpenCon();
    $User_FirstName= $_POST["User_FirstName"];
    $User_LastName= $_POST["User_LastName"];

    $SQL="SELECT * FROM `users` WHERE `firstname`='" . $User_FirstName. "' and `lastname`='" . $User_LastName . "'";
    $result = mysqli_query($conn,$SQL);
    $row = mysqli_fetch_assoc($result);
    
    $User_ID=$row["ID"];
    $subject= $_POST["subject"];
    $message= $_POST["message"];
    $SQL_test="SELECT * FROM `blog_data` WHERE `User_ID`=" . $User_ID;
    $result_test = mysqli_query($conn,$SQL_test);
    
    $Blog_count=0;

    while ($row_test = mysqli_fetch_assoc($result_test)) {
    $Blog_count = $Blog_count + 1;
    }
    $Blog_count=$Blog_count+1;
    $Blog_DT= Date("Y-m-d H:i:s");
    $SQL_Insert="INSERT INTO `blog_data` (`User_ID`, `Blog_ID`, `title`, `content`,`Blog_datetime`) VALUES (" . $User_ID . "," . $Blog_count . ",'" . $subject . "','" . $message . "','" . $Blog_DT . "')";
    $result_insert = mysqli_query($conn,$SQL_Insert);
    $info="Added";
?>
    <script>
    function auto() {
      document.myform.submit();
    }
    </script>
    <body onload="auto();">
    <form action="viewBlog.php" method="POST" name="myform">
    <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
    <input type="hidden" value="<?php print $User_LastName?>" name="User_LastName">
    <input type="hidden" value="<?php print $info?>" name="info">
    <input type="hidden" value="ALL" name="Month">
    </form>
