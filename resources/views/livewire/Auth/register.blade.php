@extends('layouts.MyApp')



<div>
  <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-md">
   

    <h2
      class="mt-6 text-3xl uppercase text-blue-500 font-display font-extrabold text-center text-gray-900 leading-9 mt-12">
      Create a new account
    </h2>

    <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
      Or
      <a href="{{route('user-login')}}"
        class="font-medium text-red-500 hover:blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
        sign in to your account
      </a>
    </p>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="px-4 py-8 bg-white shadow-xl rounded  sm:px-10">
      <form wire:submit.prevent="register">
       
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
            First Name
          </label>

          <div class="mt-1 rounded-md shadow-sm">
            <input wire:model.lazy="name" id="name" type="text" required autofocus
              class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
          </div>

          @error('name')
          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

      
        <div class="mt-6">
          <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
            Email address
          </label>

          <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="email" id="email" type="email" required
              class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
          </div>

          @error('email')
          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div class="mt-6">
          <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
            Password
          </label>

          <div class="mt-1 rounded-md shadow-sm">
            <input wire:model="password" id="password" type="password" required
              class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
          </div>

          @error('password')
          <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div class="mt-6">
          <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5">
            Confirm Password
          </label>

          <div class="mt-1 rounded-md shadow-sm">
            <input wire:model.lazy="passwordConfirmation" id="passwordConfirmation" type="password" required
              class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
          </div>
        </div>

        <div class="mt-6">
          <span class="block w-full rounded-md shadow-sm">
            <button type="submit"
              class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-transparent hover:bg-blue-700 focus:outline-none focus:border-blue-800 focus:shadow-outline-indigo active:bg-blue-800 transition duration-150 ease-in-out">
              Register
            </button>
          </span>
        </div>
      </form>
    </div>
  </div>
</div>



  </script>

