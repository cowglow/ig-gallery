<?php

namespace Cowglow\InstagramGallery\Infrastructure;


class DispatchController
{
    /**
     * Instance of Class
     * @var null
     */
    protected static $instance = null;

    public function __invoke($JSON_Object)
    {
        print_r($JSON_Object);
    }

    public function __construct($params)
    {

        $rootDirectory = dirname(dirname(dirname(__DIR__))).DIRECTORY_SEPARATOR;
        include_once $rootDirectory.'assets'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR.'header.php';
        include_once $rootDirectory.'assets'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR.'footer.php';

        //        $grams = array_reverse($params);
//
        echo 'one';

//        $counter = 0;
//        while ($counter < count($grams)) {
//            if ($counter % 3 === 0) {
//                echo '<div class="row">';
//            }
//            $gram = $grams[$counter];
//            ?>
<!--            <div class="col-lg-4">-->
<!--                <blockquote-->
<!--                        class="instagram-media"-->
<!--                        data-instgrm-version="7"-->
<!--                        style="-->
<!--						background:#FFF;-->
<!--						border:0;-->
<!--						border-radius:3px;-->
<!--						box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15);-->
<!--						margin: 1px;-->
<!--						max-width:658px;-->
<!--						padding:0;-->
<!--						width:99.375%;-->
<!--						width:-webkit-calc(100% - 2px);-->
<!--						width:calc(100% - 2px);">-->
<!--                    <div style="padding:8px;">-->
<!--                        <div style="-->
<!--							background:#F8F8F8;-->
<!--							line-height:0;-->
<!--							margin-top:40px;-->
<!--							padding:28.194444444444443% 0;-->
<!--							text-align:center;-->
<!--							width:100%;">-->
<!--                            <div style="-->
<!--								background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC);-->
<!--								display:block;-->
<!--								height:44px;-->
<!--								margin:0 auto -44px;-->
<!--								position:relative;-->
<!--								top:-22px;-->
<!--								width:44px;">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <p style="-->
<!--							color:#c9c8cd;-->
<!--							font-family:Arial,sans-serif;-->
<!--							font-size:14px;-->
<!--							line-height:17px;-->
<!--							margin-bottom:0;-->
<!--							margin-top:8px;-->
<!--							overflow:hidden;-->
<!--							padding:8px 0 7px;-->
<!--							text-align:center;-->
<!--							text-overflow:ellipsis;-->
<!--							white-space:nowrap;">-->
<!--                            <a href="https://www.instagram.com/p/--><?php //echo $gram; ?><!--"-->
<!--                               style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"-->
<!--                               target="_blank">Loading...</a>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </blockquote>-->
<!--            </div>-->
<!--            --><?php
//            $counter++;
//            if ($counter % 3 === 0) {
//                echo '</div>';
//            }
//        }

    }
}
