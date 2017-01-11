<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../../Styles/Stylesheet.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

        
    </head>

    <body>
        <div id="wrapper">
            <nav id="navigation">
                <ul id="nav">
                            <li><a href="../../Novels.php">Novels</a></li>
                            <li><a href="../../Ongoing.php">Ongoing</a></li>
                                    
                            <li><a href="../../TheThing.php">Well..</a></li> 
                            <li><a href="../../Slide.php">We'll..</a></li>
                            <li><a href="../../Mangas.php">..Figure It Out</a></li>
                    
                </ul>
            </nav>
            
                <div id="content_area">

                    <?php error_reporting(0);

                        if (!isset($chTitle)) {
                            echo "<center>$Title</center>
                            <div id='m1_cont'>$content</div>";
                        } else {                    
                            echo "<center>$chTitle</center>
                            <div id='m1_cont'>$chapter</div>";
                        };
                    ?>
                </div>
            
            <footer>
                <h4><p>Me, Myself & I, Thankme!</p></h4>
            </footer>
        </div>
    </body>
</html>
