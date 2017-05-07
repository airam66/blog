<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CategoryRequest;

use App\Category;

class CategoriesController extends Controller
{
    //

    public function index(){

     $categories= Category::orderBy('id','DESC')->paginate(5);

     return view('admin.categories.index')->with('categories',$categories);

    }

    public function create(){
      
      return view('admin.categories.create');

    }

    public function store(CategoryRequest $request){

       $category= new Category($request->all());
       $category->save();

       flash("La categoria ". $category->name . " ha sido creada con exito" , 'success')->important();

       return redirect()->route('categories.index');
    }
    
    public function show($id){


    }

    public function edit($id){

    	$category= Category::find($id);

    	return view('admin.categories.edit')->with('category',$category);


    }


    public function update(Request $request, $id){

    	$category=Category::find($id);

    	$category->fill($request->all());

    	$category->save();

        flash("la categoria ".$category->name . " ha sido editado con exito", 'warning' )->important();

        return redirect()->route('categories.index');
    }

    public function destroy($id){

    	$category= Category::find($id);

    	$category->delete();

    	flash('la categoria '. $category->name .' ha sido eliminada con exito')->error()->important();

    	return redirect()->route('categories.index');




    }




}
