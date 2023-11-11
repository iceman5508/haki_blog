@extends('public.layout.template')

@section('title', 'About Us')

@section('content')

    <div class="bg-white w-full">
        <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
            <div class="flex flex-col lg:flex-row justify-between gap-8">
                <div class="w-full lg:w-5/12 flex flex-col justify-center">
                    <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">About Us</h1>
                    <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">
                        If you feel totally broken or have reached a major roadblock in your life but
                        struggling to make the best decision on what direction to now take, 414 Life
                        Coaching is here for you! We meet you where you are, come alongside you, and
                        guide you through the process of making the personal growth and healing life
                        changes you desire.
                        We do this by:
                        <br /><br/>&bull; Engaging you to share your story, confront, and dismantle the lies within it
                        that have presented themselves as your false truths.<br/>
                        <br />&bull; Encouraging you to rewrite and design a life you desire and<br/>
                        <br />&bull; Empowering you to transition onto your new path
                        <br /><br/>As we support, inspire, and motivate you to share your story and disrupt the lies,
                        you&#39;ll realize we are helping you gain peace and rebuild something new from
                        what was broken or blocked. That is what 414 Life Coaching LLC is designed to do!
                    </p>
                </div>
                <div class="w-full lg:w-8/12">
                    <img class="w-full h-full" src="{{asset('images/logo.webp')}}" alt="Brave Space" />
                </div>
            </div>

            <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
                <div class="w-full lg:w-5/12 flex flex-col justify-center">
                    <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">Our Story</h1>
                    <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">
                        Have you ever had a moment in your life when you think back on it, your
                        mind creates a vivid picture of it? Here&#39;s mine. I was fifteen years old,
                        sitting on my bed and holding my first diary in my hand. All the pages were
                        blank. Nothing had been written within it. I sat, staring at the book, feeling
                        unsafe and alone. But, a sense of security grew with the simple thought of
                        writing down those things I feared and had been told not to share with
                        anyone.
                        I remember the first time I was told, &quot;Don&#39;t tell anyone.&quot; The atmosphere in
                        the house had become so quiet it was palpable. Instinctively I reassured
                        my baby brother that everything would be okay. And that&#39;s when the
                        yelling, banging, and violence began. I was petrified as I sat at the
                        breakfast table, trying to keep it together. I wanted to go tell someone what
                        was happening, but an angry voice yelled, &quot;And don&#39;t you dare tell anyone
                        what just happened!&quot; My voice was silenced.
                        Over the years, the outlet of writing down all that I had internalized while
                        enduring extreme trauma became second nature to me. Granted, it wasn&#39;t
                        the same as being able to tell a trusted friend about it, but it gave me a
                        channel and some relief to at least breathe easier for a little while.
                        Later on and at an appointed time in my adult life, I began to realize this
                        practice of writing down all these experiences and feelings they brought
                        would unveil. As I returned in time and read my many entries, they revealed a
                        recurring unhealthy life pattern in the words I, myself, had scribed. This
                        discovery helped me make one of the most critical decisions that changed
                        the course of my life for the better. I needed to change and had the power
                        within me to do it!
                        Reading those secret, unshared, unspoken, yet recorded words written by
                        my hand proved to be a gift I had unknowingly given myself. Each word
                        woke up a reality within me that gave me back my voice, changed, and
                        saved my life.

                        The gift I received in that moment is the same gift I wish to give to you and
                        others who feel it is safer to be quiet than to break your silence. Even if it
                        simply starts by writing it down. Break the silence with your written word
                        and discover what it reveals!
                    </p>
                </div>
{{--                <div class="w-full lg:w-8/12 lg:pt-8">--}}
{{--                    <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:gap-4 shadow-lg rounded-md">--}}
{{--                        <div class="p-4 pb-6 flex justify-center flex-col items-center">--}}
{{--                            <img class="md:block hidden" src="https://i.ibb.co/FYTKDG6/Rectangle-118-2.png" alt="Alexa featured Image" />--}}
{{--                            <img class="md:hidden block" src="https://i.ibb.co/zHjXqg4/Rectangle-118.png" alt="Alexa featured Image" />--}}
{{--                            <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Tiqua</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

@endsection
