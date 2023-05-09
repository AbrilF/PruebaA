<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
//añadimos el use 
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        //dentro del metodo select podemos hacer queries
        //selecciona todo lo de la tabla posts
        // $posts = DB::select('select * from posts');

        //selecciona lo de la tabla post del id indicado
        //$posts = DB::select('select * from posts WHERE id = ?, [1]);');

        $id = 1;
        // esto es una chain 
        $posts = DB::table('posts')
            //muestra en orden ascendente por el titulo mirando las letras
            ->orderBy('title', 'asc')
            ->get();
            
            //selecciona linias que sean unicas
            // ->select('title')
            // ->distinct()
            // ->get();

            //mostrar solo las lineas donde la columna este entre 2 valores (incluidos)
            // ->whereBetween('id', [1, 5])
            // ->get();
        
            //mostrar los que la fecha de creacion sea menor a un dia
            // ->where('created_at', '<', now()->subDay()) 
            // ->orwhere('title', 'Prof.')
            // ->get();
            
            //mostrar solo el id indicado arriba
            //->where('id', $id)
            //->get();

            //para mostrar todo
            //->select('body')
            //->get();


        dd($posts);
    }
}
