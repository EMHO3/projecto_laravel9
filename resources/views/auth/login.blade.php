@extends('layouts.app')

@section('title')
 Login
@endsection 

@section('content')
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Login</h1>

<form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800"  action="{{route('login')}}" method="POST">
    <!--tiempo de duracion de token :2h-->
    @csrf

    <div class="space-y-4">
    
    <label  class="flex flex-col">
        Email<br>
        <input 
        class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600  focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
        name="email" 
        type="email" 
        value="{{old('email')}}">
        <br>

        <!--validaciones-->
        @error('email')
        <small class="font-bold text-red-500/80" style="color: red">{{$message}}</small>
        @enderror  
    </label><br>
    <label  class="flex flex-col">
        Contraseña<br>
        <input 
        class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600  focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
        name="password" 
        type="password" 
        >
        <br>

        <!--validaciones-->
        @error('password')
        <small class="font-bold text-red-500/80" style="color: red">{{$message}}</small>
        @enderror  
    </label><br>
    <label  class="flex flex-col ml-2 ">
        Recuerdame<br>
        <input 
        class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600  focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400" 
        name="remember" 
        type="checkbox" 
        >
        <br>
    </label><br>
    </div>

    <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border  border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Login</button>
    <br>
    <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="{{route('register')}}">Register</a>
</form>
<br>
@endsection  