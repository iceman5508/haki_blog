@extends('private.layouts.signout_template')

@section('title', 'Login')

@section('content')

    <!-- component -->
    <div class="min-h-screen  py-6 flex flex-col justify-center sm:py-12 my-4">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20 w-100">
                <div class="max-w-md mx-auto">
                    <div>
                        <h1 class="text-2xl font-semibold">Login To Admin Section</h1>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="relative">
                                    <input autocomplete="off" id="email" name="email" type="text"
                                           class="peer placeholder-transparent h-10 w-full border-b-2 @if($errors->has('email'))  border-red-500 @else border-gray-300 @endif  text-gray-900 focus:outline-none focus:borer-rose-600"
                                           placeholder="Email address" required/>
                                    <label for="email"
                                           class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email
                                        Address</label>
                                    <span
                                        class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                       @if($errors->has('email'))
                                                {{ $errors->first('email') }}
                                            @endif
                                    </span>
                                </div>
                                <div class="relative">
                                    <input autocomplete="off" id="password" name="password" type="password"
                                           class="peer placeholder-transparent h-10 w-full border-b-2 @if($errors->has('password'))  border-red-500 @else border-gray-300 @endif text-gray-900 focus:outline-none focus:borer-rose-600"
                                           placeholder="Password" required/>
                                    <label for="password"
                                           class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                                    <span
                                        class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                       @if($errors->has('password'))
                                                        {{ $errors->first('password') }}
                                                    @endif
                                    </span>
                                </div>
                                <div class="relative">
                                    <button class="bg-blue-500 text-white rounded-md px-2 py-1">Submit</button>
                                </div>

                                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                    Need to create an account? <a href="{{route('register.form')}}"
                                                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register
                                        here</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection




