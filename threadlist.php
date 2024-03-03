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
    $id= $_GET['catid'];
    $sql= "SELECT * FROM `categories` WHERE category_id=$id"; 
    $result = mysqli_query($conn,$sql);
    
    while($row = mysqli_fetch_assoc($result)){
       
    $catname= $row['category_name'];
    $catdesc= $row['category_description'];

    
    }

    ?>
    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method =='POST'){
        //Insert thread into DB 
        $th_title= $_POST['title'];
        $th_desc= $_POST['desc'];


        $th_title=  str_replace("<","&lt;",$th_title); //Security Purpose...it will encode html tags from the db and retrive into site in form of unser readable
        $th_title=  str_replace(">","&gt;",$th_title); //Security Purpose...it will encode html tags from the db and retrive into site in form of unser readable

        $th_desc=  str_replace("<","&lt;",$th_desc); //Security Purpose...it will encode html tags from the db and retrive into site in form of unser readable
        $th_desc=  str_replace(">","&gt;",$th_desc); //Security Purpose...it will encode html tags from the db and retrive into site in form of unser readable


        $sno=  $_POST['sno'];
        $sql= "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_user_id`,`thread_cat_id`) VALUES ( '$th_title', '$th_desc','$sno','$id')"; 
        $result = mysqli_query($conn,$sql);
        $showAlert = true;
        if($showAlert){
            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your Question has been added! Please wait for community to respond.
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
            <h1 class="display-4">Welcome <?php echo $catname ;?> forums</h1>
            <p class="lead"><?php echo $catdesc ;?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum.
                Be civil. Don't post anything that a reasonable person would consider offensive, abusive, or hate
                speech.
                Keep it clean.Self-Promote is not allowed in forum.
                Respect our forum.</p>
            <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
    </div>
    <?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true) {
   echo '<div class="container">
        <h1>Start Discussion</h1>
        <form action=" '. $_SERVER["REQUEST_URI"]. ' " method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Problem Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Keep your title as short as possible</small>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Ellaborate your Concern</label>
        <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
        <input type="hidden" name="sno" value="'.$_SESSION['sno'].'">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    </form>
    </div>';
    }
    else{ 
    echo ' 
    <div class="container">
    <h1>Start Discussion</h1>
    <div class="alert alert-warning alert-dismissible fade show my-0" role="alert" >
    <strong>You are not logged in!!</strong> Please login to be able to start the discussion. 
    
    </div>
  </div>';

    }

    ?>

    <div class="container mb-5" id="ques">
        <h1 class="py-2">Browse Questions</h1>
        <?php
    $id= $_GET['catid'];
    $sql= "SELECT * FROM `threads` WHERE thread_cat_id=$id"; 
    $result = mysqli_query($conn,$sql);
    $noResult =  true;
    while($row = mysqli_fetch_assoc($result)){
        $noResult =  false;
    $id= $row['thread_id'];
    $title= $row['thread_title'];
    $desc= $row['thread_desc'];
    $thread_user_id= $row['thread_user_id'];
    $time= $row['thread_timestamp'];
    $sql2= "SELECT email FROM `users` WHERE sno= '$thread_user_id '";
    $result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($result2);
    

    
      echo   '<div class="media" my-3>
            <img src="https://static.vecteezy.com/system/resources/previews/005/005/788/original/user-icon-in-trendy-flat-style-isolated-on-grey-background-user-symbol-for-your-web-site-design-logo-app-ui-illustration-eps10-free-vector.jpg"
                class="mr-3" alt="userdefault" width="50px">
            <div class="media-body">'.
                '<h5 class="mt-0"><a class="text-dark"href="http://localhost/forum/thread.php?threadid='.  $id. '">'.  $title .'</a></h5>
                '.  $desc .'</div> '.' <p class="font-weight-light my-2">Asked by:'. $row2['email'] .' at ' .$time . '</p>'.
        '</div>';
    }

    //echo var_dump($noResult);
    if($noResult){
        echo '<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4">No Questions Found</p>
          <p class="lead"><b>You are first person to ask the question.</b></p>
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
