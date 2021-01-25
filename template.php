<?php
    
    session_start();
    error_reporting(E_ALL);
    $db =mysqli_connect("localhost:3306","root","","moviedatabase");
    $MovieName= $_SESSION["MovieName"];
    $MovieDeets = mysqli_query($db,"SELECT MovieName, Description, Link, MovieID FROM movies WHERE MovieName='$MovieName'");
    $MovieDeets1 = mysqli_fetch_array($MovieDeets);
    $Rev = mysqli_query($db,"SELECT * FROM reviewss where (MovieID = (select MovieID from movies where MovieName='$MovieName')) LIMIT 10");
    $Ratings = mysqli_query($db,"SELECT avg(User_Ratings) FROM reviews where MovieID = $MovieDeets1[3]"); 
    $Ratings1 = mysqli_fetch_array($Ratings);
    // $Rev = mysqli_fetch_array($Rev);

    // echo $MovieDeets1[1];
    if(isset($_POST['submit'])){

        if(empty($_POST['name'])|| empty($_POST['rating']) || empty($_POST['message']) ){
    
            $invalid="Please Enter Some Review!";
    
    
    
        }
    
        else{
    
            $UserName=$_POST['name'];
    
            $Rating=$_POST['rating'];
            
            $Review = $_POST['message'];
    
            
    
            // Check connection
    
    
    
      
    
            
    
             $UserId=mysqli_query($db,"SELECT UserId FROM users WHERE UName='$UserName'");
             $row1 = mysqli_fetch_row($UserId);
             if(mysqli_num_rows($UserId)==0){
                
                header("Location: signup.php");
                echo '<script>alert("Your Username is New! Join Our Community!")</script>';
             }
             else{
                $MovieId=mysqli_query($db,"SELECT MovieID FROM movies WHERE MovieName='$MovieName'");
             $row2 = mysqli_fetch_row($MovieId);
             mysqli_query($db,"INSERT INTO reviews (ReviewID, UserID,MovieID,User_Ratings,Review) VALUES (NULL, '$row1[0]', ' $row2[0]', '$Rating', '$Review')");
             }
             
            //  echo $row1[0]
            // $rows=mysqli_num_rows($query);
    
            //if($rows==1){header("Location: home.php");}
    
            // else{$invalid="Incorrect";}
    
             
    
        }
    
    }
    
    ?>



<!DOCTYPE HTML>

<html>

<head>
    <title><?php echo $MovieName ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <style>
        .bookmark {
            float: right;
            margin: 5px;
        }
        .checked {
                    color: orange;
        }

        /*
	Ratings Stars
	(with as little code as possible)
*/
.rating {
  unicode-bidi: bidi-override;
  direction: rtl;
  text-align: center;
}
.rating > span {
  display: inline-block;
  position: relative;
  width: 1.1em;
}
.rating > span:hover,
.rating > span:hover ~ span {
  color: transparent;
}
.rating > span:hover:before,
.rating > span:hover ~ span:before {
   content: "\2605";
   position: absolute;
   left: 0; 
   color: gold;
}

    </style>
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
        <div id="main" class="alt">

            <!-- One -->
            <section id="one">
                <div class="inner">
                    <div class="bookmark">
                        <button class="btn btn-primary"><i class="fa fa-bookmark" aria-hidden="true"></i> Bookmark</button>
                    </div>
                    <header class="major">
                        <h1><?php echo $MovieDeets1[0]; ?></h1><br>
                        <h4><p>OUR RATING :  <?php echo $Ratings1[0]; ?> /5 </p></h4>
                        <!-- <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span> -->
                    </header>
                    <center><span class="image main"><iframe width="560" height="315" src="<?php echo $MovieDeets1[2] ?>" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe></span></center>
                    <p><?php echo $MovieDeets1[1]; ?> </p> 
                        
                </div>
            </section>

            <section id="contact">
                <div class="inner">
                    <section>
                        
                        <h3>ADD A REVIEW</h3><br>
                        
                        
                            
                                
                                    <!-- <div class="rating">
                                        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                    </div> -->
                                
                            
                        
                        
                        <form method="post" action="">
                            <div class="fields">
                                <div class="field half">
                                    <label for="name">UserName</label>
                                    <input type="text" name="name" id="name" />
                                </div>
                                <div class="field half">
                                    <label for="email">Rating (Out of 5)</label>
                                    <input type="text" name="rating" id="email" />
                                </div>
                                <div class="field">
                                    <label for="message">Review</label>
                                    <textarea name="message" id="review" rows="6"></textarea>
                                </div>
                            </div>
                            <ul class="actions">
                                <li><input type="submit" value="Submit Review" name="submit" class="primary" /></li>
                                <li><input type="reset" value="Clear" /></li>
                            </ul>
                        </form>
                    </section>
                    <section class="split">
                        <!-- <section>
                            <div class="contact-method">
                                <span class="icon solid alt fa-envelope"></span>
                                <h3>Email</h3>
                                <a href="#">information@untitled.tld</a>
                            </div>
                        </section>
                        <section>
                            <div class="contact-method">
                                <span class="icon solid alt fa-phone"></span>
                                <h3>Phone</h3>
                                <span>(000) 000-0000 x12387</span>
                            </div>
                        </section>
                        <section>
                            <div class="contact-method">
                                <span class="icon solid alt fa-home"></span>
                                <h3>Address</h3>
                                <span>1234 Somewhere Road #5432<br />
                                    Nashville, TN 00000<br />
                                    United States of America</span>
                            </div>
                        </section> -->
                        <div class="userReviews">
                            <h3> USER REVIEWS</h3>
                            <table>
                            <?php 
                                
                                while($rows=mysqli_fetch_array($Rev))
                                {

                                    ?>
                                    <tr><?php echo $rows[0] ?></tr>
                                    
                                    <tr><blockquote><?php echo $rows[1] ?> </blockquote></tr>
                                    
                            
                            <?php
                                }
                        ?>  </table>  
                        </div>
                    </section>
                </div>
            </section>

        </div>
        
        <!-- Contact -->
        

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <ul class="icons">
                    <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                    <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; Untitled</li>
                    <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>
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

