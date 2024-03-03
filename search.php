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
    #maincontainer {
        min-height: 100vh;
    }
    </style>

    <title>Search</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <!-- Search Result -->
    <div class="container my-3" id="maincontainer">

        <h1 class="py-3" style="text-align: center"><i>Serch Results for <?php echo $_GET['search'] ?></i></h1> <!-- search result making-->
        <?php
        $noResult= true;
        $query = $_GET["search"];
    $sql= "SELECT * FROM `threads` where match (thread_title, thread_desc) against ('$query')"; 
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        
    $title= $row['thread_title'];
    $desc= $row['thread_desc'];
    $id= $row['thread_id'];
    $url= "thread.php?threadid=" .$id;
    $noResult= false;             
    // Display search Results
        echo '<div class="result" style="font-style: italic">
                        <h3> <a href=" '. $url. '" class="text-dark"</a>'. $title. '</h3>
                        <p>'. $desc. '</p>       
               </div>';


    }
    if($noResult){
        echo '<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4">No Results Found</p>
          <p class="lead">Suggestions: <ul>
                <li>  Make sure that all words are spelled correctly. </li>
                <li>  Try different keywords.</li>
                <li> Try more general keywords.</li>
                </ul>
          </p>
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



