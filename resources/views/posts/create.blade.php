<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Crear nuevo post</h1>

<form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800"  action="{{route('posts.store')}}" method="POST">
    <!--tiempo de duracion de token :2h-->
    @csrf
    @include('posts.form-fields')
    <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border  border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Enviar</button>
    <br>
    <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="http://localhost/laravel9/public/blog">Regresar</a>
</form>
<br>

