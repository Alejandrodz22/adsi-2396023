<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Main menu (PHP)"?></title>
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Main menu(PHP)"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
      </div>
    </nav>
    
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo "<h1 class='text-center my-5'>main menu(php)</h1>";?>
                <hr>

                <div class="list-group">
                   <a href="01-hello-world.php" class="list-group-item list-group-item-action">          
                    <span class="badge rounded-pill bg-dark" >01</span>01-hello world           
                   </a>
                   <a href="02-info.php" target="blank" class="list-group-item list-group-item-action">          
                    <span class="badge rounded-pill bg-dark" >02</span>02-info.php           
                   </a>
                   <a href="03-comments.php" class="list-group-item list-group-item-action">          
                    <span class="badge rounded-pill bg-info" >03</span>03-comments          
                   </a>
                   <a href="04-variables.php" class="list-group-item list-group-item-action">          
                    <span class="badge rounded-pill bg-dark" >04</span>04-variables.php          
                   </a>
                   <a href="05-strings.php" class="list-group-item list-group-item-action">          
                    <span class="badge rounded-pill bg-dark" >05</span>05-strings.php         
                   </a>
                   <a href="06-oper-arithmetics.php" class="list-group-item list-group-item-action">          
                    <span class="badge rounded-pill bg-dark" >06</span>06-oper-arithmetics.php           
                   </a>
                   <a href="07-oper-assignment.php" class="list-group-item list-group-item-action">          
                    <span class="badge rounded-pill bg-dark" >07</span>07-oper-assignment.php          
                   </a>
                   <a href="08-oper-comparison.php" class="list-group-item list-group-item-action">          
                    <span class="badge rounded-pill bg-dark" >08</span>08-oper-comparison.php         
                   </a>
                   <a href="09-oper-logics.php" class="list-group-item list-group-item-action">          
                    <span class="badge rounded-pill bg-dark" >09</span>09-oper-logics.php          
                   </a>
                   <a href="10-conditional-if.php" class="list-group-item list-group-item-action">          
                    <span class="badge rounded-pill bg-dark" >10</span>
10-conditional-if.php         
                   </a>


                </div>
                
            </div>
        </div>
    </main>

    
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
    
</body>
</html>