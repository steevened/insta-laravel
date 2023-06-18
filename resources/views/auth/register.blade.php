@extends('layouts/app')

@section('title')
  Sign Up
@endsection

@section('content')
  <div class="md:flex md:justify-center">
    <div class="md:w-4/12">
      <p>Image</p>
    </div>
    <div class="p-6 mt-5 rounded-lg shadow-2xl md:w-4/12 bg-slate-800 shadow-slate-900">
      <form action="{{route('register')}}" method="POST">
        @csrf
        <div class="mb-5">
          <label for="name" class="block mb-2 font-semibold uppercase">Name</label>
          <input 
          id="name" 
          name="name" 
          type="text" 
          placeholder="Name" 
          class="w-full p-2 text-gray-200 placeholder-gray-200 duration-100 border rounded-lg focus:outline-none focus:ring bg-slate-700 border-slate-500"
          />
          @error('name')
            <p class="py-1 mt-2 text-center text-white bg-red-500 rounded-md">
              {{$message}}
            </p>
          @enderror
        </div>
        <div class="mb-5">
          <label for="username" class="block mb-2 font-semibold uppercase">Username</label>
          <input id="username" name="username" type="text" placeholder="Username" class="w-full p-2 text-gray-200 placeholder-gray-200 duration-100 border rounded-lg focus:outline-none focus:ring bg-slate-700 border-slate-500"/>
        </div>

        <div class="mb-5">
          <label for="email" class="block mb-2 font-semibold uppercase">email</label>
          <input id="email" name="email" type="email" placeholder="email" class="w-full p-2 text-gray-200 placeholder-gray-200 duration-100 border rounded-lg focus:outline-none focus:ring bg-slate-700 border-slate-500"/>
        </div>

        <div class="mb-5">
          <label for="password" class="block mb-2 font-semibold uppercase">password</label>
          <input id="password" name="password" type="password" placeholder="password" class="w-full p-2 text-gray-200 placeholder-gray-200 duration-100 border rounded-lg focus:outline-none focus:ring bg-slate-700 border-slate-500"/>
        </div>

        <div class="mb-5">
          <label for="password_confirmation" class="block mb-2 font-semibold uppercase">repeat password</label>
          <input id="password_confirmation" name="password_confirmation" type="password" placeholder="repeat password" class="w-full p-2 text-gray-200 placeholder-gray-200 duration-100 border rounded-lg focus:outline-none focus:ring bg-slate-700 border-slate-500"/>
        </div>

        <button class="block w-full p-2 font-semibold text-center duration-100 rounded-lg bg-sky-500 hover:bg-sky-700" value="create account">Create account</button>
        
      </form>
    </div>
  </div>
@endsection