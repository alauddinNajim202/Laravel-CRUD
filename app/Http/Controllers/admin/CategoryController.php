<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use DB;

class CategoryController extends Controller
{
    // __index method__

    public function index(){

        // __query_builder__
        //$category = DB::table('categories')->get();
       // __Orm query__

       $category= Category::all();
       return view('admin.category.index',compact('category'));

    }

     // __create method__

    public function create(){
       return view('admin.category.create');
    }

     // __create method__

    public function store(Request $request){


        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

        /// $category = new Category;
        // $category->category_name = $request->category_name;
        // $category->category_slug= Str::of($request->category_name)->slug('-');
        // $category->save();

        Category::insert(
            [
                'category_name' => $request->category_name,
                'category_slug' => Str::of($request->category_name)->slug('-'),

            ]
        );
        return redirect()->back();
    }

    // __edit Method__ //
    public function edit($id){

        //$data = DB::table('categories')->where('id',$id)->first();
        //$data = Category::where('id',$id)->first();

        $data = Category::find($id);
        return view('admin.category.edit', compact('data'));
    }

       // __update Method__ //
    public function update( Request $request, $id){

        $category = Category::find($id);
        $category -> update(
            [
                'category_name' => $request->category_name,
                'category_slug' => Str::of($request->category_name)->slug('-'),
            ]
        );

        // $category->category_name = $request->category_name;
        // $category->category_slug = Str::of($request->category_name)->slug('-');
        // $category->save();

        return redirect()->route('category.index');
    }

    // __destro method__ //

    public function destroy( $id ){
        // DB::table('categories')->where('id',$id)->delete();

        // $delete = Category::find($id);
        // $delete->delete();

        Category::destroy($id);
        return redirect()->back();
    }

}
