<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>cowglow/instagallery</title>
  <meta name="description" content="Instagram Videos by Philip Saa (@cowglow)">
  <meta name="author" content="@cowglow">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>COWGLOW/INSTAGALLERY<small> Instagram Videos by Philip Saa (<a href="https://instagram.com/cowglow" target="_blank">@cowglow</a>)</small></h1>
			</div>
		</div>

        <?php
        /** INSTRUCTIONS BELOW **/
        $i = 0;
        $ig[] = '1N3nASHuQY';
        $ig[] = '2LsfYXHuaj';
        $ig[] = '2nhMRonuV5';
        $ig[] = '31FtaDHucw';
        $ig[] = '5sZD0iHuRd';
        $ig[] = '8PlHlpHuWR';
        $ig[] = '-26fWbHua4';
        $ig[] = '_BN8-cnuZ6';
        $ig[] = '_Y41MsHuTf';
        $ig[] = 'BBHG8YxnuaA';
        $ig[] = 'BDSJK5hHuQ-';
        $ig[] = 'BE8SKmnnuWv';
        $ig[] = 'BGPe6Pmnuem';
        $ig[] = 'BIdM0sTB5Hy';
        $ig[] = 'BJ4d4NwBD28';
        $ig[] = 'BK-D5XyBv4R';
        $ig[] = 'BO15RBXhSvZ';
        $ig[] = 'BUG_PjaFkX2';
        $ig[] = 'BeGEJbsll1A';
        $ig[] = 'BiCvhPXB9xC';
        $ig[] = 'BiwkaKlApWR';

        // $ig[] = '';
        /** ADD NEW CODE ON BOTTOM **/
        $ig = array_reverse($ig);
        ?>

        <?php while ($i < count($ig)) { ?>
        <?php if ($i%3 === 0) { echo '<div class="row">'; } ?>
            <?php $igi = $ig[$i]; ?>
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
                            <a href="https://www.instagram.com/p/<?php echo $igi; ?>" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Loading...</a>
                        </p>
                    </div>
                </blockquote>
            </div>
            <?php $i++; ?>
        <?php if ($i%3 === 0) { echo '</div>'; } ?>
        <?php } ?>
	</div>


	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-88179834-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<script src="https://platform.instagram.com/en_US/embeds.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>

