@extends('public.layout.template')

@section('title', 'About Us')

@section('content')

    <div class="bg-white w-full">
        <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
            <h1 class="text-3xl lg:text-4xl font-bold leading-9  full text-gray-800 dark:text-white pb-4">About Us</h1>
            <div class="flex flex-col lg:flex-row justify-between gap-8">

                <div class="grid grid-cols-3 gap-3 w-full" style="margin-top: 20px">
                    <div>

                        <p class="font-normal text-base leading-6 dark:text-white text-lg">
                            If you have ever:
                        </p>
                        <ul class="list-disc text-base indent-16 mt-4 pl-5">
                            <li class="mt-2">Had your voice been silenced at any time in your life because of a
                                dysfunctional relationship of any type.</li>
                            <li class="mt-2">Felt or now feel totally broken.</li>
                            <li class="mt-2">Stuck in a dreadful meaningless life.</li>
                            <li class="mt-2">Reached insurmountable difficulties and roadblocks in life.</li>
                            <li class="mt-2">Struggled and seemingly failed to make “best life” decisions.</li>
                            <li class="mt-2">Desired a better life for yourself but can’t seem to make it happen.</li>
                            <li class="mt-2">Or, if all of these have rung true to you.</li>
                        </ul>
                    </div>

                    <div class="mt-20">
                        <div class="w-full">
                            <img class="w-full h-full" src="{{asset('images/414.svg')}}" alt="Brave Space" />
                        </div>
                    </div>
                    <div>

                        <p class="font-normal text-base leading-6 dark:text-white mt-40">
                            If so, 414 Life Coaching is here for you! It was created for such times and
                            emotions you have or are now experiencing.
                            We meet you where you are, come alongside you, and guide you through the
                            process of making the personal growth and healing life changes you desire and
                            deserve. We do this by:
                        </p>
                        <ul class="list-disc text-base list-disc text-base indent-16 mt-4 pl-5">
                            <li class="mt-2">Encouraging you to confidentially share your story so that the lies and false
                                truths presented within it can be confronted and dismantled.</li>
                            <li class="mt-2">Engaging and supporting your efforts to rewrite and design the “True You”
                                you so desire to become.</li>
                            <li class="mt-2">Empowering you to transition onto your new life path that leads to the life
                                you want to live.</li>
                        </ul>

                    </div>

                </div>


            </div>
            <p class="font-normal text-base leading-6 dark:text-white mt-4 tracking-wide">Working together, as we support, inspire, and motivate you to share your story,
                you’ll realize all your lies have been disrupted and dissolved. As a result, you’ll
                gain peace and a pathway to rebuild something new from what was once broken
                and/or blocked.
                That is what 414 Life Coaching is designed to do. We empower your ability to
                meet your challenges, become victorious, and start living your “True You!”
                We are here for you.
                I, Tiqua Davis, founder and Lead Coach of 414 Life Coaching can confidently say
                this because I too was once where and experiencing what you’re facing today. But
                it can be overcome. You can be victorious!
                If you haven’t read “My Why” story yet, <a class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600" href="{{route('why')}}"> click here </a> to discover the why and how
                414 Life Coaching and its “Truth Diary” were created.</p>


        </div>
    </div>

@endsection
