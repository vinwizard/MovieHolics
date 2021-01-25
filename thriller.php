<?php
    session_start();    
        if(isset($_POST['fight'])) { 
            $_SESSION["MovieName"] = "Fight Club (1999)";
            header("Location: template.php"); 
        } 
        if(isset($_POST['silence'])) { 
            $_SESSION["MovieName"] = "The Silence of the Lambs (1991)"; 
            header("Location: template.php");
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
    <title>Thriller</title>
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
            <!-- <ul class="links">
                <li><a href="index.html">Home</a></li>
                <li><a href="landing.html">Landing</a></li>
                <li><a href="generic.html">Generic</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul> -->
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
                    <img src="images/tbanner.jpg" alt="" />
                </span>
                <header class="major">
                    <h1>THRILLER</h1>
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
                    <p>Thriller is a genre of fiction, having numerous, often overlapping subgenres. Thrillers are characterized and defined by
                    the moods they elicit, giving viewers heightened feelings of suspense, excitement, surprise, anticipation and
                    anxiety.
                    
                    Thrillers generally keep the audience on the "edge of their seats" as the plot builds towards a climax. The cover-up of
                    important information is a common element.[3] Literary devices such as red herrings, plot twists, unreliable narrators,
                    and cliffhangers are used extensively. A thriller is often a villain-driven plot, whereby they present obstacles that
                    the protagonist must overcome.<br>
                        Here are TOP 10 of the movies from our side which are considered as the pioneers in this genre.
                    </p>
                </div>
            </section>

            <!-- Two -->
            <section id="two" class="spotlights">
                <section>
                    <a href="t10.html" class="image">
                        <img src="images/ywnrh.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>10. You Were Never Really Here (2017)</h3>
                            </header>
                            <p>Director: Lynne Ramsay<br>
                                Writers: Lynne Ramsay <br>
                                Stars: Joaquin Phoenix, Judith Roberts, Ekaterina Samsonov <br>
                                IMDb : 6.8</p>
                            <ul class="actions">
                                <li><a href="t10.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="t9.html" class="image">
                        <img src="images/vertigo.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>9. Vertigo (1958) </h3>
                            </header>
                            <p>Director: Alfred Hitchcock<br>
                                Writers: Alec Coppel (screenplay by), Samuel A. Taylor (screenplay by)
                                <br>
                                Stars:James Stewart, Kim Novak, Barbara Bel Geddes<br>
                                IMDb : 8.3</p>
                            <ul class="actions">
                                <li><a href="t9.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="t8.html" class="image">
                        <img src="https://c4.wallpaperflare.com/wallpaper/584/757/317/tom-hardy-locke-movies-wallpaper-preview.jpg" alt="" data-position="25% 25%" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>8. Locke (2013)</h3>
                            </header>
                            <p>Director: Steven Knight<br>
                                Writer: Steven Knight<br>
                                Stars: Tom Hardy, Olivia Colman, Ruth Wilson<br>
                                IMDb : 7.1</p>
                            <ul class="actions">
                                <li><a href="t8.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="t7.html" class="image">
                        <img src="images/ncfom.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>7. No Country for Old Men (2007)</h3>
                            </header>
                            <p>Director: Ethan Coen, Joel Coen<br>
                                Writer: Ethan Coen, Joel Coen<br>
                                Stars: Tommy Lee Jones, Javier Bardem, Josh Brolin<br>
                                IMDb : 8.1</p>
                            <ul class="actions">
                                <li><a href="t7.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="t6.html" class="image">
                        <img src="images/split.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>6. Split (2016)</h3>
                            </header>
                            <p>
                                Director: M. Night Shyamalan<br>
                                Writers: M. Night Shyamalan<br>
                                Stars: James McAvoy, Anya Taylor-Joy, Haley Lu Richardson<br>
                                IMDb : 7.3</p>
                            <ul class="actions">
                                <li><a href="t6.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="t5.html" class="image">
                        <img src="images/seven.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>5. Se7en (1995)</h3>
                            </header>
                            <p>Director: David Fincher<br>
                                Writers: Andrew Kevin Walker<br>
                                Stars: Morgan Freeman, Brad Pitt, Kevin Spacey<br>
                                IMDb : 8.6</p>
                            <ul class="actions">
                                <li><a href="t5.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="t4.html" class="image">
                        <img src="images/zodiac.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>4. Zodiac (2007)</h3>
                            </header>
                            <p>Director: David Fincher<br>
                                Writers: James Vanderbilt (screenplay), Robert Graysmith (book)<br>
                                Stars: Jake Gyllenhaal, Robert Downey Jr., Mark Ruffalo<br>
                                IMDb : 7.7</p>
                            <ul class="actions">
                                <li><a href="t4.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="t3.html" class="image">
                        <img src="images/si.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>3. Shutter Island (2010)</h3>
                            </header>
                            <p>Director: Martin Scorsese<br>
                                Writers: Laeta Kalogridis (screenplay), Dennis Lehane (novel)<br>
                                Stars: Leonardo DiCaprio, Emily Mortimer, Mark Ruffalo <br>
                                IMDb : 8.2</p>
                            <ul class="actions">
                                <li><a href="t3.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="t2.html" class="image">
                        <img src="images/tsotl.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>2. The Silence of the Lambs (1991)</h3>
                            </header>
                            <p>Director: Jonathan Demme<br>
                                Writers:Thomas Harris (novel), Ted Tally (screenplay)
                                <br>
                                Stars:Jodie Foster, Anthony Hopkins, Lawrence A. Bonney<br>
                                IMDb : 8.6</p>
                            <ul class="actions">
                            <li><input type = "submit"  class = "button" value = "Learn More" name = "silence"> </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="t1.html" class="image">
                        <img src="images/fc.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>1. Fight Club (1999)</h3>
                            </header>
                            <p>Director: David Fincher<br>
                                Writers: Chuck Palahniuk (novel), Jim Uhls (screenplay)<br>
                                Stars: Brad Pitt, Edward Norton, Meat Loaf<br>
                                IMDb : 8.8</p>
                            <ul class="actions">
                            <li><input type = "submit"  class = "button" value = "Learn More" name = "fight"> </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </section>

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