@extends('public.layout.template')

@section('title', 'Gallery')

<style type="text/css">

    .img-gallery{
        object-fit: cover;
        width: 30%;
        display: block;
        margin-bottom: 15px;
        box-shadow: 0 0 6px rgb(0, 0, 0, 0.5);
        cursor: pointer;
    }
    .image-lightbox{
        transform: translate(100%);
        transition: transform .2s ease-in-out;
    }
    .show{
        transform: translate(0);
    }
    .showImage{
        transform: scale(1);
    }
    .image-pop{
        width:60%;
        height:60%;
    }
    .image-lightbox {
        height: calc(100vh-100px);
        width: 100vw;
        z-index:999;
    }
</style>

@section('content')



    <section class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="container overflow-hidden">
            <h2 class="title text-center text-4xl font-extrabold py-6 ">Gallery</h2>
            <div class="gallery_container flex flex-wrap justify-evenly">
                @foreach($galleries as $gallery => $image)
                <img src="{{$image->image}}?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" class="img-gallery hover:transition-all hover:duration-300 hover:ease-in-out hover:transform hover:scale-110" />
               @endforeach
            </div>
        </div>
    </section>
    <section class="image-lightbox bg-black fixed bg-opacity-60 w-full h-full top-0 left-0 flex justify-center items-center">
        <svg  class="h-6 w-6 close absolute top-[40px] right-[30px] width-[40px] cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        <img src="" alt="" class="image-pop object-cover rounded transition-all duration-300 ">
        <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400"></figcaption>
    </section>


{{--    <div class="mx-auto pb-10 w-4/5">--}}
{{--        {{$posts->links()}}--}}
{{--    </div>--}}


    <script type="text/javascript">
        const images = document.querySelectorAll('.img-gallery');
        const imagesLight = document.querySelector('.image-pop');
        const containerLight = document.querySelector('.image-lightbox');

        images.forEach(image =>{
            image.addEventListener('click', ()=>{
                appearImage(image.getAttribute('src'))

            })
        })

        containerLight.addEventListener('click', (e) =>{
            if(e.target !== imagesLight){
                containerLight.classList.remove('show');
                imagesLight.classList.remove('showImage');
            }
        })

        const
            appearImage = (image) =>{
                imagesLight.src = image;
                containerLight.classList.add('show');
                imagesLight.classList.add('showImage');
            }
    </script>

@endsection



