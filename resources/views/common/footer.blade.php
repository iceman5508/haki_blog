<footer class="bg-gray-900">
    <div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

        <div class="w-full mx-auto flex flex-wrap items-center">
            <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
                <a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="{{route('home')}}">
                     <span class="text-base text-gray-200"> {{config('site.Name')}} </span>
                </a>
            </div>
            <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                <ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
                    <li>
                        <a class="inline-block py-2 px-3 text-white no-underline" href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a class="inline-block text-white no-underline hover:text-gray-200 hover:underline py-2 px-3" href="{{route('posts')}}">Posts</a>
                    </li>
                    <li>
                        <a class="inline-block text-white no-underline hover:text-gray-200 hover:underline py-2 px-3" href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li>
                        <a class="inline-block text-white no-underline hover:text-gray-200 hover:underline py-2 px-3" href="{{route('about')}}">About Us</a>
                    </li>
                    <li>
                        <a class="inline-block text-white no-underline hover:text-gray-200 hover:underline py-2 px-3" href="{{route('gallery')}}">Gallery</a>
                    </li>
                    <li>
                        <a class="inline-block text-white no-underline hover:text-gray-200 hover:underline py-2 px-3" href="{{route('login.form')}}">Admin</a>
                    </li>
                </ul>
            </div>
        </div>



    </div>
</footer>
