<?php
    session_start();
    include 'include/common.php';
    $conn = OpenCon();
    $User_FirstName= $_POST["User_FirstName"];
    $User_LastName= $_POST["User_LastName"];
?>

<style>
    @import url(https://fonts.googleapis.com/css?family=Oswald:400);

.navigation {
  width: 100%;
  background-color: black;
}

img {
  width: 25px;
  border-radius: 50px;
  float: left;
}

.logout {
    font-size: .8em;
    font-family: 'Oswald', sans-serif;
    position: relative;
    color: black;
    right: -13px;
    bottom: -2px;
    overflow: hidden;
    letter-spacing: 3px;
    opacity: 0;
    transition: opacity .45s;
    -webkit-transition: opacity .35s;
  
}

.button1 {
    text-decoration: none;
    float: right;
    padding: 12px;
    margin: 15px;
    color: white;
    width: 25px;
    background-color: #C49B66;
    transition: width .35s;
    -webkit-transition: width .35s;
    overflow: hidden
}

.button2 {
    text-decoration: none;
    float: left;
    padding: 10px;
    margin: 15px;
    color: black;
    width: 100px;
    background-color: #C49B66;
    transition: width .35s;
    -webkit-transition: width .35s;
    overflow: hidden;
    font-size: .9em;
    font-family: 'Oswald', sans-serif;
    text-align: center;
    letter-spacing: 2.5px;
}

a:hover {
  width: 100px;
}

a:hover .logout{
  opacity: .9;
}

button:hover{
  opacity: .9;
}

a {
  text-decoration: none;
}

body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: relative; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 50px;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  max-width: 50%;
  height: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.titleDisplay{
    margin-top: 40px;
    display: block;
    width: 100%;
    padding: 10px;
}

.messageDisplay{
    margin-top: 10px;
    display: block;
    width: 100%;
    height: 100%;
    padding: 10px;
}

:required{
    border: 2px solid red;
}

</style>


<!DOCTYPE html>
<html>

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    <!-- Title  -->
    <title>Create Blog</title>
    <div class="navigation">
                
                <a class="button1" href="logout.php">
                    
                <div class="logout">LOGOUT</div>

                </a>

                </div>
                <form action="viewBlog.php" method="POST" name="myform11">
                <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
                <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName"> 
                <input type="hidden" value="ALL" name="Month">
                <div align="center">
                  <button type="submit" class="button2">BLOG<button> 
                </div>
            </form>

            


    </div>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100i,300,400,600,700" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />

</head>
<!-- The Modal -->
<div id="myModal" class="modal"> 
  <form method="POST" action="addPost_action.php" id="formModal"> 
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>
        <div class="card text-white bg-dark mt-5" style="width: 18rem;">
            <div class="card-body"> 
                <h5 class="card-title"><span id="TitleSpan"></span></h5>
                <p class="card-text">
                <span id="MessageSpan"></span>
                </p><br>
                <a href="#" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
            </div></div> <br> <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <span class="buton buton-lg">
                        <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
                        <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName">
                        <input type="hidden" value="" id="HiddenTitle" name="subject">
                        <input type="hidden" value="" id="HiddenMessage" name="message">
                        <button class="edit" type="button" front="Edit" back="&#xf303;"></button>
                        
                        <button type="submit" front="Confirm Post" back="&#xf35d;"></button>
                        </span>
                    </div>
                </div>
            </div>
        </p>
    </div>
  </form>
</div>

<body class="dark-theme">

    <!-- =====================================
    	==== Start Blog -->
    <section class="blog section-padding">
        <div class="container">
            <div class="row">

                <div class="section-head full-width">
                <h1>Welcome <?php print $User_FirstName;?>&nbsp;<?php print $User_LastName;?></h1>
                <br>

                    <h4 class="title">Add Blog</h4>
                        <div class="container">
                            <div class="row">
                                <form class="form full-width" id="blog" method="POST" action="addPost_action.php">
                                    <div class="messages"></div>

                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="titleDisplay" id="form_subject" type="text" name="subject" placeholder="Title" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="messageDisplay" id="form_message" name="message" placeholder="Enter your text here" rows="4" required="required"></textarea>
                                                </div>
                                            </div>
                                        </div><br><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <span class="buton buton-lg">
                                                    <input type="hidden" value="<?php print $User_FirstName;?>" name="User_FirstName">
                                                    <input type="hidden" value="<?php print $User_LastName;?>" name="User_LastName">
                                                        <button type="button" id="myBtn" front="Preview" back="&#xf06e;" onclick="Preview_func()"></button> 
                                                        <script>
                                                            function Preview_func() {
                                                                // Get the modal
                                                                var modal = document.getElementById("myModal");

                                                                // Get the <span> element that closes the modal
                                                                var span = document.getElementsByClassName("close")[0];

                                                                // When the user clicks the button, open the modal 
                                                                modal.style.display = "block";
                                                                var titleID = document.getElementById("form_subject");
                                                                var title = titleID.value;
                                                                document.getElementById("TitleSpan").innerHTML = title;
                                                                document.getElementById("HiddenTitle").value = title;

                                                                var messageID = document.getElementById("form_message");
                                                                var message = messageID.value;
                                                                document.getElementById("MessageSpan").innerHTML = message;
                                                                document.getElementById("HiddenMessage").value = message;

                                                                // When the user clicks on <span> (x), close the modal
                                                                span.onclick = function() {
                                                                modal.style.display = "none";
                                                                }

                                                                // When the user clicks edit, close it
                                                                var edit = document.getElementsByClassName("edit")[0];
                                                                edit.onclick = function() {
                                                                modal.style.display = "none";
                                                                }
                                                            }
                                                        </script>  

                                                        <button onclick="myFunction()" type="button" front="Clear" back="&#10005;"></button>
                                                        
                                                        <button onclick="submitValidation()" type="submit" front="Post" back="&#xf35d;"></button>
                                                        <script>
                                                            let blogTitle = document.getElementById("form_subject");
                                                            let blogContent = document.getElementById("form_message");
                                                            let form = document.querySelector("form");

                                                            function validateInput() {
                                                                //check title and content are empty 
                                                                if (blogTitle.value.trim() === "") {
                                                                    onError(blogTitle);
                                                                } else {
                                                                    onSuccess(blogTitle);
                                                                }
                                                                if (blogContent.value.trim() === "") {
                                                                    onError(blogContent);
                                                                } else {
                                                                    onSuccess(blogContent);
                                                                }
                                                            }
                                                            function submitValidation(e) {
                                                                e.preventDefault();
                                                                validateInput();
                                                            }
                                                            function onSuccess(blogTitle) {
                                                                let parent = blogTitle.parentElement;
                                                                parent.classList.remove("error");
                                                                parent.classList.add("success");
                                                            }

                                                            function onError(blogTitle) {
                                                                let parent = blogTitle.parentElement;
                                                                parent.classList.add("error");
                                                                parent.classList.remove("success");

                                                            }
                                                        </script>
                                                        
                                                        <script>
                                                            function myFunction() {
                                                              var clear = confirm("Are you sure you want to clear?");
                                                              if (clear == false) {
                                                                clear.style.display = "none";
                                                              } else{
                                                                document.getElementById("blog").reset();
                                                              }
                                                            }

                                                        </script>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                       </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
