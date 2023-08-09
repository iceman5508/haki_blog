@extends('public.layout.template')

@section('title', 'Comments')

@section('content')

    <div class="w-full flex flex-col mt-2">
        <h3 class="ml-6 mt-4 text-lg"> Currently Viewing Comments For: {{$post->title}}</h3>
    </div>
    <div class="w-4/5"  >
        @if($comments->total()  > 1)
            <div class='mt-8'>
                <a href="{{route('post', [$post->slug])}}"
                   class='transition duration-500 ease hover:bg-blue-900 inline-block bg-blue-600 text-lg rounded-full text-white px-8 py-3 cursor-pointer'>
                    Return To Post
                </a>
            </div>
        @endif
    </div>




    <div class="bg-white shadow-lg rounded-lg p-8 pb-12 mt-8 w-full">
        <h3 class="text-xl mb-8 font-semibold border-b pb-4 text-center">
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

    </div>

    <div class="mx-auto pb-10 w-4/5 mt-4">
        {{$comments->links()}}
    </div>

@endsection
