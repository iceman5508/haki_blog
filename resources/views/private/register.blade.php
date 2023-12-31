@extends('private.layouts.signout_template')

@section('title', 'Add User')

@section('content')

    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 h-screen mb-4">

        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-20 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 mt-20">

            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name"
                               class="bg-gray-50 border @if($errors->has('name'))  border-red-500 @else border-gray-300 @endif text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="First Lastname" required="">
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                           @if($errors->has('name'))
                                {{ $errors->first('name') }}
                            @endif
                        </span>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            email</label>
                        <input type="email" name="email" id="email"
                               class="bg-gray-50 border @if($errors->has('email'))  border-red-500 @else border-gray-300 @endif text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="name@company.com" required="">
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                           @if($errors->has('email'))
                                {{ $errors->first('email') }}
                            @endif
                        </span>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                               class="bg-gray-50 border @if($errors->has('password'))  border-red-500 @else border-gray-300 @endif text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               required="">
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                           @if($errors->has('password'))
                                {{ $errors->first('password') }}
                            @endif
                        </span>
                    </div>
                    <div>
                        <label for="password_confirmation"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                            password</label>
                        <input type="password" name="password_confirmation" id="password" placeholder="••••••••"
                               class="bg-gray-50 border @if($errors->has('password_confirmation'))  border-red-500 @else border-gray-300 @endif text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               required="">
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                           @if($errors->has('password'))
                                {{ $errors->first('password') }}
                            @endif
                        </span>
                    </div>

                    <div>
                        <label for="admin_password"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Admin Password</label>
                        <input type="password" name="admin_password" id="admin_password" placeholder="••••••••"
                               class="bg-gray-50 border @if($errors->has('admin_password'))  border-red-500 @else border-gray-300 @endif text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               required="">
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                           @if($errors->has('admin_password'))
                                {{ $errors->first('admin_password') }}
                            @endif
                        </span>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox"
                                   class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                   required="">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a
                                    class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms
                                    and Conditions</a></label>
                        </div>
                    </div>
                    <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800">
                        Create an account
                    </button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="{{route('login.form')}}"
                                                    class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
                            here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

@endsection




