<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    @vite(['resources/css/tailwind.css', 'resources/css/animate.css', 'resources/css/app.css'])
    <style type="text/css">
        @font-face {
            font-family: 'blacksword';
            src: url("{{asset('fonts/Blacksword.otf')}}");
        }
        @font-face {
            font-family: 'infinite';
            src: url("{{asset('fonts/Infinite_Stroke.otf')}}");
        }
        @font-face {
            font-family: 'scriptin';
            src: url("{{asset('fonts/SCRIPTIN.ttf')}}");
        }


        .blacksword {
            font-family: blacksword;
        }

        .infinite {
            font-family: infinite;
        }

        .scriptin {
            font-family: scriptin;
        }
    </style>


</head>
@include('common.flash')
<body class="brav_bg font-sans leading-normal tracking-normal">

<!--Header-->
<div class="w-full m-0 p-0 bg-cover bg-bottom"
     style="background-image:url('{{asset('images/cover1.jpg')}}'); height: 60vh; max-height:460px; ">
    <div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
        <!--Title-->
        <p class="text-white font-extrabold text-3xl md:text-5xl infinite">
            {{config('site.Name')}}
        </p>
        <p class="text-xl md:text-2xl text-white">{{config('site.Slogan')}}</p>
    </div>
</div>

<!--Container-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">

        <!--Nav-->
        <nav class="mt-0 w-full">
            <div class="container mx-auto flex items-center">

                <div class="flex w-1/2 pl-4 text-sm">
                    <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                        <li class="mr-2">
                            <a class="inline-block py-2 px-2 selected_color no-underline hover:underline" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="mr-2">
                            <a class="inline-block link_color no-underline hover:text-gray-200 hover:underline py-2 px-2"
                               href="{{'about'}}">About Us</a>
                        </li>
                        <li class="mr-2">
                            <a class="inline-block link_color no-underline hover:text-gray-200 hover:underline py-2 px-2"
                               href="{{'why'}}">"My Why" Story</a>
                        </li>
                        <li class="mr-2">
                            <a class="inline-block link_color no-underline hover:text-gray-200 hover:underline py-2 px-2"
                               href="{{'posts'}}">Posts</a>
                        </li>
                        <li class="mr-2">
                            <a class="inline-block link_color no-underline hover:text-gray-200 hover:underline py-2 px-2"
                               href="{{'gallery'}}">Gallery</a>
                        </li>
                        <li class="mr-2">
                            <a class="inline-block link_color no-underline hover:text-gray-200 hover:underline py-2 px-2"
                               href="{{'contact'}}">Contact Us</a>
                        </li>
                        <li class="mr-2">
                            <a class="inline-block link_color no-underline hover:text-gray-200 hover:underline py-2 px-2"
                               href="{{route('login.form')}}">Admin</a>
                        </li>
                    </ul>
                </div>


                <div class="flex w-1/2 justify-end content-center">
                    <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar"
                       data-tippy-content="@twitter_handle" href="https://twitter.com/intent/tweet?url=#">
                        <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path
                                d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path>
                        </svg>
                    </a>
                    <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar"
                       data-tippy-content="#facebook_id" href="https://www.facebook.com/sharer/sharer.php?u=#">
                        <svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path
                                d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path>
                        </svg>
                    </a>
                </div>

            </div>
        </nav>

        <div class="brav_bg w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">

            <!--Lead Card-->
            @if(isset($data['featured']->slug))
                <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
                    <a href="{{route('post', ['post' => $data['featured']->slug])}}"
                       class="flex flex-wrap no-underline hover:no-underline">
                        <div class="w-full md:w-2/3 rounded-t">
                            <img src="{{asset($data['featured']->featured_image->medium)}}"
                                 class="h-full w-full shadow" id="featured_blog_img">
                        </div>

                        <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                                <div
                                    class="w-full font-bold text-xl mb-2 mt-2 text-gray-900 px-6">{{$data['featured']->title}}</div>
                                <div class="text-gray-800 font-serif text-base  px-6 mb-5">
                                    {!!str_limit($data['featured']->content,280)!!}
                                </div>
                            </div>

                            {{--                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">--}}
                            {{--                            <div class="flex items-center justify-between">--}}
                            {{--                                <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">--}}
                            {{--                                <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </div>

                    </a>
                </div>
            @endif
            <!--/Lead Card-->


            <!--Posts Container-->
            <div class="flex flex-wrap justify-between pt-12 -mx-6">

                <!--1/3 col -->
                @foreach($data['small_cards'] as $small_cards => $post)
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="{{route('post', ['post' => $post->slug])}}"
                               class="flex flex-wrap no-underline hover:no-underline">
                                <img src="{{asset($post->featured_image->medium)}}" class="h-64 w-full rounded-t pb-6">
                                <div
                                    class="w-full font-bold text-xl text-gray-900 px-6 mt-2 mb-2">{{$post->title}}</div>
                                <div class="text-gray-800 font-serif text-base px-6 mb-5">
                                    {!!str_limit($post->content,280)!!}
                                </div>
                            </a>
                        </div>
                        {{--                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">--}}
                        {{--                        <div class="flex items-center justify-between">--}}
                        {{--                            <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">--}}
                        {{--                            <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                @endforeach





                <!--1/2 col -->
                @foreach($data['mid_cards'] as $mid_cards => $post)
                    <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="{{route('post', ['post' => $post->slug])}}"
                               class="flex flex-wrap no-underline hover:no-underline">
                                <img src="{{asset($post->featured_image->medium)}}" class="h-100 w-full rounded-t pb-6">
                                <div
                                    class="w-full font-bold text-xl text-gray-900 px-6 mt-2 mb-2">{{$post->title}}</div>
                                <div class="text-gray-800 font-serif text-base px-6 mb-5">
                                    {!!str_limit($post->content,280)!!}
                                </div>
                            </a>
                        </div>
                        {{--                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">--}}
                        {{--                        <div class="flex items-center justify-between">--}}
                        {{--                            <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">--}}
                        {{--                            <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                @endforeach





                <!--2/3 col -->
                @if(isset($data['end_cards'][5]))
                    <div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="{{route('post', ['post' => $data['end_cards'][5]->slug])}}"
                               class="flex flex-wrap no-underline hover:no-underline">
                                <img src="{{asset($data['end_cards'][5]->featured_image->medium)}}"
                                     class="h-full w-full rounded-t pb-6">
                                <div
                                    class="w-full font-bold text-xl text-gray-900 px-6 mt-2 mb-2">{{$data['end_cards'][5]->title}}</div>
                                <div class="text-gray-800 font-serif text-base px-6 mb-5">
                                    {!!str_limit($data['end_cards'][5]->content,280)!!}
                                </div>
                            </a>
                        </div>
                        {{--                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">--}}
                        {{--                        <div class="flex items-center justify-between">--}}
                        {{--                            <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">--}}
                        {{--                            <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                @endif

                <!--1/3 col -->
                @if(isset($data['end_cards'][6]))
                    <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <a href="{{route('post', ['post' => $data['end_cards'][6]->slug])}}"
                               class="flex flex-wrap no-underline hover:no-underline">
                                <img src="{{asset($data['end_cards'][6]->featured_image->medium)}}"
                                     class="h-full w-full rounded-t pb-6">
                                <div
                                    class="w-full font-bold text-xl text-gray-900 px-6 mt-2 mb-2">{{$data['end_cards'][6]->title}}</div>
                                <div class="text-gray-800 font-serif text-base px-6 mb-5">
                                    {!!str_limit($data['end_cards'][6]->content,280)!!}
                                </div>
                            </a>
                        </div>
                        {{--                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">--}}
                        {{--                        <div class="flex items-center justify-between">--}}
                        {{--                            <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">--}}
                        {{--                            <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                @endif

            </div>
            <!--/ Post Content-->

        </div>


        <!--Subscribe-->
        @include('common.subscribe')
        <!-- /Subscribe-->


    </div>


</div>


@include('common.footer')

@vite(['resources/js/popper.js'])

</body>
</html>
