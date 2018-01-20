<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MAILEC</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link rel="stylesheet"
              href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            @import url('https://srakrn.me/fonts/laksaman/laksaman.css');
            body{
                margin-top: 80px;
                font-family: 'Laksaman', serif;
                line-height: 1.8em;
            }
            h1, h2, h3, h4, h5, h6{
                margin-bottom: 1rem;
                padding-bottom: 5px;
                border-bottom: 1px solid rgba(0,0,0,0.1);
                font-weight: bold;
            }
            img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                max-width: 60%;
            }
            @media screen and (max-width: 480px) {
                img {
                    max-width: 90%;
                }
            }
            @media print {
                body, .container, .row{
                    margin: 0px;
                }
                nav{
                    display: none;
                }
            }
            @page{
                size: auto; 
                margin: 25mm 25mm 25mm 25mm;  
            } 
        </style>

    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">MAILEC</a>
        </nav>
        <div class="container">
        <?php
                include 'Parsedown.php';

                $filename = $_GET['directory'];

                $myfile = fopen($filename, "r") or die('<div class="alert alert-warning" role="alert">There appears to be no file here.</div>');
                $contents = fread($myfile, filesize($filename));
                fclose($myfile);

                $Parsedown = new Parsedown();
                echo $Parsedown->text($contents);
            ?>
        </div>
    </body>
</html>
<script type="text/x-mathjax-config">
    MathJax.Hub.Config({
        tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
    });
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML'></script>
<script>
    hljs.initHighlightingOnLoad();
    $("table").addClass("table");
</script>
