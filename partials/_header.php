<?php
session_start();

 /* on line:15 About page will add in future */echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <a class="navbar-brand" href="/forum"> rDiscuss</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="/forum">Home <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="/forum/about.php">About</a>
     </li>
     
     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Top Categories
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
       
       $sql = "SELECT category_name FROM `categories` LIMIT 3";
       $result = mysqli_query($conn,$sql);
      ($row = mysqli_fetch_assoc($result));
         echo '<a class="dropdown-item" href="http://localhost/forum/threadlist.php?catid=%201">Python</a>';
         echo '<a class="dropdown-item" href="http://localhost/forum/threadlist.php?catid=%202">JavaScript</a>';
         echo '<a class="dropdown-item" href="http://localhost/forum/threadlist.php?catid=%207">Artificial Intelligence</a>';
     echo '</div> 
     </li>
   </ul>'; //On line 31 contact will be added....if you want
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){

echo '<form class="form-inline my-2 my-lg-0" action="search.php" method="get">
<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
 
<p class="text-light my-0 mx-2">Welcome ' . $_SESSION['email'] . '</p>
<a role="button" href="partials/_logout.php" class="btn btn-outline-success ml-2">LogOut</a>
</form>';
  }
  else{
  echo  '<form class="form-inline my-2 my-lg-0">
     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
     <div class="mx-2">
       <a  href= "http://localhost/fourm/login.php" button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</a> 
       <a  href= "http://localhost/fourm/signup.php" button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#signupModal">Signup</a>
       
   </div>
   </form>';
  }
 echo '</div>
</nav>';
include 'partials/_login.php';
include 'partials/signup.php';
if(isset($_GET['signupstatus'])== true){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert" >
  <strong>Success!</strong> Now you can login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
