@if(Session::has('success'))
    <div class="text-center pt-2 pb-2 md:pt-4 md:pb-4 w-full bg-gray-600">
        <p class="text-2xl text-green-500 font-bold">   {{Session::get('success')}} </p>
    </div>
@endif
