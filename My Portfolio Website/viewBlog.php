<?php
    session_start();
    include 'include/common.php';
    $conn = OpenCon();
    $User_FirstName= $_POST["User_FirstName"];
    $User_LastName= $_POST["User_LastName"];
    $info= $_POST["info"];
    $Month= $_POST["Month"];
    $SQL="SELECT * FROM `users` WHERE `firstname`='" . $User_FirstName. "' and `lastname`='" . $User_LastName . "'";
    $result = mysqli_query($conn,$SQL);
    $row = mysqli_fetch_assoc($result);
    
    $User_ID=$row["ID"];
    
?>

<style>

.dropdown {
  margin-left: 50px;  
  margin-top: -60px;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>My Blog</title>
</head>
<body>

    <div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($info)){ ?>
            <?php if($info == "Added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }?>
        <?php } ?>

        

        <!-- Create a new Post button -->
        <div class="text-center">
        <form action="addPost.php" method="POST" name="myform0">
                <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
                <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
                <div align="center">
                  <button type="submit" class="btn btn-outline-dark" name="new_post" id="Demog_button">+ Create a new post</button> 
                </div>
            </form>
        </div>
        
        <!-- Drop-down menu of months -->
        
        <div class="dropdown">
        <button class="btn btn-outline-dark">Archives</button>
        <div class="dropdown-content">


        <form action="viewBlog.php" method="POST" name="myform1">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="ALL" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >All</button> 
            </div>
        </form>
        <form action="viewBlog.php" method="POST" name="myform1">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="01" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >January</button> 
            </div>
        </form>
        <form action="viewBlog.php" method="POST" name="myform2">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="02" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >February</button> 
            </div>
        </form>  
        <form action="viewBlog.php" method="POST" name="myform3">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="03" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >March</button> 
            </div>
        </form>
        <form action="viewBlog.php" method="POST" name="myform4">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="04" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >April</button> 
            </div>
        </form>  
        <form action="viewBlog.php" method="POST" name="myform5">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="05" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >May</button> 
            </div>
        </form>  
        <form action="viewBlog.php" method="POST" name="myform6">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="06" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >June</button> 
            </div>
        </form>  
        <form action="viewBlog.php" method="POST" name="myform7">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="07" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >July</button> 
            </div>
        </form>  
        <form action="viewBlog.php" method="POST" name="myform9">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="08" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >August</button> 
            </div>
        </form>  
        <form action="viewBlog.php" method="POST" name="myform9">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="09" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >September</button> 
            </div>
        </form>  
        <form action="viewBlog.php" method="POST" name="myform9">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="10" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >October</button> 
            </div>
        </form>  
        <form action="viewBlog.php" method="POST" name="myform9">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="11" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >November</button> 
            </div>
        </form>  
        <form action="viewBlog.php" method="POST" name="myform9">
            <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
            <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
            <input type="hidden" value="12" name="Month"> 
            <div align="center">
                <button type="submit" class="btn" name="new_post" id="Demog_button" >December</button> 
            </div>
        </form>  
        </div>
    </div>

    <?php
        $SQLBLOG="SELECT * FROM `blog_data` WHERE `User_ID`=" . $User_ID .  " order by Blog_datetime desc";
        $result_Blog = mysqli_query($conn,$SQLBLOG);

        // sorting algorithm for PHP
        $result_Blog=asort($result_Blog);
        if (mysqli_num_rows($result_Blog) == 0) { ?>
        <div align="center"><br><strong> - NO BLOGS FOUND FOR THIS USER - </strong>   </div> 
        <?php }

        else { 
        $Found=0;
        $x=0;
        $Blogarray = array();
        $row_Blog = mysqli_fetch_assoc($result_Blog);       
            $Blogarray[$x] = $result;
            $x=$x+1;
        }
        print $row_Blog["Title"];
        $BlogArray[]=$result;
        $arraylength= count($BlogArray);
        print $arraylength;
        print $Blogarray[1];
        $i=0;

        while ($row_Blog = mysqli_fetch_assoc($result_Blog)) {

            $DB_date=strtotime($row_Blog["Blog_datetime"]);
            ?>
            <div class="row">
        
                <div class="col-13 col-lg-12 d-flex justify-content-center">
                
                    <?php
                        if ($Month=="ALL") {
                        $Found=1; 
                    ?>

                    <!-- Display posts from database -->
                    <?php
                    
                    ?>

                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                        <p style="font-size: 11px">Created on: <?php print $row_Blog["Blog_datetime"];?></p>
                        <h5 class="card-title"><?php print $row_Blog["title"];?></h5>
                        <p class="card-text"><?php print substr($row_Blog["content"], 0, 50);?> ...</p>
                        <a href="view.php?id=<?php print $row_Blog['Blog_ID']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                        <?php
                        }
                    else {
                        $Blog_month=date("m", $DB_date);
                        if ($Month==$Blog_month) {
                            $Found=$Found+1;
                        ?>
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body"> 
                        <p style="font-size: 11px">Created on: <?php print $row_Blog["Blog_datetime"];?></p>
                    <h5 class="card-title"><?php print $row_Blog["title"];?></h5>
                    <p class="card-text"><?php print substr($row_Blog["content"], 0, 50);?> ...</p>
                    <a href="view.php?id=<?php print $row_Blog['Blog_ID']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div></div>
                    <?php
                        }
                    }
                        ?>
                    
                </div>
        
            </div>
        <?php      
        }
        if ($Found==0) {
        ?>
            <div align="center"><br><strong> - NO BLOGS FOUND FOR THIS MONTH - </strong>   </div> 
        <?php    
        }
        ?>
    </div>
    

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>