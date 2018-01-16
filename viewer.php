<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MAILEC</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <style>
            @import url('https://srakrn.me/fonts/laksaman/laksaman.css');
            body{
                margin-top: 80px;
                font-family: 'Laksaman', serif;
            }
            h1, h2, h3, h4, h5, h6{
                margin-bottom: 1rem;
                padding-bottom: 5px;
                border-bottom: 1px solid #ccc;
            }
            img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 60%;
            }
            @media screen and (max-width: 480px) {
                img {
                    width: 90%;
                }
            }
        </style>

    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">MAILEC</a>
        </nav>
        <div class="container">
        <?php
                include 'markdown.php';

                $filename = $_GET['directory'];

                $myfile = fopen($filename, "r") or die('<div class="alert alert-warning" role="alert">There appears to be no file here.</div>');
                $contents = fread($myfile, filesize($filename));
                fclose($myfile);

                echo Markdown($contents);
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
