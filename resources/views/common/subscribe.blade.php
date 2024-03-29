<div class="container font-sans brown rounded mt-8 p-4 md:p-24 text-center">
    <h2 class="font-bold break-normal text-white text-2xl md:text-4xl">Subscribe to {{config('site.Name')}}</h2>
    <h3 class="font-bold break-normal text-white font-normal text-base md:text-xl">Get the latest posts
        delivered right to your inbox</h3>
    <div class="w-full text-center pt-4">
        <form action="{{route('subscribe')}}" method="POST">
            @csrf
            <div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
                <input name="subscriber_email" type="email" placeholder="youremail@example.com"
                       class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
                <button type="submit"
                        class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none brav_bg text-black text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:brav_bg">
                    Subscribe
                </button>
            </div>
        </form>
    </div>
</div>
