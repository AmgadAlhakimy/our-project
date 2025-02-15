<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/home/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/framework.css')}}" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{URL::asset('img/favicon.ico')}}" rel="icon">
    <!-- Google Web Fonts -->
    <link href="{{URL::asset('https://fonts.googleapis.com')}}" rel="preconnect">
    <link href="{{URL::asset('https://fonts.gstatic.com')}}" rel="preconnect" crossorigin>
    <link
        href="{{URL::asset('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap')}}"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}"
        rel="stylesheet">
    <link href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}"
        rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="{{URL::asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


</head>