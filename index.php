
<!doctype html>

<html lang="en-us">
<head>

    <meta charset="gbk">

    
    <title>Demo</title>
    <link rel="stylesheet" media="screen" href="http://www.responsinator.com/css/main.css?v=4">
    <link rel="stylesheet" media="screen" href="./assets/responsive.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js" charset="utf-8"></script>
    
    
    <style type="text/css">
    
    .intro {
        width:70%;
        margin:0 auto;
    }
    
    .intro h2 {
        margin: 20px 0 10px;
        padding: 0;
        font-weight: bold;
        -webkit-font-smoothing: antialiased;
        cursor: text;
        position: relative;
        line-height: 1.6;                
        font-size: 24px;
        border-bottom: 1px solid #cccccc;
        color: black;
    }
    
    .intro ul {
        margin-left:0px !important;
    }
    
    .intro ul li {
        font-family: Helvetica, arial, sans-serif;
        font-size: 14px;
        line-height: 1.6;
        margin-left:0px !important;
    }
    </style>

</head>
<body>
    
    <div class="intro">
        <h2>JUWAP Demo 1st Preview</h2>

        <ul>
        <li><a data-url="./home.html" href="#">首页</a></li>
        <li><a data-url="./common.html"  href="#">通用列表</a></li>
        <li><a data-url="./brand-thumb.html" href="#">品牌团-Thumb</a></li>
        <li><a data-url="./brand-list.html" href="#">品牌团-List</a></li>
        <li><a data-url="./jbp.html" href="#">聚宝盆</a></li>
        <li><a data-url="./city-switcher.html" href="#">城市选择</a></li>
        </ul>    
    </div>
    
    <script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function() {
        jQuery(".intro li a").click(function(e) {
            e.preventDefault();
            var uri = jQuery(this).attr('data-url');
            jQuery('iframe').attr('src', uri);
        })
    })
    </script>


        
    <section id='devices'>

                                    
    <div class='deviceWrap iphone-portrait'>
        <div class='device' style='width: 320px; height: 416px; padding-top: 20px;padding-bottom: 44px;'>

                            <div class='flashingTop' style='height: 20px; width: 320px'><span class='time'></span></div>
            
                            <div class='flashingBottom' style='height: 44px'></div>
            
            
            <iframe src='./home.html' id='iphone-portrait' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=iphone-portrait'><em>iPhone 3+4 portrait</em> 320 x 480</a></div>


                                                
    <div class='deviceWrap iphone-landscape'>
        <div class='device' style='width: 480px; height: 268px; padding-top: 20px;padding-bottom: 32px;'>

                            <div class='flashingTop' style='height: 20px; width: 480px'><span class='time'></span></div>
            
                            <div class='flashingBottom' style='height: 32px'></div>
            
            
            <iframe src='./home.html' id='iphone-landscape' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=iphone-landscape'><em>iPhone 3+4 landscape</em> 480 x 320</a></div>


                                                
    <div class='deviceWrap iphone-5-portrait'>
        <div class='device' style='width: 320px; height: 504px; padding-top: 20px;padding-bottom: 44px;'>

                            <div class='flashingTop' style='height: 20px; width: 320px'><span class='time'></span></div>
            
                            <div class='flashingBottom' style='height: 44px'></div>
            
            
            <iframe src='./home.html' id='iphone-5-portrait' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=iphone-5-portrait'><em>iPhone 5 portrait</em> 320 x 568</a></div>


                                                
    <div class='deviceWrap iphone-5-landscape'>
        <div class='device' style='width: 568px; height: 268px; padding-top: 20px;padding-bottom: 32px;'>

                            <div class='flashingTop' style='height: 20px; width: 568px'><span class='time'></span></div>
            
                            <div class='flashingBottom' style='height: 32px'></div>
            
            
            <iframe src='./home.html' id='iphone-5-landscape' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=iphone-5-landscape'><em>iPhone 5 landscape</em> 568 x 320</a></div>


                                                
    <div class='deviceWrap android-240x320-portrait'>
        <div class='device' style='width: 240px; height: 300px; padding-top: 20px;'>

                            <div class='flashingTop' style='height: 20px; width: 240px'><span class='time'></span></div>
            
            
            
            <iframe src='./home.html' id='android-240x320-portrait' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=android-240x320-portrait'><em>Crappy Android portrait</em> 240 x 320</a></div>


                                                
    <div class='deviceWrap android-240x320-landscape'>
        <div class='device' style='width: 320px; height: 220px; padding-top: 20px;'>

                            <div class='flashingTop' style='height: 20px; width: 320px'><span class='time'></span></div>
            
            
            
            <iframe src='./home.html' id='android-240x320-landscape' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=android-240x320-landscape'><em>Crappy Android landscape</em> 320 x 240</a></div>


                                                
    <div class='deviceWrap android-380x685-portrait'>
        <div class='device' style='width: 380px; height: 665px; padding-top: 20px;'>

                            <div class='flashingTop' style='height: 20px; width: 380px'><span class='time'></span></div>
            
            
            
            <iframe src='./home.html' id='android-380x685-portrait' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=android-380x685-portrait'><em>Android (Samsung Galaxy) portrait</em> 380 by 685 <em style='color: #aaa;'>(equivalent desktop resolution)</em></a></div>


                                                
    <div class='deviceWrap android-685x380-landscape'>
        <div class='device' style='width: 685px; height: 360px; padding-top: 20px;'>

                            <div class='flashingTop' style='height: 20px; width: 685px'><span class='time'></span></div>
            
            
            
            <iframe src='./home.html' id='android-685x380-landscape' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=android-685x380-landscape'><em>Android (Samsung Galaxy) landscape</em> 685 by 380 <em style='color: #aaa;'>(equivalent desktop resolution)</em></a></div>


                                                
    <div class='deviceWrap ipad-portrait'>
        <div class='device' style='width: 768px; height: 900px; padding-top: 124px;'>

                            <div class='flashingTop' style='height: 124px; width: 768px'><span class='time'></span></div>
            
            
            
            <iframe src='./home.html' id='ipad-portrait' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=ipad-portrait'><em>iPad portrait</em> 768 x 1024</a></div>


                                                
    <div class='deviceWrap ipad-landscape'>
        <div class='device' style='width: 1024px; height: 645px; padding-top: 123px;'>

                            <div class='flashingTop' style='height: 123px; width: 1024px'><span class='time'></span></div>
            
            
            
            <iframe src='./home.html' id='ipad-landscape' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=ipad-landscape'><em>iPad landscape</em> 1024 x 768</a></div>


                                                
    <div class='deviceWrap kindle-portrait'>
        <div class='device' style='width: 600px; height: 820px; padding-top: 144px;padding-bottom: 60px;'>

                            <div class='flashingTop' style='height: 144px; width: 600px'><span class='time'></span></div>
            
                            <div class='flashingBottom' style='height: 60px'></div>
            
            
            <iframe src='./home.html' id='kindle-portrait' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=kindle-portrait'><em>Kindle portrait</em> 600 x 1024</a></div>


                                                
    <div class='deviceWrap kindle-landscape'>
        <div class='device' style='width: 1024px; height: 396px; padding-top: 144px;padding-bottom: 60px;'>

                            <div class='flashingTop' style='height: 144px; width: 1024px'><span class='time'></span></div>
            
                            <div class='flashingBottom' style='height: 60px'></div>
            
            
            <iframe src='./home.html' id='kindle-landscape' style=''></iframe>

            
        </div><!-- /device -->
    </div><!-- /deviceWrap -->

    <div class='deviceTitle'><a href='/?url=about:blank&amp;device=kindle-landscape'><em>Kindle landscape</em> 1024 x 600</a></div>


                    
        
    </section>

    

   
    


</body>
</html>
