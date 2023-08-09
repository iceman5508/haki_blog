@extends('public.layout.template')

@section('title', 'Posts')

@section('content')

    <div class="w-full flex flex-col mt-8">

        <form method="GET" action="{{ route('post.search') }}">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input name="search_str" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Post..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>

    </div>

    <div class="w-full flex flex-col">
        <h5 class="ml-6 mt-4 text-lg"> Currently Viewing: @if(!isset($search_str))  All Posts @else {{$search_str}} @endif</h5>
    </div>



    @foreach($posts as $small_cards => $post)
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                <a href="{{route('post', ['post' => $post->slug])}}" class="flex flex-wrap no-underline hover:no-underline">
                    <img src="{{asset($post->featured_image->medium)}}" class="h-64 w-full rounded-t pb-6">
                    <div class="w-full font-bold text-xl text-gray-900 px-6 mt-2 mb-2">{{$post->title}}</div>
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

    <div class="mx-auto pb-10 w-4/5">
        {{$posts->links()}}
    </div>

@endsection
