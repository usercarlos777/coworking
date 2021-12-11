<?php


namespace App\Http\Controllers;
Use Illuminate\Http\Request;
Use App\Product;
class FiltrarcategoriasController extends Controller
{

    public function index()
    {
        $bienes     = Product::paginate(20)->where('type',"=","Producto");
        $servicios  = Product::paginate(20)->where('type',"=","Servicio");
        return view('coworking.front.filtrarcategorias',compact('bienes','servicios'));
    }

    public function indexnew()
    {
        return view('coworking.front.slidernew');//
    }


}
