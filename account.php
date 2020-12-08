<?php
 	session_start();
    error_reporting(E_ALL);
    $db =mysqli_connect("localhost:3306","root","","moviedatabase");
    $ban = mysqli_query($db,"SELECT name, email, complaints FROM users WHERE complaints>0 ");
	if(isset($_POST['addmovie'])){
        if(empty($_POST['name'])|| empty($_POST['director'])|| empty($_POST['writer'])|| empty($_POST['imdb'])|| empty($_POST['cast'])|| empty($_POST['genre'])|| empty($_POST['description'])){

            $invalid="Incorrect";
    
    
    
        }
    
        else{
    
            $name=$_POST['name'];
            
            $director=$_POST['director'];
    
            $writer=$_POST['writer'];
    
            $imdb=$_POST['imdb'];
    
            $cast=$_POST['cast'];

            $genre=$_POST['genre'];

            $description=$_POST['description'];

            $link=$_POST['link'];
    
            $db =mysqli_connect("localhost:3306","root","","moviedatabase");
    
            // Check connection
            //$query=mysqli_query($db,"SELECT * FROM user WHERE UPass='$pass' AND UName='$user1'");
            
            
             mysqli_query($db,"INSERT INTO `movies` (`MovieID`, `MovieName`, `Genre`, `Director`, `Writer`, `Cast`, `IMDB Rating`, `Description`, `UserRatings`, `Link`) VALUES (NULL,'$name','$genre','$director','$writer','$cast','$imdb','$description',NULL,'$link')");
            {header("Location: account.php");}
    
           {$invalid="Account Created, Please Login";}
            
        }    
    }
?> 
<!DOCTYPE HTML>

<html>

<head>
    <title>Pulp Fiction</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <a href="index.html" class="logo"><strong>MOVIEHOLICS</strong></a>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            
            <ul class="actions stacked">
                <li><a href="#" class="button fit">Log In</a></li>
                <li><a href="#" class="button primary fit">Get Started</a></li>
            </ul>
        </nav>

        <!-- Main -->
        
            <div class="form">
                <h1>ADMIN</h1>
                <h3>Add A Movie</h3>
                <form method="post" action="">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="name" id="demo-name" value="" placeholder="Name of the movie" />
                        </div>
                        
                        <div class="col-3 col-6-xsmall">
                            <input type="text" name="director" id="demo-name" value="" placeholder="Director" />
                        </div>
                        <div class="col-3 col-6-xsmall">
                            <input type="text" name="writer" id="demo-name" value="" placeholder="Writers" />
                        </div>
                        <div class="col-3 col-6-xsmall">
                            <input type="text" name="imdb" id="demo-email" value="" placeholder="IMDb Rating" />
                        </div>
                        <div class="col-3 col-6-xsmall">
                            <input type="text" name="link" id="demo-link" value="" placeholder="Trailer Link (YouTube)" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="cast" id="demo-name" value="" placeholder="Cast" />
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                            <select name="genre" id="demo-category">
                                <option value="">- Genre -</option>
                                <option value="Action">Action</option>
                                <option value="Romance">Romance</option>
                                <option value="Thriller">Thriller</option>
                                <option value="Drama">Drama</option>
                                <option value="Horror">Horror</option>
                                <option value="Crime">Crime</option>
                            </select>
                        </div>
                        <!-- Break -->
                        
                        <!-- Break -->
                        <div class="col-12">
                            <textarea name="description" id="demo-message" placeholder="Movie Description" rows="6"></textarea>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" name="addmovie"value="Add the movie" class="primary" /></li>
                                <li><input type="reset" value="Reset" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
                </>
            </div>
            <p></p>
            <div>
                <h1>Reported Users</h1>
                <ul>
                <?php 
                                
                                while($rows=mysqli_fetch_array($ban))
                                {

                                    ?>
                                     
                                <li>
                                <?php echo $rows[0];?>
                                </li> 
                                <?php
                                }
                        ?>
                </ul>
            </div>
        

        <!-- Contact -->
        

        <!-- Footer -->
        <footer id="footer">
            <!-- < class="inner">
                <ul class="icons">
                    <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                    <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                </ul>
                <!-- <ul class="copyright">
                    <li>&copy; Untitled</li>
                    <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
                </ul> -->
            
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>