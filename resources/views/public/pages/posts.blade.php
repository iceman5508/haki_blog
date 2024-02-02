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

<!--Title-->
<div class="text-center pt-16 md:pt-32">
    <p class="text-sm md:text-base text-black font-bold">Created {{$post->created_at->diffForHumans() }} :   {{date('F jS, Y', strtotime($post->created_at)) }} <span class="text-gray-900">/</span> {{$post->category->name}}</p>
    <h1 class="font-bold break-normal text-3xl md:text-5xl">{{$post->title}}</h1>
</div>

<!--image-->
<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
     style="background-image:url('{{asset($post->featured_image->medium)}}'); height: 75vh;"></div>

<!--Container-->
<div class="container max-w-5xl mx-auto -mt-32">

    <div class="mx-0 sm:mx-6">

        <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal"
             style="font-family:Georgia,serif;">

            {!!$post->content!!}
        </div>

        <!--Author-->
{{--        <div class='text-center mt-20 mb-8 p-12 relative relative-lg bg-black'>--}}
{{--            <div class='absolute left-0 right-0 -top-14'>--}}


{{--                <img--}}

{{--                    alt='author'--}}

{{--                    height="100"--}}
{{--                    width="100"--}}
{{--                    class="align-middle rounded-full"--}}
{{--                    src='{{'http://i.pravatar.cc/300'}}'--}}


{{--                />--}}
{{--            </div>--}}

{{--            <h3 class='text-white my-4 text-xl font-bold'>{{$post->user->name}}</h3>--}}
{{--            <p class='text-white text-lg'>Author Bio</p>--}}

{{--        </div>--}}
        <!--/Author-->

        <!-- Comment form --->
        <div class='bg-white shadow-lg rounded-lg p-8 pb-12'>
            <h3 class='text-xl mb-8 font-semibold border-b pb-4'>Leave a Comment</h3>
            <form method="POST" action="{{ route('post.comment', ['post' => $post]) }}">
                @csrf
                <div class='grid grif-cols-1 gap-4 mb-4'>

            <textarea
                required
                class='p-4 outline-none w-full rounded-lg focus:ring-2 focus:ring-gray-200 bg-gray-100 text-gray-700'
                placeholder='Comment'
                name='content'></textarea>
                </div>
                <div class='grid grif-cols-1 gap-4 mb-4 lg:grid-cols-2'>
                    <input type='text'
                           class='py-2 px-4 outline-none w-full rounded-lg focus:ring-2 focus:ring-gray-200 bg-gray-100 text-gray-700'
                           placeholder='Name'
                           name='user_name'
                            required/>

                    <input type='text'
                           class='py-2 px-4 outline-none w-full rounded-lg focus:ring-2 focus:ring-gray-200 bg-gray-100 text-gray-700'
                           placeholder='Email'
                           name='user_email'
                            required/>
                </div>


                <div class='mt-8'>
                    <button type='submit'
                            class='transition duration-500 ease hover:bg-indigo-900 inline-block bg-pink-600 text-lg rounded-full text-white px-8 py-3 cursor-pointer'>
                        Post Comment
                    </button>


                </div>
            </form>

        </div>


        <!---/comment form -->


        <!--comments --->


        <div class="bg-white shadow-lg rounded-lg p-8 pb-12 mt-8">
            <h3 class="text-xl mb-8 font-semibold border-b pb-4">
                {{$comments->total()}} Comments
            </h3>
            @foreach($comments as $comment)
            <div class="border-b border-gray-100 mb-4 pb-4">
                <p class="mb-4">
                    <span class="font-semibold">{{$comment->user_name}}</span>
                    {{date('F jS, Y', strtotime($comment->created_at)) }}
                </p>
                <p class="whitespace-pre-line text-gray-600 w-full">{{$comment->content}}</p>
            </div>
            @endforeach

            <div class="w-4/5"  >
                @if($comments->lastPage()  > 1)
                    <div class='mt-8'>
                        <a href="{{route('comments', [$post])}}"
                                class='transition duration-500 ease hover:bg-blue-900 inline-block bg-blue-600 text-lg rounded-full text-white px-8 py-3 cursor-pointer'>
                            View All Comments
                        </a>
                    </div>
                    @endif
            </div>
        </div>

        <!--/comments--->

        <!--Subscribe-->
        @include('common.subscribe')
        <!-- /Subscribe-->


    </div>


</div>


<div class="brav_bg">

    <div class="container w-full max-w-6xl mx-auto px-2 py-8">
        <div class="flex flex-wrap -mx-2">
            @foreach($related_posts as $related => $rp)
                <div class="w-full md:w-1/3 px-2 pb-12">
                <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                    <a href="{{route('post', ['post' => $rp->slug])}}" class="no-underline hover:no-underline">
                        <img src="{{asset($rp->featured_image->medium)}}"
                             class="h-48 w-full rounded-t shadow-lg">
                        <div class="p-6 h-auto md:h-48">

                            <div class="font-bold text-xl text-gray-900 mt-2 mb-2">{{$rp->title}}</div>
                            <div class="text-gray-800 font-serif text-base mb-5">
                                {!!str_limit($rp->content,280)!!}
                            </div>
                        </div>
{{--                        <div class="flex items-center justify-between inset-x-0 bottom-0 p-6">--}}
{{--                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300"--}}
{{--                                 alt="Avatar of Author">--}}
{{--                            <p class="text-gray-600 text-xs md:text-sm">2 MIN READ</p>--}}
{{--                        </div>--}}
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>


</div>

@include('common.footer')


<script>
    /* Progress bar */
    //Source: https://alligator.io/js/progress-bar-javascript-css-variables/
    var h = document.documentElement,
        b = document.body,
        st = 'scrollTop',
        sh = 'scrollHeight',
        progress = document.querySelector('#progress'),
        scroll;
    var scrollpos = window.scrollY;
    var header = document.getElementById("header");

    document.addEventListener('scroll', function () {

        /*Refresh scroll % width*/
        scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
        progress.style.setProperty('--scroll', scroll + '%');

        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 100) {
            header.classList.remove("hidden");
            header.classList.remove("fadeOutUp");
            header.classList.add("slideInDown");
        } else {
            header.classList.remove("slideInDown");
            header.classList.add("fadeOutUp");
            header.classList.add("hidden");
        }

    });

</script>

</body>
</html>
