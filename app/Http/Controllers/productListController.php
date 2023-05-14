<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\order_product;

use App\Models\product;
// use App\Models\order;
use Illuminate\Support\Facades\Auth;

class productListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $products= product::all();
        // dd($products);
        return view('produk_list.general.index')->with(['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $order = order::where('id',$id)->first();
        // dd($order);
        return view('produk_list.konfirmasi_pembayaran.index')->with(['order'=>$order]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products= product::where('id',$id)->first();
        // dd($products);

        return view('produk_list.produk_co.index')->with(['products'=>$products]);
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
         $products= product::where('id',$id)->first();
         $qty= $request->input('quantity');
        // dd($qty);

        return view('produk_list.produk_proses.index')->with(['products'=>$products,'qty'=>$qty]);
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
        $nama= $request->input('nama');
        $alamat= $request->input('alamat');
        $telp = $request->input('telp');
        $qty = $request->input('quantity');
        $company= Product::select('products.id', 'products.name', 'products.harga', 'products.qty','companies.id as company_name')
    ->join('categories', 'categories.id', '=', 'products.category_id')
    ->join('companies', 'companies.id', '=', 'products.company_id')->where('products.id',$id)->first();
            // dd($qty,($qty*$company->harga)+(($qty*$company->harga)*5/100));
    
    order::create(['company_id'=>$company->company_name,'User_id'=>Auth::User()->id,"total"=>($qty*$company->harga)+(($qty*$company->harga)*5/100),'status_pembayaran'=>"waiting"]);
    $order_id=order::where('company_id',$company->company_name)->latest()->first();    
    order_product::create(['order_id'=>$order_id->id,'product_id'=>$id,"qty"=>$qty]);
    // dd($nama,$alamat,$telp,$qty,$company,$order_id);
    return redirect()->route('general.product.store',['id'=>$order_id->id]);

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
