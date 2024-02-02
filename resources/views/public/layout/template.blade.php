<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{\Request::segment(1)}}</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    @vite(['resources/css/tailwind.css', 'resources/css/animate.css', 'resources/css/app.css'])
    <style>
        .smooth {
            transition: box-shadow 0.3s ease-in-out;
        }

        ::selection {
            background-color: aliceblue
        }
    </style>
</head>
<body class="brav_bg font-sans leading-normal tracking-normal">

@include('common.top-nav')
@include('common.flash')

<!--Container-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">
        <div class="w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
            <div class="flex flex-wrap justify-between pt-12 -mx-6 mt-20">


        @yield('content')


        <!--Subscribe-->
        @include('common.subscribe')
        <!-- /Subscribe-->

        </div>
        </div>


    </div>


</div>


@include('common.footer')


</body>
</html>
