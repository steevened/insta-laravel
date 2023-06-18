@extends('layouts/app')

@section('title')
  Sign Up
@endsection

@section('content')
  <div class="md:flex md:justify-center">
    <div class="md:w-4/12">
      <p>Image</p>
    </div>
    <div class="md:w-4/12 mt-5 bg-slate-800 p-6 rounded-lg shadow-2xl shadow-slate-900">
      <form>
        <div class="mb-5">
          <label for="name" class="mb-2 block uppercase font-semibold">Name</label>
          <input id="name" name="name" type="text" placeholder="Name" class="border p-2 w-full rounded-lg focus:outline-none focus:ring bg-slate-700 border-slate-500 text-gray-200 placeholder-gray-200 duration-100"/>
        </div>
        <div class="mb-5">
          <label for="username" class="mb-2 block uppercase font-semibold">Username</label>
          <input id="username" name="username" type="text" placeholder="Username" class="border p-2 w-full rounded-lg focus:outline-none focus:ring bg-slate-700 border-slate-500 text-gray-200 placeholder-gray-200 duration-100"/>
        </div>

        <div class="mb-5">
          <label for="email" class="mb-2 block uppercase font-semibold">email</label>
          <input id="email" name="email" type="email" placeholder="email" class="border p-2 w-full rounded-lg focus:outline-none focus:ring bg-slate-700 border-slate-500 text-gray-200 placeholder-gray-200 duration-100"/>
        </div>

        <div class="mb-5">
          <label for="password" class="mb-2 block uppercase font-semibold">password</label>
          <input id="password" name="password" type="password" placeholder="password" class="border p-2 w-full rounded-lg focus:outline-none focus:ring bg-slate-700 border-slate-500 text-gray-200 placeholder-gray-200 duration-100"/>
        </div>

        <div class="mb-5">
          <label for="password_confirmation" class="mb-2 block uppercase font-semibold">repeat password</label>
          <input id="password_confirmation" name="password_confirmation" type="password" placeholder="repeat password" class="border p-2 w-full rounded-lg focus:outline-none focus:ring bg-slate-700 border-slate-500 text-gray-200 placeholder-gray-200 duration-100"/>
        </div>

        <button class="bg-sky-500 p-2 text-center block w-full font-semibold rounded-lg duration-100 hover:bg-sky-700" value="create account">Create account</button>
        
      </form>
    </div>
  </div>
@endsection