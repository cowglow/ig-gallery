<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>cowglow/instagallery</title>
        <meta name="description" content="Instagram Videos by Philip Saa (@cowglow)">
        <meta name="author" content="@cowglow">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
              integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
              crossorigin="anonymous">
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <style>
            h1 {
                margin: 0;
            }
            .author-info {
                align-self: flex-end;
                margin-bottom: 3px
            }

            div {
                /*border: thin solid red;*/
            }
            @media (max-width: 760px) {
                .author-info {
                    padding-bottom: 1em;
                }
                .domain-link {
                    font-size: 1rem;
                }
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>
                        <a class="domain-link" href="http://cowglow.com/" target="_blank">COWGLOW</a>
                        <span class="domain-link">/</span>
                        <nobr>
                            <a href="#" target="_self">INSTAGALLERY</a>
                            <a href="https://github.com/cowglow/ig-gallery" target="?_blank">
                                <svg height="32" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1"
                                     width="32" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                                </svg>
                            </a>
                        </nobr>
                    </h1>
                </div>
                <div class="col-md-4 text-right author-info">
                    <small> Instagram Videos by Philip Saa (<a href="https://instagram.com/cowglow" target="_blank">@cowglow</a>)</small>
                </div>
            </div>
<pre>
            <?php
            $i = 0;
            $xmlData = simplexml_load_file('ig-data.xml');
            $grams   = array_reverse( json_decode( json_encode($xmlData->instagram) , 1));
            ?>
            </pre>
            <?php
            while ($i < count($grams)) {
                if ($i % 3 === 0) {
                    echo '<div class="row">';
                }
                $gram = $grams[$i]; ?>
                <div class="col-md-4">
                    <blockquote
                            class="instagram-media"
                            data-instgrm-version="7"
                            style="
						background:#FFF;
						border:0;
						border-radius:3px;
						box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15);
						margin: 1px;
						max-width:658px;
						padding:0;
						width:99.375%;
						width:-webkit-calc(100% - 2px);
						width:calc(100% - 2px);">
                        <div style="padding:8px;">
                            <div style="
							background:#F8F8F8;
							line-height:0;
							margin-top:40px;
							padding:28.194444444444443% 0;
							text-align:center;
							width:100%;">
                                <div style="
								background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC);
								display:block;
								height:44px;
								margin:0 auto -44px;
								position:relative;
								top:-22px;
								width:44px;">
                                </div>
                            </div>
                            <p style="
							color:#c9c8cd;
							font-family:Arial,sans-serif;
							font-size:14px;
							line-height:17px;
							margin-bottom:0;
							margin-top:8px;
							overflow:hidden;
							padding:8px 0 7px;
							text-align:center;
							text-overflow:ellipsis;
							white-space:nowrap;">
                                <a href="https://www.instagram.com/p/<?php echo $gram; ?>"
                                   style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                   target="_blank">Loading...</a>
                            </p>
                        </div>
                    </blockquote>
                </div>
                <?php
                $i++;
                if ($i % 3 === 0) {
                    echo '</div>';
                }
            } ?>
        </div>

        <pre>
        <?php
        if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1'){
            require_once('instagallery-editor.php');
        }
        ?>
        </pre>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-88179834-1', 'auto');
            ga('send', 'pageview');

        </script>
        <script src="https://platform.instagram.com/en_US/embeds.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
                integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>

