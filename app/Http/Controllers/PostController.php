<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;
// use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
        // $posts=[
        //     ['title' => 'First Post'],
        //     ['title' => 'Second Post'],
        //     ['title' => 'Third Post'],
        //     ['title' => 'Fourth Post'],
        // ];
        // $posts = DB::table('posts')->get();
        
        $posts= Post::get(); //Eloquent asume que la tabla se llama posts(prural) xq el modelo se llama Post (singular)
        return view('posts.index',['posts'=>$posts]);
    }
    public function show(Post $post)
    {
        return view('posts.show',['post' => $post]);

    }
    public function create()
    {
        return view('posts.create',['post' => new Post]);
    }
    public function store(SavePostRequest $request)
    {
        //validacion manual de los atributos del formulario
       
        /*  $validated = $request->validate([
            'title' => ['required', 'min:4'],
            'body' => ['required']
        ]); */

        /* esto se puede mejorar usando un FormRequest el comando de artisan:
            php artisan make:request SavePostRequest
        este comando crea una nueva carpeta (en caso que no exista) en App\Http\ 
        llamada \Request donde se guardará con el nombre SavePostRequest.php, este archivo
        es para actualizar y crear Post  */
        

          //creando nuesta instancia del modelo POST
          /* 
          $post =new Post;
          $post->title= $request->input('title');
          $post->body= $request->input('body');
          $post->save();
         */

          //   Otra forma de hacerlo es asi: (definiendoigualmente los atributos de forma manual)
       
          /* Post::create([
            'title' =>  $request->input('title'),
            'body'  =>  $request->input('body'),
        ]); */

         // Pero como el $validated recibe los valores de la misma forma (verificalo con dd($validated)) 
        //entonces solo le psamos esa variable asi:
        
        // $post->create($validated);

        // como se cambio al FromRequest entonces se pone esa variable $request->validated()
        Post::create($request->validated());

          //mensaje de sesssion flash (porque dura una sola peticion)
          session()->flash('status','post created!');

        //   return redirect()->route('posts.index');

        //   tambien se puede usar el metodo with en vez de session()->flasg()
        //   despues del to_route('posts.show',$post)->with('status','Post created');
        return to_route('posts.index')->with('status', 'Post created!');
    }
    public function edit(Post $post)
    {
        return view('posts.edit',['post' => $post]);
        // return $post;
    }
    public function update(SavePostRequest $request, Post $post)
    {
        //creando validaciones

       /*  $validated = $request->validate([
            'title' => ['required','min:4'],
            'body' => ['required']
        ]); */

        /* esto se puede mejorar usando un FormRequest el comando de artisan:
            php artisan make:request SavePostRequest
        este comando crea una nueva carpeta (en caso que no exista) en App\Http\ 
        llamada \Request donde se guardará con el nombre SavePostRequest.php, este archivo
        es para actualizar y crear Post  */


          //creando nuesta instancia del modelo POST
        //   $post = Post::find($post);
          /* $post->title= $request->input('title');
          $post->body= $request->input('body');
          $post->save(); */

        //   Otra forma de hacerlo es asi: (definiendoigualmente los atributos de forma manual)
          /* $post->update([
                         'title' =>  $request->input('title'),
                        'body'  =>  $request->input('body'),
                         ]); */

        // Pero como el $validated recibe los valores de la misma forma (verificalo con dd($validated)) 
        //entonces solo le psamos esa variable asi:
            
        // $post->update($validated);

         // como se cambio al FromRequest entonces se pone esa variable $request->validated()
        $post->update($request->validated());

        
          //mensaje de sesssion flash (porque dura una sola peticion)
          //session()->flash('status','Post updated!');

          //   return redirect()->route('posts.index');

        //   tambien se puede usar el metodo with en vez de session()->flasg()
        //   despues del to_route('posts.show',$post)->with('status','Post updated!');
        return to_route('posts.show',$post)->with('status', 'Post updated!');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index')->with('status','Post deleted!');
    }
}
