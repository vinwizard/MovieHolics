<?php
    session_start();    
        if(isset($_POST['land'])) { 
            $_SESSION["MovieName"] = "La La Land (2016)";
            header("Location: template.php"); 
        } 
        if(isset($_POST['yours'])) { 
            $_SESSION["MovieName"] = "Your Name. (2016)"; 
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
    <title>Romance</title>
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
                    <img src="images/romban.jpg" alt="" />
                </span>
                <header class="major">
                    <h1>ROMANCE</h1>
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
                    <p>Romance films or romance movies are romantic love stories recorded in visual media for broadcast in theaters and on TV
                    that focus on passion, emotion, and the affectionate romantic involvement of the main characters and the journey that
                    their love takes them through dating, courtship or marriage. Romance films make the romantic love story or the search
                    for strong and pure love and romance the main plot focus. Occasionally, romance lovers face obstacles such as finances,
                    physical illness, various forms of discrimination, psychological restraints or family that threaten to break their union
                    of love. As in all quite strong, deep, and close romantic relationships, tensions of day-to-day life, temptations (of
                    infidelity), and differences in compatibility enter into the plots of romantic films.<br>
                        Here are TOP 10 of the movies from our side which are considered as the pioneers in this genre.
                    </p>
                </div>
            </section>

            <!-- Two -->
            <section id="two" class="spotlights">
                <section>
                    <a href="r10.html" class="image">
                        <img src="https://flixchatter.files.wordpress.com/2014/08/philadelphiastoryposter.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>10. The Philadelphia Story (1940)</h3>
                            </header>
                            <p>Director: George Cukor<br>
                                Writers: Donald Ogden Stewart (screen play), Philip Barry (based on the play by) <br>
                                Stars: Cary Grant, Katharine Hepburn, James Stewart <br>
                                IMDb : 7.9</p>
                            <ul class="actions">
                                <li><a href="r10.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="r9.html" class="image">
                        <img src="images/her.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>9. Her (2013) </h3>
                            </header>
                            <p>Director: Spike Jonze<br>
                                Writers: Spike Jonze
                                <br>
                                Stars:Joaquin Phoenix, Amy Adams, Scarlett Johansson<br>
                                IMDb : 8.0</p>
                            <ul class="actions">
                                <li><a href="r9.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="r8.html" class="image">
                        <img src="images/carol.jpg" alt="" data-position="25% 25%" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>8. Carol (2015)</h3>
                            </header>
                            <p>Director: Todd Haynes<br>
                                Writer: Phyllis Nagy (screenplay), Patricia Highsmith (novel)<br>
                                Stars: Cate Blanchett, Rooney Mara, Sarah Paulson<br>
                                IMDb : 7.2</p>
                            <ul class="actions">
                                <li><a href="r8.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="r7.html" class="image">
                        <img src="images/tbs.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>7. The Big Sick (2017)</h3>
                            </header>
                            <p>Director: Michael Showalter<br>
                                Writer: Emily V. Gordon, Kumail Nanjiani<br>
                                Stars: Kumail Nanjiani, Zoe Kazan, Holly Hunter<br>
                                IMDb : 7.5</p>
                            <ul class="actions">
                                <li><a href="r7.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="r6.html" class="image">
                        <img src="images/bm.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>6. Before Midnight (2013)</h3>
                            </header>
                            <p>
                                Director: Richard Linklater<br>
                                Writers: Richard Linklater, Julie Delpy<br>
                                Stars: Ethan Hawke, Julie Delpy, Seamus Davey-Fitzpatrick<br>
                                IMDb : 7.9</p>
                            <ul class="actions">
                                <li><a href="r6.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="r5.html" class="image">
                        <img src="images/aipw.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>5. Ash Is Purest White (2018)</h3>
                            </header>
                            <p>Director: Zhangke Jia<br>
                                Writers: Zhangke Jia<br>
                                Stars: Tao Zhao, Fan Liao, Yi'nan Diao<br>
                                IMDb : 7.0</p>
                            <ul class="actions">
                                <li><a href="r5.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="r4.html" class="image">
                        <img src="images/cmbyn.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>4. Call Me by Your Name (2017)</h3>
                            </header>
                            <p>Director: Luca Guadagnino<br>
                                Writers: James Ivory (screenplay by), André Aciman (based on the novel by)<br>
                                Stars: Armie Hammer, Timothée Chalamet, Michael Stuhlbarg<br>
                                IMDb : 8.0</p>
                            <ul class="actions">
                                <li><a href="r4.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="r3.html" class="image">
                        <img src="images/cblanca.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>3. Casablanca (1942)</h3>
                            </header>
                            <p>Director: Michael Curtiz<br>
                                Writers: Julius J. Epstein (screenplay), Philip G. Epstein (screenplay)<br>
                                Stars: Humphrey Bogart, Ingrid Bergman, Paul Henreid <br>
                                IMDb : 8.5</p>
                            <ul class="actions">
                                <li><a href="r3.html" class="button">Learn more</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="r2.html" class="image">
                        <img src="images/pic02.jpg" alt="" data-position="top center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>2. La La Land (2016)</h3>
                            </header>
                            <p>Director: Damien Chazelle<br>
                                Writers: Damien Chazelle
                                <br>
                                Stars: Ryan Gosling, Emma Stone, Rosemarie DeWitt<br>
                                IMDb : 8.0</p>
                            <ul class="actions">
                            <li><input type = "submit"  class = "button" value = "Learn More" name = "land"> </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <a href="r1.html" class="image">
                        <img src="images/yn.jpg" alt="" data-position="center center" />
                    </a>
                    <div class="content">
                        <div class="inner">
                            <header class="major">
                                <h3>1. Your Name. (2016)</h3>
                            </header>
                            <p>Director: Makoto Shinkai<br>
                                Writers: Makoto Shinkai<br>
                                Stars: Ryûnosuke Kamiki, Mone Kamishiraishi, Ryô Narita<br>
                                IMDb : 8.4</p>
                            <ul class="actions">
                            <li><input type = "submit"  class = "button" value = "Learn More" name = "yours"> </li>
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