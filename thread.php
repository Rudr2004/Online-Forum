<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }
    </style>


    <title>Welcome to rDiscuss - Coding Fourms</title>
</head>

<body>
<?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
    <?php
    
    $id= $_GET['threadid'];
    $sql= "SELECT * FROM `threads` WHERE thread_id=$id"; 
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        
    $title= $row['thread_title'];
    $desc= $row['thread_desc'];
    $thread_user_id= $row['thread_user_id'];
    // Query to find out the name of users
    $sql2= "SELECT email FROM `users` WHERE sno= '$thread_user_id '";
    $result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($result2);  
    $psted_by = $row2['email'];  


    
    }
    
    ?>
<?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method =='POST'){
        //Insert comment into DB
        $comment= $_POST['comment'];
        $comment=  str_replace("<","&lt;",$comment); //Security Purpose...it will encode html tags from the db and retrive into site in form of unser readable
        $comment=  str_replace(">","&gt;",$comment); //Security Purpose...it will encode html tags from the db and retrive into site in form of unser readable
        $sno= $_POST['sno']; 
        $sql= "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ( '$comment', '$id', '$sno', current_timestamp())"; 
         $result = mysqli_query($conn,$sql);
        $showAlert = true;
        if($showAlert){
            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your Comment has been added! 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
    </div>';
            
        }
    } 




 ?>



    <!-- Categories Container Starts Here -->
    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4">Welcome <?php echo $title ;?> forums</h1>
            <p class="lead"><?php echo $desc ;?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum.
                Be civil. Don't post anything that a reasonable person would consider offensive, abusive, or hate
                speech.
                Keep it clean.Self-Promote is not allowed in forum.
                Respect our forum.</p>
            <p>Posted by: <em><?php  echo $psted_by; ?></em></p>
        </div>
    </div>
    </div>
<?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true) {
        echo '<div class="container">
        <h1>Post a Comment</h1>
        <form action=" '. $_SERVER["REQUEST_URI"]. ' " method="post">
    <div class="from-group">
    <lable for="exampleForcontrolTextarea1">Type your Comment</label>
    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
    <input type="hidden" name="sno" value="'.$_SESSION['sno'].'">
    </div>
    <button type="submit" class="btn btn-success">Post</button>
    </form>
    </div>';
    }
    else{ 
        echo ' 
        <div class="container">
        <h1>Post a Comment</h1>
        <div class="alert alert-warning alert-dismissible fade show my-0" role="alert" >
        <strong>You are not logged in!!</strong> Please login to be able to post  comments. 
        
        </div>
      </div>';
    }
   
?>

    <div class="container mb-4" id="ques">
        <h1 class="py-2">Discussions</h1>
        <?php
    $id= $_GET['threadid'];
    $sql= "SELECT * FROM `comments` WHERE thread_id=$id"; 
    $result = mysqli_query($conn,$sql);
    $noResult =  true;
    while($row = mysqli_fetch_assoc($result)){
        $noResult =  false;
    $id= $row['comment_id'];
    $content= $row['comment_content'];
    $comment_time= $row['comment_time']; 
    $thread_user_id= $row['comment_by'];
    $sql2= "SELECT email FROM `users` WHERE sno= '$thread_user_id '";
    $result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($result2);  

    
      echo   '<div class="media" my-3>
            <img src="https://static.vecteezy.com/system/resources/previews/005/005/788/original/user-icon-in-trendy-flat-style-isolated-on-grey-background-user-symbol-for-your-web-site-design-logo-app-ui-illustration-eps10-free-vector.jpg"
                class="mr-3" alt="userdefault" width="50px">
            <div class="media-body">
                <p class="font-weight-bold my-0">'. $row2['email'] .' at ' .$comment_time . '</p>
                '.  $content .'
            </div>
        </div>';
    }
    if($noResult){
        echo '<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4">No Comments Found</p>
          <p class="lead"><b>Be the first person to comment.</b></p>
        </div>
      </div>';
    }
    ?>



        
    </div>



    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>
