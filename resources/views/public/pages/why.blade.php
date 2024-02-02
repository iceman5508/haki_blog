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

    <h1 class="font-bold break-normal text-3xl md:text-5xl">"My Why" Story</h1>
</div>

<!--image-->
{{--<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"--}}
{{--     style="background-image:url('{{asset($post->featured_image->medium)}}'); height: 75vh;"></div>--}}

<!--Container-->
<div class="container max-w-5xl mx-auto">

    <div class="mx-0 sm:mx-6">

        <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal flex flex-col space-y-4"
             style="font-family:Georgia,serif;" >

            <div>I remember, at the age of 15, sitting on my bed feeling alone and unsafe. In my
            hands, I held a personal diary. It was something I’d never had before. As I looked
            at the blank pages staring back at me, I felt fearful. What could I write in it since
            many times in the past I had adamantly been told, “Don’t tell or say a word to
            anybody about this.” However, I found a sense of security build within me as I
            thought, “Wait, I won’t be telling or saying anything to anybody but myself! This
            diary is my private space. I’ll be the only one to see and read the truths I put inside
            of it.” And with that, I picked up my pen and began to enter my emotions and
                terrifying life events that I was so afraid to share with anyone.</div>

            <div>Let me ask you a question before I share my first diary entry. Have you ever had a
            moment in your life that, when you think back on it, your mind creates a vivid
            picture of the event down to the environment and lighting of the room? That’s
            exactly what my mind did at the age of 15 as I began to pen my diary entry and
            thought about the first time I was told, “Don’t tell anybody.”
            </div>

            <div class="w-full">
                <img class="w-80 h-80" src="{{asset('images/cover3.jpg')}}" alt="flowers" />
            </div>
            <div>
            Here’s a synopsis of it. I was only five years old. The atmosphere in the house had
            become so quiet it was palpable. Instinctively, I leaned over and reassured my
            baby brother that everything would be okay. But that’s when the vicious yelling,
            loud banging, and physical violence began. I was trembling in fear as we sat at the
            breakfast table. I was petrified trying to keep it together as the horrifying events
            escalated around us. I wanted to go tell someone what was happening, but the
            fierce energy in the room made me realize I dared not tell anyone what had just
            happened!” My voice and I were silenced.
            </div>
            <div>
            Over the years, the outlet of writing down all that I had internalized while enduring
            extreme trauma became second nature to me. Granted, it wasn’t the same as
            being able to tell a trusted friend about it, however, it did give me a channel and
            some relief to at least breathe easier for a little while.
            I began to realize later in my adult life and unveil, at an “appointed time,” a deeper
            purpose this steady practice of writing down my experiences and feelings truly had.</div>

            <div class="w-full">
                <img class="w-80 h-80 float-right" src="{{asset('images/cover4.jpg')}}" alt="flowers" />
            </div>

            <div>
            My “appointed time” was when I started to read all my past diary entries. Reading
            those secret, unshared, unspoken, yet recorded words I had written revealed the
            recurring unhealthy life pattern I, myself, had authored and was living. My “Truth
            Diaries” I had created over the years proved to be a life-long gift I had
            unknowingly been giving myself. Each word within them woke up a reality within
            me. I had to break the fearful patterns of my life. This discovery also helped me
                realize two critically important things. I had to and wanted to change my life for the better and I had the power within me to do it! My “Truth Diaries” and this
            realization saved my life, changed it for the better, and eventually yet confidently
                gave me back my voice.</div>

            <div>
            The life-giving-gift I received in those moments is the same gift I desire to give you
            and others who feel it is safer to be quiet than speak out and break your silence.
            You can break your silence with your written words, disintegrate the lies within
            them that you thought true, discover your value, and boldly speak your mind with
            confident truth.
            </div>

            The most tragic and damaging lies lie within you. Break through the lies and start
            living the wonderful truth of your “True Self.” You!
        </div>


        <!--/comments--->

        <!--Subscribe-->
        @include('common.subscribe')
        <!-- /Subscribe-->


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
