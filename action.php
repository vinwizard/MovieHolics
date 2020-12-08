<?php
    session_start();    
        if(isset($_POST['Indi'])) { 
            $_SESSION["MovieName"] = "Indiana Jones and the Last Crusade";
            header("Location: a1.php"); 
        } 
        if(isset($_POST['PF'])) { 
            $_SESSION["MovieName"] = "Pulp Fiction"; 
            header("Location: a1.php");
        } 
        if(isset($_POST['KB1'])) { 
            $_SESSION["MovieName"] = "Kill Bill: Vol. 1 (2003)"; 
            header("Location: a1.php");
        } 
    ?>

<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Action</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <!-- Note: The "styleN" class below should match that of the banner element. -->
        <header id="header" class="alt style2">
            <a href="index.html" class="logo"><strong>MOVIEHOLICS</strong></a>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <ul class="links">
                <li><a href="index.html">Home</a></li>
                <li><a href="landing.html">Landing</a></li>
                <li><a href="generic.html">Generic</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul>
            <ul class="actions stacked">
                <li><a href="#" class="button primary fit">Get Started</a></li>
                <li><a href="#" class="button fit">Log In</a></li>
            </ul>
        </nav>

        <!-- Banner -->
        <!-- Note: The "styleN" class below should match that of the header element. -->
        <section id="banner" class="style2">
            <div class="inner">
                <span class="image">
                    <img src="images/pic00.jpg" alt="" />
                </span>
                <header class="major">
                    <h1>ACTION</h1>
                </header>
                
            </div>
        </section>

        <!-- Main -->
        <div id="main">

            <!-- One -->
            <section id="one">
                <div class="inner">
                    <header class="major">
                        <h2>About the Genre</h2>
                    </header>
                    <p>Action film is a film genre in which the protagonist or protagonists are thrust into a series of events that typically
                    include violence, extended fighting, physical feats, rescues and frantic chases. Action films tend to feature a mostly
                    resourceful hero struggling against incredible odds, which include life-threatening situations, a dangerous villain, or
                    a pursuit which usually concludes in victory for the hero (though a small number of films in this genre have ended in
                    the victory for the villain instead). Advancements in CGI have made it cheaper and easier to create action sequences and
                    other visual effects that required the efforts of professional stunt crews in the past. However, reactions to action
                    films containing significant amounts of CGI have been mixed, as films that use computer animations to create
                    unrealistic, highly unbelievable events are often met with criticism.,<br>
                    Here are TOP 10 of the movies from our side which are considered as the pioneers in this genre.</p>
                </div>
            </section>

            <!-- Two -->
            <form method = "post" action = "">
            <section id="two" class="spotlights">
                <section>
                    <a href="a10.html" class="image">
                        <img src="images/indi.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>10. Indiana Jones and the Last Crusade (1989)</h3>
                            </header>
                            <p>Director: Steven Spielberg<br>
                            Writers: Jeffrey Boam (screenplay), George Lucas (story) <br>
                            Stars: Harrison Ford, Sean Connery, Alison Doody <br>
                            IMDb : 8.2</p>
                            <ul class="actions">
                                <li><input type = "submit"  class = "button" value = "Learn More" name = " Indi"> </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="a9.html" class="image">
                        <img src="images/rd.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>9. Reservoir Dogs (1992)</h3>
                            </header>
                            <p>Director: Quentin Tarantino<br>
                            Writers: Quentin Tarantino, Quentin Tarantino (background radio dialogue written by) <br>
                            Stars: Harvey Keitel, Tim Roth, Michael Madsen<br>
                            IMDb : 8.3</p>
                            <ul class="actions">
                            <li><input type = "submit"  class = "button" value = "Learn More" name = "Reservoir"> </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="a8.html" class="image">
                        <img src="images/ib.jpg" alt="" data-position="25% 25%" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>8. Inglourious Basterds (2009)</h3>
                            </header>
                            <p>Director: Quentin Tarantino<br>
                            Writer: Quentin Tarantino<br>
                            Stars: Brad Pitt, Diane Kruger, Eli Roth<br>
                            IMDb : 8.3</p>
                            <ul class="actions">
                                <li><a href="a8.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="a7.html" class="image">
                        <img src="images/dju.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>7. Django Unchained (2012)</h3>
                            </header>
                            <p>Director: Quentin Tarantino<br>
                            Writer: Quentin Tarantino<br>
                            Stars: Jamie Foxx, Christoph Waltz, Leonardo DiCaprio<br>
                                IMDb : 8.4</p>
                            <ul class="actions">
                                <li><a href="a7.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="a6.html" class="image">
                        <img src="images/memento.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>6. Memento (2000)</h3>
                            </header>
                            <p>
                            Director: Christopher Nolan<br>
                            Writers: Christopher Nolan (screenplay), Jonathan Nolan (short story "Memento Mori")<br>
                            Stars: Guy Pearce, Carrie-Anne Moss, Joe Pantoliano<br>
                                IMDb : 8.4</p>
                            <ul class="actions">
                                <li><a href="a6.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="a5.html" class="image">
                        <img src="images/glad.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>5. Gladiator(2000)</h3>
                            </header>
                            <p>Director: Ridley Scott<br>
                            Writers: David Franzoni (story), David Franzoni (screenplay)<br>
                            Stars: Russell Crowe, Joaquin Phoenix, Connie Nielsen<br>
                                IMDb : 8.5</p>
                            <ul class="actions">
                                <li><a href="a5.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="a4.html" class="image">
                        <img src="images/t2.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>4. Terminator 2: Judgment Day (1991)</h3>
                            </header>
                            <p>Director: James Cameron<br>
                            Writers: James Cameron, William Wisher<br>
                            Stars: Arnold Schwarzenegger, Linda Hamilton, Edward Furlong<br>
                                IMDb : 8.5</p>
                            <ul class="actions">
                                <li><a href="a4.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="a3.html" class="image">
                        <img src="images/ss.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>3. Seven Samurai (1954)</h3>
                            </header>
                            <p>Director: Akira Kurosawa<br>
                            Writers: Akira Kurosawa (screenplay by), Shinobu Hashimoto (screenplay by)<br>
                            Stars: Toshirô Mifune, Takashi Shimura, Keiko Tsushima <br>
                                IMDb : 8.6</p>
                            <ul class="actions">
                                <li><a href="a3.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="a2.html" class="image">
                        <img src="images/kbv1.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>2. Kill Bill: Vol. 1 (2003)</h3>
                            </header>
                            <p>Director: Quentin Tarantino<br>
                                Writers: Quentin Tarantino, Quentin Tarantino (background radio dialogue written by) <br>
                                Stars: Uma Thurman, David Carradine, Daryl Hannah<br>
                                IMDb : 8.1</p>
                            <ul class="actions">
                            <li><input type = "submit"  class = "button" value = "Learn More" name = "KB1"> </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="a1.html" class="image">
                        <img src="images/pf.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>1. Pulp Fiction (1994)</h3>
                            </header>
                            <p>Director: Quentin Tarantino<br>
                                Writers: Quentin Tarantino (stories), Roger Avary (stories)<br>
                                Stars: John Travolta, Uma Thurman, Samuel L. Jackson<br>
                                IMDb : 8.8</p>
                            <ul class="actions">
                            <li><input type = "submit"  class = "button" value = "Learn More" name = "PF"> </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </section>
        </form>
            <!-- Three -->
            <!-- <section id="three">
                <div class="inner">
                    <header class="major">
                        <h2>Massa libero</h2>
                    </header>
                    <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna
                        magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna.
                        Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem
                        consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus
                        amet pharetra et feugiat tempus.</p>
                    <ul class="actions">
                        <li><a href="generic.html" class="button next">Get Started</a></li>
                    </ul>
                </div>
            </section> -->

        </div>

        <!-- Contact -->
        <section id="contact">
            <div class="inner">
                <section>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" />
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="6"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Send Message" class="primary" /></li>
                            <li><input type="reset" value="Clear" /></li>
                        </ul>
                    </form>
                </section>
                <section class="split">
                    <section>
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
                    </section>
                </section>
            </div>
        </section>

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