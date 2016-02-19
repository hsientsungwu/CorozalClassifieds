<html>
    <head>
        <title>@yield('title') - Corozal Classifieds</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700">

        <style>
        	body {
        		height: 100%;
			    max-height: 100%;
			    font-family: 'Open Sans',sans-serif;
			    font-size: 1.7em;
			    line-height: 1.6em;
			    color: #3A4145;
        	}
        </style>
        @yield('styles')
    </head>
    <body>
        @yield('content')
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        @yield('scripts')
    </body>
</html>