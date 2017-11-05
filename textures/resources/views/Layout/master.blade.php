<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">

    <script src="js/ifhjYdVTo1ah9vku6SFr83JvZcA.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/styles.css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/js/jquery.form.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>App name - @yield('title') </title>
    <link rel="icon" href="images/favicon-16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="images/favicon-32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="images/favicon-64.png" sizes="64x64" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <style></style>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
    <meta name="description" content="Textures.com is a website that offers digital pictures of all sorts of materials. Sign up for free and download 15 free images every day!" />
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=yes" />
    <meta property="og:site_name" content="Textures.com" />
    <meta property="og:title" content="Textures.com" />
    <meta property="og:image" content="http://www.textures.com/images/facebook_generic_share.jpg?v=4" />
    <meta property="og:image:secure_url" content="https://www.textures.com/images/facebook_generic_share.jpg?v=4" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="600" />
    <meta property="og:description" content="Textures for 3D, Graphic Design and Photoshop 15 Free downloads every day!" />
    <meta property="og:type" content="product" />

    <script type="text/javascript">
        window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":"http://www.textures.com/privacy.html","theme":"/themes/textures/css/cookieconsent.css"};
    </script>
    <script type="text/javascript" src="js/cookieconsent.min.js"></script>





</head>
<body>
<!--[if lte IE 8]>
<style>#search{line-height:35px;}
.n1,.n2,.n3,.n4{margin-left:-1px !important}
.d_quota{margin-top: -40px !important}
</style>
<![endif]-->
<div id="main-wrapper">
    <div id="header" col-md-12 >
        <div class="logo" col-md-4>
            <a href="http://www.textures.com">
                    <img src="{{    URL::to('/Images/textureslogo.png')}}" alt="profile Pic" width="234" height="60" class="img-responsive">
            </a>
        </div>
        <div class="navigation" col-md-8>
            <ul>
                <li class="active">
                    <a href="{{"/"}}">
                        Home
                    </a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="{{"/Home/About"}}">
                        About
                    </a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="{{"/Home/HowItWorks"}}">
                        How It works
                    </a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="{{"/Home/Resources"}}">
                        Resources
                    </a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="{{"/Home/Contact"}}">
                        Contact
                    </a>
                </li>
                <li class="divider">
                </li>
                <li>
                    <a href="http://www.textures.com/premiumaccess" id="membership">
                        <b>
                            Premium Access
                        </b>
                    </a>
                </li>
                <li class="divider">
                </li>
                <li class="header-fb-share-li">
                    <div class="header-fb-share">
                        <div class="fb-like" data-action="like" data-href="http://www.facebook.com/texturescom" data-layout="button_count" data-show-faces="false" data-width="180">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <script>
            var userAccountType = '';
            var enableRedownloadForPremiumPhotos = false;
            var globalDownloadAgainText = 'Purchased - 0 Credits';
        </script>
        <script>
        </script>
        <div class="login">
            <div id="login-header-container">
                <a class="join login-header-button" href="javascript:;" id="login-link-button" onclick="secure_login();">
                    Log In
                </a>
                <div class="login-header-small-text">
                    No Account?
                    <a class="register-link" href="javascript:;" id="join-link-button" onclick="secure_join()">
                        Register Here
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var loginErrorCount =0;
    </script>
    <div class="overlay_darkbg_container login_overlay">
        <div class="overlay_darkbg">
        </div>
        <div class="overlay2" style="display: block;">
            <div class="overlay_panel">
                <div class="login_overlay_message">
       <span class="overlay_text overlay_text_register">
        Have an account?
        <span class="dark-gray">
        <a href="{{"/Home/Login/"}}">Log In</a>
        </span>
       </span>
                </div>
                <div class="overlay_panel_body">
                    <form action="/user/login" id="loginAjaxForm" method="POST">
                        <input name="YII_CSRF_TOKEN" type="hidden" value="937f7d212b37a7e16af974e5b6f1aa6dc9a11bcb"/>
                        <input name="ajax" type="hidden" value="login-form">
                        <div class="login_overlay_error">
                        </div>
                        <input id="937f7d212b37a7e16af974e5b6f1aa6dc9a11bcb" name="937f7d212b37a7e16af974e5b6f1aa6dc9a11bcb" type="hidden" value="ff41a99c250047aa2d3bceda7da7d737"/>
                        <input class="overlay_input" name="LoginForm[email]" placeholder="Email Address (or username)" type="text"/>
                        <div class="overlay_password_container">
                            <input class="overlay_input overlay_input_password" name="LoginForm[password]" placeholder="Password" type="password"/>
                            <a id="login-button-loader" style="display:none;">
                                <img height="16" src="/images/ajax-loader-login-button.gif" width="16"/>
                            </a>
                            <input class="overlay_button blue_button" id="login-button" style="margin-top:0" type="submit" value="Login"/>
                        </div>
                        <div class="grecaptcha-container " id="login-recaptcha-container" style="display:none;">
                            <div id="grecaptcha-login">
                            </div>
                            <div class="grecaptcha-disabled-message">
                                Captcha will load here
                                <br>
                                (please disable Ad Blocker)
                                </br>
                            </div>
                        </div>
                        <div style="margin-top: 10px; display:block;">
                            <input checked="checked" id="remember_me" name="LoginForm[rememberMe]" type="checkbox" value="1"/>
                            <label for="remember_me" style="padding-left:20px">
                                Remember Me
                            </label>
                            <span style="margin-left: 5px; margin-right: 5px;">
           •
          </span>
                            <a class="forgot_password" href="http://www.textures.com/forgotPassword">
                                Forgot your password?
                            </a>
                        </div>
                        </input>
                    </form>
                </div>
            </div>
            <div class="overlay_panel overlay_second_panel">
                <div class="overlay_second_panel_bg">
                    <div class="login_overlay_message">
        <span class="overlay_text overlay_text_register">
         New to Textures.com?
         <span class="dark-gray">
          Register
         </span>
        </span>
                    </div>
                    <div class="overlay_panel_body align-center">
                        <button class="yellow_button yellow_button_lg" onclick="secure_join();">
                            Create New Account
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay_darkbg_container join_overlay">
        <div class="overlay_darkbg">
        </div>
        <div class="overlay2" style="display: block;">
            <div class="overlay_panel">
                <div class="login_overlay_message">
       <span class="overlay_text overlay_text_register">
        New to Textures.com?
        <span class="dark-gray">
         Register
        </span>
       </span>
                </div>
                <div class="overlay_panel_body">
                    <form action="/register/submitForm" id="registerAjaxForm" method="POST">
                        <input id="YII_CSRF_TOKEN" name="YII_CSRF_TOKEN" type="hidden" value="937f7d212b37a7e16af974e5b6f1aa6dc9a11bcb"/>
                        <input name="ajax" type="hidden" value="register-form">
                        <div class="join_overlay_error" style="display:none;">
                        </div>
                        <input class="overlay_input" id="joinEmail" name="RegisterForm[email]" placeholder="Email Address" type="text"/>
                        <input class="overlay_input overlay_input_password" id="joinPassword" name="RegisterForm[password]" placeholder="Password" type="password"/>
                        <div class="grecaptcha-container ">
                            <div id="grecaptcha-register">
                            </div>
                            <div class="grecaptcha-disabled-message">
                                Captcha will load here
                                <br>
                                (please disable Ad Blocker)
                                </br>
                            </div>
                        </div>
                        <div class="align-center">
                            <a class="yellow_button yellow_button_lg" id="join-button-loader" style="display:none;">
                                <div style="height: 10px;">
                                </div>
                                <img height="16" src="/images/ajax-loader-yellow2.gif" width="16"/>
                            </a>
                            <input class="yellow_button yellow_button_lg" id="join-button" type="submit" value="Create New Account"/>
                        </div>
                        <p class="terms_agree align-center">
                            By clicking 'Create New Account' you agree to Textures.com
                            <a class="blue_color" href="http://www.textures.com/terms-of-use.html">
                                Terms of Use
                            </a>
                            and
                            <a class="blue_color" href="http://www.textures.com/privacy.html">
                                Privacy Policy
                            </a>
                        </p>
                        <p>
                        </p>
                        <p class="align-center">
                            <a class="blue_color" href="/register/resend">
                                Did not receive the activation email?
                            </a>
                        </p>
                        </input>
                    </form>
                </div>
            </div>
            <div class="overlay_panel overlay_second_panel">
                <div class="overlay_second_panel_bg">
                    <div class="login_overlay_message">
        <span class="overlay_text overlay_text_register">
         Have an account?
         <span class="dark-gray">
          Log In
         </span>
        </span>
                    </div>
                    <div class="overlay_panel_body align-center">
                        <button class="overlay_button blue_button" onclick="secure_login();" style="margin-top: 0px; width:75%">
                            Login
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="nav">
        <div class="cetegories" id="categories_text">
            <div style="float:left">
                <a href="http://www.textures.com">
                    Categories
                </a>
            </div>
            <div class="hide" id="hide">
            </div>
        </div>
        <div class="search_box">
            <table style="width:100%;height:100%;border-spacing:0;border-collapse:collapse;">
                <tr>
                    <td>
                        <form action="/search" id="form1" method="GET" name="form1">
                            <div style="width:60%;">
                                <input autocomplete="off" class="search" id="search" name="q" placeholder="Enter Keywords..." type="text" value=""/>
                                <div id="suggest_filter" style="width:100%">
                                    <div class="dropdown_suggest" id="dropdown_suggest">
                                    </div>
                                </div>
                            </div>
                            <div class="search" id="filter">
                                <a class="current_filter">
                                    All
                                </a>
                                <div class="dropdown_filter">
                                    <p>
                                        All
                                    </p>
                                    <p>
                                        Seamless
                                    </p>
                                    <p>
                                        Masked
                                    </p>
                                    <p>
                                        Photo Textures
                                    </p>
                                    <p>
                                        3D Objects
                                    </p>
                                    <p>
                                        3D Materials
                                    </p>
                                </div>
                                <input checked="" name="filter" type="radio" value="all">
                                <input name="filter" type="radio" value="seamless"/>
                                <input name="filter" type="radio" value="masked"/>
                                <input name="filter" type="radio" value="photo_textures"/>
                                <input name="filter" type="radio" value="3d_objects"/>
                                <input name="filter" type="radio" value="3d_materials"/>
                                </input>
                            </div>
                            <span class="button">
          <input id="go" type="button" value=" "/>
         </span>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <div class="details">
            <ul>
                <li class="divider">
                </li>
                <li id="download-quota-li" style="cursor:pointer;">
                </li>
            </ul>
        </div>
    </div>  <!-- That is where nav ends -->
    <a class="backtotop" title="Back To Top">
    </a>
    <div class="content">



        <div class="categories_bg" id="categories_bg">
        </div>
        <div class="categories" id="categories" style="float:left">
            <div class="categories_paddings">
                <div class="category">
                    <div class="icn_rplc">
                    </div>
                    <a href="http://www.textures.com/homeNews">
                        Latest Textures
                    </a>
                </div>
                <div class="category">
                    <a href="javascript:;" onclick="secure_login();">
                        <img class="plus" src="favorites-category-tree.png">
                        Favourites
                        </img>
                    </a>
                </div>
                <div class="category">
                    <ul class="categorylist">
                        @foreach($category as $cat)
                            <li style="list-style-type: none;"><a href="{{"/category/".$cat->name}}" class="text-white">{{ $cat->name}}</a>
                            </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>


        <div id="pagecontent">
            @yield('body')
        </div>

        <script>
            function resizeToFit(containerWidth, containerHeight, inputWidth, inputHeight) {
                var reductionPercentage = 0;

                var ratio = 0;
                var reducedWidth = inputWidth;
                var reducedHeight = inputHeight;

                var ratio = Math.min(containerWidth / inputWidth, containerHeight / inputHeight);

                var reducedWidth = inputWidth * ratio;
                var reducedHeight = inputHeight * ratio;
                var top = Math.abs(containerHeight - reducedHeight) / 2;

                var out = {
                    reductionPercentage: ratio,
                    reducedWidth: reducedWidth,
                    reducedHeight: reducedHeight,
                    top: top
                };

                return out;
            };

            function smllscr() {
                if($(window).width() <= 1300){
                    $(".n4").hide();
                    $(".n1, .n2, .n3").width("33.33%");
                    $(".navigation ul li a").attr("style", "padding: 0 14px;");
                    $(".news").height(185)
                }
                else {
                    $(".n4").show();
                    $(".n1, .n2, .n3").width("25%");
                    $(".navigation ul li a").attr("style", "padding: 0 18px;");
                }

//		if($(window).width()<=1600){
                $(".small_text").attr("style", "font-size: 13px");
                $(".big_text").attr("style", "font-size: 23px");
//		} else {
//			$(".small_text").attr("style", "font-size: 13px");
//			$(".big_text").attr("style", "font-size: 23px");
//			$(".news_text").css("top", "-45px");
//			$(".news").css("margin-top", "50px");
//		}

                // if display is 4k, limit home page content to 1400
//		if($(window).width() > 2048) {
//			$('.textures_ovr').css('max-width', 1400);
//			$(".news").height(window.innerWidth/18);
//		}
//		else if($(window).width() > 1920) {
//			$('.textures_ovr').css('max-width', 1400);
//			$(".news").height(window.innerWidth/10);
//		}
//		else if($(window).width() > 1600) {
//			$(".news").height(window.innerWidth/9);
//		}
//		else {
//			$(".news").height(window.innerWidth/7);
//
//		}

                var widthToWorkWith = $(window).innerWidth();
                var originalScreenWidth = widthToWorkWith;

                var heightToWorkWith = $(window).innerHeight();
                var originalScreenHeight = heightToWorkWith;

                console.log("widthToWorkWith = " + widthToWorkWith + ", heightToWorkWith = " + heightToWorkWith);

                if(widthToWorkWith > 1900) {
                    if(widthToWorkWith >= 1920) {
                        // resize the height to work with so it's in proportoin
                        var resizedData = resizeToFit(1900, 1900, widthToWorkWith, heightToWorkWith);

                        widthToWorkWith = 1900;
                        heightToWorkWith = resizedData['reducedHeight'];
                    }

                    $('.textures_ovr').css('max-width', widthToWorkWith);

                    /*
                    var aspectRatio = (widthToWorkWith / heightToWorkWith);
                    //console.log("aspectRatio = " + aspectRatio);

                    var multiplier = 12;
                    var addedMultiplier = (parseInt(heightToWorkWith / 1000));
                    multiplier += addedMultiplier;

                    var newHeight = ((heightToWorkWith / 100) * aspectRatio) * multiplier;
                    //console.log("newHeight = " + newHeight);

                    $(".news").height(newHeight);
                    */
                    $(".news").height(212);

                }
                else {
                    $(".news").height(window.innerWidth/7);
                }
            }

            window.onresize = smllscr;


            $(document).ready(function() {

                smllscr();


                $('#freebieOfTheDayTexture').mouseenter(function() {
                    $('#freebieDownloadButton').show();

                    $('#freebieOfTheDayTexture').unbind('click').click(function() {
                        window.location = '/freebieTodayDownload'
                    });

                }).mouseleave(function() {
                    $('#freebieDownloadButton').hide();

                    $('#freebieOfTheDayTexture').unbind('click');
                });

            });
        </script>
        <div class="clear">
        </div>
        <div class="footer_big">
            <div class="footer_big_paddings">
                <div class="footer_big_column">
                    <p class="footer_big_title">
                        ABOUT US
                    </p>
                    <a class="footer_big_text" href="http://www.textures.com/about">
                        About
                    </a>
                    <a class="footer_big_text" href="http://www.textures.com/people">
                        Photographers
                    </a>
                    <a class="footer_big_text" href="http://www.textures.com/privacy.html">
                        Privacy Policy
                    </a>
                </div>
                <div class="footer_big_column">
                    <p class="footer_big_title">
                        CONTENTS
                    </p>
                    <a class="footer_big_text" href="http://www.textures.com">
                        Textures
                    </a>
                    <a class="footer_big_text" href="http://www.textures.com/homeNews">
                        Latest Textures
                    </a>
                    <a class="footer_big_text" href="http://www.textures.com/resources.html">
                        Resources
                    </a>
                    <a class="footer_big_text" href="http://www.textures.com/panoramaCorrector">
                        Panorama Corrector Plugin
                    </a>
                    <a class="footer_big_text" href="http://www.textures.com/pixelPeeper">
                        Free Utility: Pixel Peeper
                    </a>
                </div>
                <div class="footer_big_column">
                    <p class="footer_big_title">
                        HOW IT WORKS
                    </p>
                    <a class="footer_big_text" href="http://www.textures.com/howItWorks">
                        How it works
                    </a>
                    <a class="footer_big_text" href="http://www.textures.com/faq.html">
                        FAQ
                    </a>
                    <a class="footer_big_text" href="http://www.textures.com/terms-of-use.html">
                        Terms of Use
                    </a>
                </div>
                <div class="footer_big_column">
                    <p class="footer_big_title">
                        PREMIUM ACCESS
                    </p>
                    <a class="footer_big_text" href="http://www.textures.com/premiumaccess">
                        See Plans and Pricing
                    </a>

                    <br/>
                </div>
                <div class="footer_big_column">
                    <p class="footer_big_title">
                        CONTACT
                    </p>
                    <div style="background-position: 0 -48px; margin-left: 2px;">
                    </div>
                    <a class="footer_big_text" href="http://www.textures.com/contact">
                        Contact
                    </a>
                    <div>
                    </div>
                    <a class="footer_big_text" href="mailto:support@textures.com" style="color:#61a3e4 !important; width:150px">
                        support@textures.com
                    </a>
                    <div style="background-position: 0 -16px">
                    </div>
                    <a class="footer_big_text" href="http://www.facebook.com/texturescom" target="_blank">
                        Facebook
                    </a>
                </div>
            </div>
            <p class="copyright_big">
                Copyright © 2005 - 2017, Textures.com
            </p>
        </div>
    </div>
</div>
<script src="/javascripts/jquery.form.min.js" type="text/javascript">
</script>
<script src="/javascripts/common.js?v=2017092716" type="text/javascript">
</script>
<script>
    function secure_login() {
        if (window.location.protocol != 'https:') {
            var url = window.location.href;
            var url = url.replace('http://', 'https://');

            if(url.indexOf('?') === -1) {
                url += '?';
            }

            var url = url.replace('&secure=login', '');
            var url = url.replace('&secure=', '');

            window.location.href = url + '&secure=login';
        } else {
            reset_login_form();
            open_overlay('.login_overlay');
        }
    }

    function secure_join() {
        if (window.location.protocol != 'https:') {
            var url = window.location.href;
            var url = url.replace('http://', 'https://');

            if(url.indexOf('?') === -1) {
                url += '?';
            }

            var url = url.replace('&secure=join', '');
            var url = url.replace('&secure=', '');

            window.location.href = url + '&secure=join';

        } else {
            // change captcha before opening
            reset_join_form();

            open_overlay('.join_overlay');
        }
    }
</script>
<script>
</script>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1072733659453872',
            xfbml      : true,
            version    : 'v2.5'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script async="" defer="" src="//assets.pinterest.com/js/pinit.js" type="text/javascript">
</script>
<script type="application/ld+json">
   {
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "https://www.textures.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.textures.com/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
  </script>
<script type="application/ld+json">
   {
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "legalName" : "Textures.com",
    "foundingDate" : "2005-01-01",
    "url" : "http://www.textures.com/",
    "contactPoint" : [{
        "@type" : "ContactPoint",
        "email" : "support@textures.com",
        "contactType" : "customer service",
        "url" : "http://www.textures.com/contact"
    }],
    "logo" : "http://www.textures.com/images/logoicon.png",
    "sameAs" : [
    	"http://www.facebook.com/texturescom",
    	"https://plus.google.com/100968035160561103304/videos",
    	"https://www.youtube.com/channel/UCjT4kEPRJvt8AnxtC8ejfCg"
    ]
}
  </script>
<script>
    $(document).ready(function() {
        //Back To Top Browse Page
        $(window).scroll(function () {
            if ($(this).scrollTop() > 1000) {
                $('.backtotop').fadeIn("slow");
            } else {
                $('.backtotop').fadeOut("slow");
            }
        });

        $('a.backtotop').click(function(){
            $('html, body').animate({scrollTop:0}, 'slow');
            return false;
        });

    });
</script>

</body>
</html>
