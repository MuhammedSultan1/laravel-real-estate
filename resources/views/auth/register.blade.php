@extends('layouts.default')

@section('content')

          <section>
            <div class="flex flex-col justify-center min-h-screen py-12 sm:px-6 lg:px-8">
              <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2 class="mt-6 text-3xl font-extrabold text-center text-neutral-600"> Sign up </h2>
              </div>
              <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="px-4 py-8 sm:px-10">
                  <form class="space-y-6" action="/register" method="POST">
                    @csrf
                      <div>
                      <label for="email" class="block text-sm font-medium text-gray-700"> Your Name</label>
                      <div class="mt-1">
                        <input id="name" name="name" type="text" placeholder="Your Name" autocomplete="name" required="" class="
                      block
                      w-full
                      px-5
                      py-3
                      text-base text-neutral-600
                      placeholder-gray-300
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border border-transparent
                      rounded-lg
                      bg-gray-50
                      focus:outline-none
                      focus:border-transparent
                      focus:ring-2
                      focus:ring-white
                      focus:ring-offset-2
                      focus:ring-offset-gray-300
                    ">
                      </div>
                    </div>
                    <div>
                      <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                      <div class="mt-1">
                        <input id="email" name="email" type="email" placeholder="Your Email" autocomplete="email" required="" class="
                      block
                      w-full
                      px-5
                      py-3
                      text-base text-neutral-600
                      placeholder-gray-300
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border border-transparent
                      rounded-lg
                      bg-gray-50
                      focus:outline-none
                      focus:border-transparent
                      focus:ring-2
                      focus:ring-white
                      focus:ring-offset-2
                      focus:ring-offset-gray-300
                    ">
                      </div>
                    </div>
                    <div>
                      <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                      <div class="mt-1">
                        <input id="password" name="password" type="password" placeholder="Your Password" autocomplete="current-password" required="" class="
                      block
                      w-full
                      px-5
                      py-3
                      text-base text-neutral-600
                      placeholder-gray-300
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border border-transparent
                      rounded-lg
                      bg-gray-50
                      focus:outline-none
                      focus:border-transparent
                      focus:ring-2
                      focus:ring-white
                      focus:ring-offset-2
                      focus:ring-offset-gray-300
                    ">
                      </div>
                    </div>
                    <div class="flex items-center justify-between">
                      <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="
                      w-4
                      h-4
                      text-purple-600
                      border-gray-300
                      rounded
                      focus:ring-purple-500
                    ">
                        <label for="remember-me" class="block ml-2 text-sm text-neutral-600"> Remember me </label>
                      </div>
                      <div class="text-sm">
                        <a href="#" class="font-medium text-purple-600 hover:text-purple-500"> Forgot your password? </a>
                      </div>
                    </div>
                    <div>
                      <button type="submit" class="
                    flex
                    items-center
                    justify-center
                    w-full
                    px-10
                    py-4
                    text-base
                    font-medium
                    text-center text-white
                    transition
                    duration-500
                    ease-in-out
                    transform
                    bg-purple-600
                    rounded-xl
                    hover:bg-purple-700
                    focus:outline-none
                    focus:ring-2
                    focus:ring-offset-2
                    focus:ring-purple-500
                  "> Sign in </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        
@endsection