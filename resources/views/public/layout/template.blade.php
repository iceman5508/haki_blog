<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    @vite(['resources/css/tailwind.css', 'resources/css/animate.css'])
    <style>
        .smooth {
            transition: box-shadow 0.3s ease-in-out;
        }

        ::selection {
            background-color: aliceblue
        }
    </style>
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">

@include('common.top-nav')


<!--Container-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">
        <div class="w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
            <div class="flex flex-wrap justify-between pt-12 -mx-6 mt-20">


        @yield('content')


        <!--Subscribe-->
        <div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center">
            <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to Ghostwind CSS</h2>
            <h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Get the latest posts
                delivered right to your inbox</h3>
            <div class="w-full text-center pt-4">
                <form action="#">
                    <div class="max-w-sm mx-auto p-1 pr-0 flex flex-wrap items-center">
                        <input type="email" placeholder="youremail@example.com"
                               class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
                        <button type="submit"
                                class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Subscribe-->

        </div>
        </div>


    </div>


</div>


@include('common.footer')


</body>
</html>
