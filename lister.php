<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MAILEC</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css" integrity="sha256-CNwnGWPO03a1kOlAsGaH5g8P3dFaqFqqGFV/1nkX5OU=" crossorigin="anonymous" />
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
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">MAILEC</a>
        </nav>
        <div class="container">
            <div class="row">
                <ul class="list-group" style="width: 100%">
                    <?php
                        include 'markdown.php';

                        $directory = $_GET['directory'];
                        if($directory == ''){
                            $directory = '.';
                        }
                        $phpfiles = scandir($directory);
                        $file_count = 0;

                        echo "<a href='..' class='list-group-item list-group-item-action'><span class='oi oi-arrow-thick-top'></span> Up</a>";
                        foreach($phpfiles as $phpfile)
                        {
                            $phpfile = $directory.'/'.$phpfile;
                            if(basename($phpfile)[0] == "."){
                                //
                            }
                            else if(basename($phpfile) == ".."){
                                //
                            }
                            else if(is_dir($phpfile)){
                                echo "<a href='".basename($phpfile)."' class='list-group-item list-group-item-action'><span class='oi oi-folder'></span> ".basename($phpfile)."</a>";
                                $file_count++;
                            }
                            else if(pathinfo(basename($phpfile))['extension'] == "md" && basename($phpfile) != "README.md"){
                                echo "<a href='".basename($phpfile)."' class='list-group-item list-group-item-action'><span class='oi oi-file'></span> ".basename($phpfile)."</a>";
                                $file_count++;
                            }
                        }
                        if($file_count == 0){
                            // echo "<a href='$phpfile' class='list-group-item list-group-item-action'>".basename($phpfile)."</a>";
                        }

                        $f = fopen($directory.'/'."README.md", "r") or die();
                        $contents = fread($f, filesize($directory.'/'."README.md"));
                        fclose($f);

                        echo '<div class="alert alert-secondary" role="alert" style="margin-top: 40px;">';
                        echo Markdown($contents);
                        echo '</div>';
                    ?>
                </ul>
            </div>
        </div>
    </body>
</html>
<script type="text/x-mathjax-config">
    MathJax.Hub.Config({
        tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
    });
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML'></script>
