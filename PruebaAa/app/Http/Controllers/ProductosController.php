<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {  //creamos  una variable llamada titulo
        $title = "Listado de productos";
        $description = "creado con laravel 8";
        
        // $data = [
        //     'productoUno' => 'Arroz',
        //     'productoDos' => 'patatas'
        // ];
//Le indicamos que busque en la carpeta productos el archivo index.blade.php
    
    //METODO COMPACT compact es para pasarle la variable a la v ista
    // return view('productos.index', compact('title', 'description'));
    
    //METODO WITH
    //return view('productos.index')->with('title', $title)->with('description', $description);
    //devolver con with un array
    // return view('productos.index')->with('data' , $data)->with('title', $title)->with('description', $description);
    
    //pasado directamente desde la vista
    // return view('productos.index',['data'=>$data , 'title'=>$title, 'description'=>$description]);
    }
    

    public function about()
    {
        return 'productos about';
    }
    //en el show le cambiamos name por id o al reves si queremos buscar por id o por nombre
    // SI ES POR ID SOLO HAY QUE PONER return 'texto' . $id; dentro
    public function show($name)
    {
        
        $data = [
            'arroz' => 'arroz',
            'patatas' => 'patatas'
        ]; //los interrogantes nos devuelven lo que le hemos puesto en '' si no encuentra el producto
        return view('productos.index', ['producto' => $data[$name] ?? 'No hay el producto'. $name]);
    
    }





}
