<?php
    session_start();    
        if(isset($_POST['parasite'])) { 
            $_SESSION["MovieName"] = "Parasite (2019)";
            header("Location: template.php"); 
        } 
        if(isset($_POST['shawshank'])) { 
            $_SESSION["MovieName"] = "The Shawshank Redemption (1994)"; 
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
    <title>Drama</title>
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
                    <img src="https://wallpapercave.com/wp/SWSnJzp.jpg" alt="" />
                </span>
                <header class="major">
                    <h1>DRAMA</h1>
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
                    <p>In film and television, drama is a category of narrative fiction (or semi-fiction) intended to be more serious than
                    humorous in tone.[1] Drama of this kind is usually qualified with additional terms that specify its particular
                    super-genre, macro-genre, or micro-genre,[2] such as soap opera (operatic drama), police crime drama, political drama,
                    legal drama, historical drama, domestic drama, teen drama, and comedy-drama (dramedy). These terms tend to indicate a
                    particular setting or subject-matter, or else they qualify the otherwise serious tone of a drama with elements that
                    encourage a broader range of moods.<br>
                        Here are TOP 10 of the movies from our side which are considered as the pioneers in this genre.
                    </p>
                </div>
            </section>

            <!-- Two -->
            <section id="two" class="spotlights">
                <section>
                    <a href="d10.html" class="image">
                        <img src="images/gwtw.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>10. Gone with the Wind (1939)</h3>
                            </header>
                            <p>Director: Victor Fleming, George Cukor (uncredited)<br>
                                Writers: Margaret Mitchell (story of the old south "Gone with the Wind"), Sidney Howard (screenplay) <br>
                                Stars: Clark Gable, Vivien Leigh, Thomas Mitchell<br>
                                IMDb : 8.1</p>
                            <ul class="actions">
                                <li><input type = "submit"  class = "button" value = "Learn More" name = " Gone"> </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="d9.html" class="image">
                        <img src="https://wallpapercave.com/wp/wp1888076.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>9. Cast Away (2000) </h3>
                            </header>
                            <p>Director: Robert Zemeckis<br>
                                Writers : William Broyles Jr.
                                <br>
                                Stars:Tom Hanks, Helen Hunt, Paul Sanchez<br>
                                IMDb : 7.8</p>
                            <ul class="actions">
                                <li><a href="d9.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="d8.html" class="image">
                        <img src="images/room.jpg"
                            alt="" data-position="25% 25%" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>8. Room (2015)</h3>
                            </header>
                            <p>Director:Lenny Abrahamson<br>
                                Writer: Emma Donoghue (screenplay by), Emma Donoghue (based on the novel by)<br>
                                Stars: Brie Larson, Jacob Tremblay, Sean Bridgers<br>
                                IMDb : 8.1</p>
                            <ul class="actions">
                                <li><a href="d8.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="d7.html" class="image">
                        <img src="images/mbts.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>7. Manchester by the Sea (2016)</h3>
                            </header>
                            <p>Director: Kenneth Lonergan<br>
                                Writer: Kenneth Lonergan<br>
                                Stars: Casey Affleck, Michelle Williams, Kyle Chandler<br>
                                IMDb : 7.8
                            </p>
                            <ul class="actions">
                                <li><a href="d7.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="d6.html" class="image">
                        <img src="https://m.media-amazon.com/images/M/MV5BZWZjNmRlM2QtYTMxMC00MGY5LWJhYmUtYzQ5ZThmYjk1MGZkXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>6. Dallas Buyers Club (2013)</h3>
                            </header>
                            <p>
                                Director: Jean-Marc Vallée<br>
                                Writers: Craig Borten, Melisa Wallack<br>
                                Stars: Matthew McConaughey, Jennifer Garner, Jared Leto<br>
                                IMDb : 8.1</p>
                            <ul class="actions">
                                <li><a href="d6.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="d5.html" class="image">
                        <img src="images/ml.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>5. Moonlight (2016)</h3>
                            </header>
                            <p>Director: Barry Jenkins<br>
                                Writers: Barry Jenkins<br>
                                Stars: Mahershala Ali, Naomie Harris, Trevante Rhodes<br>
                                IMDb : 7.4</p>
                            <ul class="actions">
                                <li><a href="d5.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="d4.html" class="image">
                        <img src="https://i.pinimg.com/originals/c9/3a/88/c93a886d69acce7441f26955a0691ef4.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>4. The King's Speech (2010)</h3>
                            </header>
                            <p>Director: Tom Hooper<br>
                                Writers: David Seidler<br>
                                Stars: Colin Firth, Geoffrey Rush, Helena Bonham Carter<br>
                                IMDb : 8.0</p>
                            <ul class="actions">
                                <li><a href="d4.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="d3.html" class="image">
                        <img src="https://wallpapercave.com/wp/wp4153345.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>3. Once Upon a Time... In Hollywood (2019)</h3>
                            </header>
                            <p>Director: Quentin Tarantino<br>
                                Writers: Quentin Tarantino<br>
                                Stars: Leonardo DiCaprio, Brad Pitt, Margot Robbie<br>
                                IMDb : 7.6</p>
                            <ul class="actions">
                                <li><a href="d3.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="d2.html" class="image">
                        <img src="https://wallpapercave.com/wp/wp6118611.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>2. Parasite (2019)</h3>
                            </header>
                            <p>Director: Bong Joon Ho<br>
                                Writers:Bong Joon Ho
                                <br>
                                Stars:Song Kang-Ho, Sun-kyun Lee, Yeo-jeong Jo<br>
                                IMDb : 8.6</p>
                            <ul class="actions">
                                <li><input type = "submit"  class = "button" value = "Learn More" name = "parasite"> </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="d1.html" class="image">
                        <img src="https://wallpapercave.com/wp/wp2014258.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>1. The Shawshank Redemption (1994)</h3>
                            </header>
                            <p>Director: Frank Darabont<br>
                                Writers: Frank Darabont<br>
                                Stars: Tim Robbins, Morgan Freeman, Bob Gunton<br>
                                IMDb : 9.3</p>
                            <ul class="actions">
                                <li><input type = "submit"  class = "button" value = "Learn More" name = "shawshank"> </li>
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