<!DOCTYPE html>
<html lang="en">

<head>
        <title>@yield('title') - Corozal Classifieds</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- for Google -->
        <meta name="description" content="Corozal Classifieds - sign up for our weekly newsletter or join our Facebook group to receive most recently sell items in the country of Belize!" />
        <meta name="keywords" content="Corozal Classifieds, Corozal District, Belize, Corozal Town, Belize Buy and Sell, Belize Trade, Corozal Trade, Used item in Belize, Second Hand in Corozal, Second Hand in Belize, Used item in Corozal" />

        <meta name="author" content="Hsien Tsung Wu" />
        <meta name="copyright" content="" />
        <meta name="application-name" content="Corozal Classifieds" />

        <!-- for Facebook -->          
        <meta property="og:title" content="Corozal Classifieds" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="{{ asset('/img/cc_logo_250x250.png') }}" />
        <meta property="og:url" content="@yield('url')" />
        <meta property="og:description" content="Corozal Classifieds - sign up for our weekly newsletter or join our Facebook group to receive most recently sell items in the country of Belize!" />

        <!-- for Twitter -->          
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Corozal Classifieds" />
        <meta name="twitter:description" content="Corozal Classifieds - sign up for our weekly newsletter or join our Facebook group to receive most recently sell items in the country of Belize!" />
        <meta name="twitter:image" content="{{ asset('/img/cc_logo_250x250.png') }}" />

        <link rel="icon" href="/img/favicon.ico">

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.min.css" type="text/css">

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="/css/animate.min.css" type="text/css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="/css/creative.css" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('styles')
</head>

<body id="page-top">
      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/">Corozal Classifieds</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="/">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/request">Join</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/subscribe">Subscribe</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://www.facebook.com/CorozalClassifieds/">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

        @yield('content')
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/global.js"></script>


        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/wow.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/creative.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-74033279-1', 'auto');
          ga('send', 'pageview');

        </script>

        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '111031405954220',
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

        @yield('scripts')
    </body>
</html>