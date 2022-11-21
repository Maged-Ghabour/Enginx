<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with("category")->get();
        return view("Dashboard.Products.index" , compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $parents = Category::get();
        // $category = new Category();

        $product = new product();
        $categories = Category::get();
        return view("Dashboard.Products.create" , compact("product" , "categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Request Merge
         $request->merge([
            "slug" => Str::slug($request->name)
        ]);




        if($request->file("image")){
            $image = $request->file("image");
            $ext = $image->getClientOriginalExtension();
            $name = uniqid() . time() . ".$ext";
            $image->move(public_path("uploads/Products/") , $name);
        }else{
            $name ="";
        }


        // Validation

        $request->validate(Product::rules($id =0) ,
            [
                "required" => "هذا الحقل مطلوب" ,
                "unique" => "هذا الحقل موجود مسبقا"
            ]);



        $category = Product::create([
            "name" => $request->name,
            "category_id" => $request->category_id,
            "description" => $request->description,
            "slug" => $request->slug,
            "price" => $request->price,
            "compare_price" => $request->compare_price,
            "image" => $name
        ]);





        return redirect()->route("dashboard.categories.index")->with("success" , "تم إضافة التصنيف بنجاح");
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
