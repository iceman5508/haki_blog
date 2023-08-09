<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    @vite(['resources/css/tailwind.css', 'resources/css/animate.css'])


</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">


<!--Container-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">


        <div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
            @yield('content')
        </div>


    </div>


</div>


@include('common.footer')

@vite(['resources/js/popper.js'])

</body>
</html>
