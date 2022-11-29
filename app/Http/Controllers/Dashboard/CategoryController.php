<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $request = request();


        Carbon::setLocale(config('locale'));
        $categories = Category::with("parent")

            ->filter($request->query())
            ->orderBy("categories.name")
            ->withCount("products")->paginate(10);



        /*leftJoin("categories as parents" , "parents.id" , "=" , "categories.parent_id")
                    ->select([
                        "categories.*",
                        "parents.name as parent_name"
                    ])->get();*/


        return view("Dashboard.Categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Category::get();
        $category = new Category();
        return view("Dashboard.Categories.create", compact("parents", "category"));
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




        if ($request->file("image")) {
            $image = $request->file("image");
            $ext = $image->getClientOriginalExtension();
            $name = uniqid() . time() . ".$ext";

            $image->move(public_path("uploads/Categories/"), $name);
        }

        // Validation

        $request->validate(
            Category::rules($id = 0),
            [
                "required" => "هذا الحقل مطلوب",
                "unique" => "هذا الحقل موجود مسبقا"
            ]
        );



        $category = Category::create([
            "name" => $request->name,
            "parent_id" => $request->parent_id,
            "description" => $request->description,
            "slug" => $request->slug,
            "image" => $name
        ]);





        return redirect()->route("dashboard.categories.index")->with("success", "تم إضافة التصنيف بنجاح");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show(Category $category)
    {
        return view("Dashboard.Categories.show", [
            "category" => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $parents = Category::where("id", "<>", $id)
            ->whereNull("parent_id")
            ->orWhere("parent_id", "<>", $id)
            ->get();




        return view("Dashboard.Categories.edit", compact("category", "parents"));
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
        $category = Category::findOrFail($id);
        $name = $category->image;

        if ($request->hasFile("image")) {
            if ($name !== null) {
                unlink(public_path("uploads/Categories/") . $name);
            }

            $image = $request->file("image");
            $ext = $image->getClientOriginalExtension();
            $name = uniqid() . time() . ".$ext";
            $image->move(public_path("uploads/Categories/"), $name);
        }




        // Request Merge
        $request->merge([
            "slug" => Str::slug($request->name)
        ]);


        $request->validate(Category::rules($id));

        $category->update([
            "name" => $request->name,
            "parent_id" => $request->parent_id,
            "description" => $request->description,
            "slug" => $request->slug,
            "image" => $name
        ]);

        return redirect(route("dashboard.categories.index"))
            ->with("updated", "📢 تم تعديل التصنيف بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        if ($category->image) {
            unlink(public_path("uploads/Categories/") . $category->image);
        }

        return redirect()->route("dashboard.categories.index")
            ->with("deleted", "✈ تم حذف التصنيف بنجاح");
    }
}
