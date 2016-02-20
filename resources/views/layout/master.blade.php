<html>
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
        <meta property="og:url" content="{{ url('/') }}" />
        <meta property="og:description" content="Corozal Classifieds - sign up for our weekly newsletter or join our Facebook group to receive most recently sell items in the country of Belize!" />

        <!-- for Twitter -->          
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Corozal Classifieds" />
        <meta name="twitter:description" content="Corozal Classifieds - sign up for our weekly newsletter or join our Facebook group to receive most recently sell items in the country of Belize!" />
        <meta name="twitter:image" content="{{ asset('/img/cc_logo_250x250.png') }}" />

        <link rel="icon" href="/img/favicon.ico">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link type="text/css" href="css/logo-nav.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700">

        @yield('styles')
    </head>
    <body>
         <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="/img/cc_logo_150.png" alt="Corozal Classifieds Logo">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/">About</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->


        </nav>

        @yield('content')
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/global.js"></script>

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