<? session_start(); ?>
<!DOCTYPE HTML>
<html>

    <head>
        <title>justinsalmon.co.uk</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="js/twitter.js"></script>

        <script type="text/javascript">          
            $(document).ready(function() {
                refreshTweets();            
            });
        </script>
    </head>

    <body>
        <div id="main">
            <div id="header">
                <div id="logo">
                    <h1>justinsalmon<a href="#">.co.uk</a></h1>
                    <div class="slogan">:(){ :|:& };:</div>
                </div>
                <div id="menubar">
                    <ul id="menu">
                        <!-- put class="current" in the li tag for the selected page - to highlight which page you're on -->
                        <li class="current"><a href="index.html">Home</a></li>
                        <li><a href="examples.html">Examples</a></li>
                        <li><a href="page.html">A Page</a></li>
                        <li><a href="another_page.html">Another Page</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div id="site_content">
                <div id="sidebar_container">

                    <img class="paperclip" src="img/paperclip.png" alt="paperclip" />
                    <div class="sidebar">
                        <h3>Latest Tweets</h3>
                        <div id="twitter-container">
                            <? include 'twitter.php'; ?>
                        </div>
                    </div>

                    <img class="paperclip" src="img/paperclip.png" alt="paperclip" />
                    <div class="sidebar">
                        <h3>Newsletter</h3>
                        <p>If you would like to receive our newletter, please enter your email address and click 'Subscribe'.</p>
                        <form method="post" action="#" id="subscribe">
                            <p style="padding: 0 0 9px 0;"><input class="search" type="text" name="email_address" value="your email address" onclick="javascript: document.forms['subscribe'].email_address.value=''" /></p>
                            <p><input class="subscribe" name="subscribe" type="submit" value="Subscribe" /></p>
                        </form>
                    </div>

                    <img class="paperclip" src="img/paperclip.png" alt="paperclip" />
                    <div class="sidebar">
                        <h3>Latest Blog</h3>
                        <h4>Website Goes Live</h4>
                        <h5>1st July 2011</h5>
                        <p>We have just launched our new website. Take a look around, we'd love to know what you think.....<br /><a href="#">read more</a></p>
                    </div>

                </div>
                <div id="content">

                    <h1>Welcome to my website</h1>
                    <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under a <a href="http://creativecommons.org/licenses/by/3.0">Creative Commons Attribution 3.0 Licence</a>), which means that you are free to download and use it for anything you want (including modifying and amending it).</p>
                    <h2>Browser Compatibility</h2>

                </div>
            </div>
            <div id="footer">
                <p>copyright &copy; Justin Salmon 
                    | <a href="http://validator.w3.org/check?uri=referer">html5</a> 
                    | <a href="http://jigsaw.w3.org/css-validator/check/referer">css</a> 
                    | <a href="http://html5webtemplates.co.uk">thanks</a></p>
            </div>
        </div>
    </body>
</html>