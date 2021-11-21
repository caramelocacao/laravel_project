<!doctype html> 
<html> 
    <head>
        <link href="<?php echo asset('css/style.css')?>" rel="stylesheet">
        <meta charset="utf-8" />
        <title>WEEB-SAMA</title> 
    </head>

    <body>
        @include('layout.corps_du_site.header')
        <div class="page_catalogue">
            @yield('content2')
        </div> 
        @include('layout.corps_du_site.footer')        
    </body> 
<html> 