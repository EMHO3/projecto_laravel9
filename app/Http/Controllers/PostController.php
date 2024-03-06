<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    public function index()
    {
        $posts=Post::get();

        return view('blog',['_p_o_s_t_s'=>$posts]);
    }

    public function show(Post $post){

        return view('posts.show',['post'=>$post]);
    }

    public function create(){
        return view('posts.create',['post'=>new Post]);
    }

    public function store(Request $request){
        //validaciones
        $request->validate([
            'title' =>['required'],
            'body'=>['required'],
        ]);

        Post::create($request->validate());
        return redirect()->route('blog');

    }

    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }

    public function update(Request $request,Post $post){

        $request->validate([
            'title' =>['required'],
            'body'=>['required'],
        ]);

        
        $post->update($request->validate());
        session()->flash('status','Post editado!');
        return redirect()->route('blog');
    }

    public function destroy(Post $post){
        $post->delete();
        session()->flash('status','Post eliminado!');
        return redirect()->route('blog');
        
    }
}