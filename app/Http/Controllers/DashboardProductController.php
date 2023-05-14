<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\company;
use App\Models\category;
use Illuminate\Support\Facades\Auth;
class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $company= company::where("User_id",Auth::User()->id)->first();
        $products = Product::select('products.id', 'products.name', 'products.harga', 'products.qty', 'categories.name as category_name', 'companies.name as company_name')
         ->join('categories', 'categories.id', '=', 'products.category_id')
         ->join('companies', 'companies.id', '=', 'products.company_id')->where('companies.id',$company->id)
        ->get();
        return view('dashboard.sales.produk.index')->with(['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = category::all();
        // dd($kategori);
        return view('dashboard.sales.produk_add.index')->with(['kategori'=>$kategori    ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input('nama'));
        $nama= $request->input('nama');
        $kategori=$request->input('kategori');
        $qty=$request->input('qty');
        $harga = $request->input('harga');
        $request->validate([
        'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $company= company::where('User_id',Auth::User()->id)->first();
        product::create(["name"=>$nama,"company_id"=>$company->id,"category_id"=>$kategori,"qty"=>$qty,"harga"=>$harga,"img"=>$imageName,"deskripsi"=>$request->input("deskripsi")]);
        return redirect()->route('dashboard.product');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product= product::where('id',$id)->first();

        return view('dashboard.sales.produk_detail.index')->with(['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
