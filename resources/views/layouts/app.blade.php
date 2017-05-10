<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="jQuery, 練習, プログラミング, 言語, レッスン, lesson">
    <meta name="description" content="jQueryの練習のためのサイトです。">
    <meta name="author" content="Copyright@ jQuery.com All rights Reserved.">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>jQuery.com</title>
    <link rel="stylesheet" href="../css/main.css">
    <!-- slick-css -->
    <link rel="stylesheet" href="../css/slick-css/common-slick.css" type="text/css">
    <link rel="stylesheet" href="../css/slick-css/slick.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/slick-css/slick-theme.css" type="text/css" media="screen" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="../favicon/favicon.ico">
    <link rel="icon" type="image/vnd.microsoft.icon" href="../favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="48x48" href="../favicon/favicon-48x48.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-160x160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-196x196.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#2d88ef">
    <meta name="msapplication-TileImage" content="../favicon/mstile-144x144.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <!-- slick-js -->
    <script type="text/javascript" src="../js/slick-js/slick.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header id="header">
      @include('commons.navbar')
      @include('commons.slider')  
    </header><!-- /#header -->

      
    <div class="container">
      <div class="col-xs-12">
        <aside id="aside">@include('commons.aside')</aside><!--/#aside -->
      </div>
      <div class="col-xs-12">
        <main id="main">@yield('content')</main><!-- /#main -->
      </div>
    </div>

    <footer id="footer">@include('commons.footer')</footer><!-- /#footer -->
  </body>
</html>
