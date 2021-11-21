<html>
<head>
    <link href="<?php echo asset('css/style.css')?>"  rel="stylesheet">
    <meta charset="utf-8" />
    <title>WEEB-SAMA</title>
</head>
<body >
    @include('layout.corps_du_site.header')
    <div class="page_connexion">
    @yield('content')
    </div>
    @include('layout.corps_du_site.footer')
</body> 
</html> 