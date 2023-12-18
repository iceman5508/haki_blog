@extends('public.layout.template')

@section('title', 'Gallery')

<style type="text/css">

    .img-gallery{
        padding: 2px;
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



    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">Gallery</h1>
            </div>
            <div class="flex flex-wrap -m-4">
                @foreach($galleries as $gallery => $image)
                 <div class="lg:w-1/3 sm:w-1/2 p-4" style="min-width: 300px">
                    <div class="flex relative">
                        <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center img-gallery hover:transition-all hover:duration-300 hover:ease-in-out hover:transform hover:scale-110" src="{{asset($image->image)}}" id="image_{{$image->id}}">
                        <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100 cursor-pointer" onclick="getImg('image_{{$image->id}}')">
                            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">{{$image->image_title}}</h2>
                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$image->image_desc}}</h1>
                            <p class="leading-relaxed"></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="image-lightbox bg-black fixed bg-opacity-60 w-full h-full top-0 left-0 flex justify-center items-center">
        <svg  class="h-6 w-6 close absolute top-[40px] right-[30px] width-[40px] cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        <img src="" alt="" class="image-pop object-fit rounded transition-all duration-300 ">
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

        function getImg(el){
            document.getElementById(el).click();
        }
    </script>

@endsection



