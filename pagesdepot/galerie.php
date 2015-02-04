<div class="fond">
<div class="cont">
    <script type="text/javascript" src="js/grossi.js"></script>
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
            //Fade in L
                {$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out R
                , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in R
                , { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
                , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in T
                , { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out B
                , { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in B
                , { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out T
                , { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR
                , { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out TB
                , { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR Chess
                , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR Chess
                , { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in TB Chess
                , { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out TB Chess
                , { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out Corners
                , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

            //Fade Clip in H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out H
                , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip in V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out V
                , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
                ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 800), 300));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->

    <div id="slider1_container" style="position: relative; top: 10em; left: 6em; width: 800px;
        height: 456px; background: #191919; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor:Pointer; position: absolute; left: 0px; top: 0px; width: 808px; height: 356px; overflow: hidden;">
            <div class="thumbnail">
                <img u="image" src="img/photo1.jpg" />
                <img u="thumb" src="img/photo1.jpg" />
            </div>
            <div class="thumbnail">
                <img u="image" src="img/photo2.jpg" />
                <img u="thumb" src="img/photo2.jpg" />
            </div>
            <div class="thumbnail">
                <img u="image" src="img/photo3.jpg" />
                <img u="thumb" src="img/photo3.jpg" />
            </div>
            <div class="thumbnail">
                <img u="image" src="img/photo4.jpg" />
                <img u="thumb" src="img/photo4.jpg" />
            </div>
            <div class="thumbnail">
                <img u="image" src="img/photo5.jpg" />
                <img u="thumb" src="img/photo5.jpg" />
            </div>
            <div class="thumbnail">
                <img u="image" src="img/photo6.jpg" />
                <img u="thumb" src="img/photo6.jpg" />
            </div>
            <div class="thumbnail">
                <img u="image" src="img/photo7.jpg" />
                <img u="thumb" src="img/photo7.jpg" />
            </div>
            <div class="thumbnail">
                <img u="image" src="img/photo8.jpg" />
                <img u="thumb" src="img/photo8.jpg" />
            </div>
            <div class="thumbnail">
                <img u="image" src="img/photo9.jpg" />
                <img u="thumb" src="img/photo9.jpg" />
            </div>
            <div class="thumbnail">
                <img u="image" src="img/photo10.jpg" />
                <img u="thumb" src="img/photo10.jpg" />
            </div>
            
            <div class="thumbnail">
                <img u="image" src="img/photo11.jpg" />
                <img u="thumb" src="img/photo11.jpg" />
            </div>
            <div class="thumbnail">
                <img u="image" src="img/photo6.jpeg" />
                <img u="thumb" src="img/photo6.jpeg" />
            </div>
        </div>
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l              (normal)
            .jssora05r              (normal)
            .jssora05l:hover        (normal mouseover)
            .jssora05r:hover        (normal mouseover)
            .jssora05ldn            (mousedown)
            .jssora05rdn            (mousedown)
            */
            .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(../img/a17.png) no-repeat;
                overflow:hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05ldn { background-position: -250px -40px; }
            .jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 800px; height: 100px; left:0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <style>
                /* jssor slider thumbnail navigator skin 01 css */
                /*
                .jssort01 .p           (normal)
                .jssort01 .p:hover     (normal mouseover)
                .jssort01 .pav           (active)
                .jssort01 .pav:hover     (active mouseover)
                .jssort01 .pdn           (mousedown)
                */
                .jssort01 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }

                .jssort01 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 68px;
                    height: 68px;
                    border: #000 2px solid;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c, .jssort01 .pav .c {
                    background: url(../img/t01.png) center center;
                    border-width: 0px;
                    top: 2px;
                    left: 2px;
                    width: 68px;
                    height: 68px;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 70px;
                    height: 70px;
                    border: #fff 1px solid;
                }
            </style>
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
                    <div class=w><div u="thumbnailtemplate" style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></div></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Thumbnail Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">bootstrap carousel</a>
    </div>
    </div> <!-- fin du cont -->
    <!-- Jssor Slider End -->

    <div id="wrapper">
    
        	<ul>

			<li>
				<a href="img/newimage/photo1.jpg" class="lightbox_trigger"><img src="thumb/photo1.jpg" alt="">
					</a>
			</li>
			<li>
				<a href="img/newimage/photo2.jpg" class="lightbox_trigger"><img src="thumb/photo2.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo3.jpg" class="lightbox_trigger"><img src="thumb/photo3.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo4.jpg" class="lightbox_trigger"><img src="thumb/photo4.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo5.jpg" class="lightbox_trigger"><img src="thumb/photo5.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo6.jpg" class="lightbox_trigger"><img src="thumb/photo6.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo7.jpg" class="lightbox_trigger"><img src="thumb/photo7.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo8.jpg" class="lightbox_trigger"><img src="thumb/photo8.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo9.jpg" class="lightbox_trigger"><img src="thumb/photo9.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo10.jpg" class="lightbox_trigger"><img src="thumb/photo10.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo11.jpg" class="lightbox_trigger"><img src="thumb/photo11.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo12.jpg" class="lightbox_trigger"><img src="thumb/photo12.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo13.jpg" class="lightbox_trigger"><img src="thumb/photo13.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo14.jpg" class="lightbox_trigger"><img src="thumb/photo14.jpg" alt="">
					</a>
			</li>

            <li>
				<a href="img/newimage/photo15.jpg" class="lightbox_trigger"><img src="thumb/photo15.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo16.jpg" class="lightbox_trigger"><img src="thumb/photo16.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo17.jpg" class="lightbox_trigger"><img src="thumb/photo17.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo18.jpg" class="lightbox_trigger"><img src="thumb/photo18.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo19.jpg" class="lightbox_trigger"><img src="thumb/photo19.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo20.jpg" class="lightbox_trigger"><img src="thumb/photo20.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo21.jpg" class="lightbox_trigger"><img src="thumb/photo21.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo22.jpg" class="lightbox_trigger"><img src="thumb/photo22.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo23.jpg" class="lightbox_trigger"><img src="thumb/photo23.jpg" alt="">
					</a>
			</li>
			
			<li>
				<a href="img/newimage/photo24.jpg" class="lightbox_trigger"><img src="thumb/photo24.jpg" alt="">
					</a>
			</li>
			<li>
				<a href="img/newimage/photo25.jpg" class="lightbox_trigger"><img src="thumb/photo25.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo26.jpg" class="lightbox_trigger"><img src="thumb/photo26.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo27.jpg" class="lightbox_trigger"><img src="thumb/photo27.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo28.jpg" class="lightbox_trigger"><img src="thumb/photo28.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo29.jpg" class="lightbox_trigger"><img src="thumb/photo29.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo30.jpg" class="lightbox_trigger"><img src="thumb/photo30.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo31.jpg" class="lightbox_trigger"><img src="thumb/photo31.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo32.jpg" class="lightbox_trigger"><img src="thumb/photo32.jpg" alt="">
					</a>
			</li>

				
            <li>
				<a href="img/newimage/photo34.jpg" class="lightbox_trigger"><img src="thumb/photo34.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo35.jpg" class="lightbox_trigger"><img src="thumb/photo35.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo36.jpg" class="lightbox_trigger"><img src="thumb/photo36.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo37.jpg" class="lightbox_trigger"><img src="thumb/photo37.jpg" alt="">
					</a>
			</li>

            <li>
				<a href="img/newimage/photo38.jpg" class="lightbox_trigger"><img src="thumb/photo38.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo39.jpg" class="lightbox_trigger"><img src="thumb/photo39.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo40.jpg" class="lightbox_trigger"><img src="thumb/photo40.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/photo41.jpg" class="lightbox_trigger"><img src="thumb/photo41.jpg" alt="">
					</a>
			</li>
				
            
			<li>
				<a href="img/newimage/1.jpg" class="lightbox_trigger"><img src="thumb/tn_1.jpg" alt="">
					</a>
			</li>
			<li>
				<a href="img/newimage/2.jpg" class="lightbox_trigger"><img src="thumb/tn_2.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/3.jpg" class="lightbox_trigger"><img src="thumb/tn_3.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/4.jpg" class="lightbox_trigger"><img src="thumb/tn_4.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/5.jpg" class="lightbox_trigger"><img src="thumb/tn_5.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/6.jpg" class="lightbox_trigger"><img src="thumb/tn_6.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/7.jpg" class="lightbox_trigger"><img src="thumb/tn_7.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/8.jpg" class="lightbox_trigger"><img src="thumb/tn_8.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/9.jpg" class="lightbox_trigger"><img src="thumb/tn_9.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/10.jpg" class="lightbox_trigger"><img src="thumb/tn_10.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/11.jpg" class="lightbox_trigger"><img src="thumb/tn_11.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/12.jpg" class="lightbox_trigger"><img src="thumb/tn_12.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/13.jpg" class="lightbox_trigger"><img src="thumb/tn_13.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/14.jpg" class="lightbox_trigger"><img src="thumb/tn_14.jpg" alt="">
					</a>
			</li>

            <li>
				<a href="img/newimage/15.jpg" class="lightbox_trigger"><img src="thumb/tn_15.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/16.jpg" class="lightbox_trigger"><img src="thumb/tn_16.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/17.jpg" class="lightbox_trigger"><img src="thumb/tn_17.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/18.jpg" class="lightbox_trigger"><img src="thumb/tn_18.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/19.jpg" class="lightbox_trigger"><img src="thumb/tn_19.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/28.png" class="lightbox_trigger"><img src="thumb/tn_28.png" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/21.jpg" class="lightbox_trigger"><img src="thumb/tn_21.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/22.jpg" class="lightbox_trigger"><img src="thumb/tn_22.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/23.jpg" class="lightbox_trigger"><img src="thumb/tn_23.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/24.jpg" class="lightbox_trigger"><img src="thumb/tn_24.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/25.jpg" class="lightbox_trigger"><img src="thumb/tn_25.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/26.jpg" class="lightbox_trigger"><img src="thumb/tn_26.jpg" alt="">
					</a>
			</li>
				
            <li>
				<a href="img/newimage/27.jpg" class="lightbox_trigger"><img src="thumb/tn_27.jpg" alt="">
					</a>
			</li>
				
                
        </ul>
     
    </div> <!-- #/wrapper -->
    <script src="js/annexe.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
    <script src="js/annexe.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
</div>