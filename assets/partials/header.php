<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>cowglow/ig-gallery</title>
        <meta name="description" content="Instagram Videos by Philip Saa (@cowglow)">
        <meta name="author" content="@cowglow">
        <?php if ($GLOBALS['isDev']) { ?>
<!--[if lt IE9]><script src="node_modules/html5shiv/dist/html5shiv.min.js"></script><![endif]-->
            <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
        <?php } else { ?>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <?php } ?>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
        <link href="assets/fonts/fonts.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <div class="row">
                <div class="col-md-8">
                    <h1>
                        <a href="http://cowglow.com/" target="_self">COWGLOW</a>
                        <span>/</span>
                        <nobr>
                            <a href="#" target="_self">INSTAGALLERY</a>
                            <a href="https://github.com/cowglow/ig-gallery"
                               target="_blank"><?php include dirname(__DIR__).DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR.'github-svg.php'; ?></a>
                        </nobr>
                    </h1>
                </div>
                <div class="col-md-4 text-right author-info">
                    <hr>
                    <small>
                        Instagram Videos by Philip Saa
                        (<a href="https://instagram.com/cowglow" target="_blank">@cowglow</a>)
                    </small>
                </div>
            </div>
        </header>
