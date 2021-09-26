<!DOCTYPE html>
<html lang="en">
<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>গ্রন্থ ঘর</title>

    <!-- FAVICON -->
    <link href="img/favicon.png" rel="shortcut icon">

    @include('partials.styles')
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>


</head>

<body class="body-wrapper">

    @include('layouts.menu')
    @yield('content')
    @include('layouts.footer')

@include('partials.scripts')

</body>

</html>



