@extends('layouts.app')

@section('title')
 Home
@endsection  


@section('content')
 <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>

 <h2 class="text-3xl text-blue-400 font-bold underline">
    Mi projecto de laravel
  </h2>
  @auth()
    <div >
      Authenticated User: {{Auth::user()->name}}
    </div>
  @endauth 
@endsection  
