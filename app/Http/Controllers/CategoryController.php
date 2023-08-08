<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{

    /**
     * @return view
     */
    public function index()
    {

        $list = CategoriesModel::paginate(50);

        return view('private.admin.post_categories.list', compact('list'));
    }


    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function show(){
        return view('private.admin.post_categories.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            // 'active' => 'required',
        ]);
        $inputs = $request->all();

        $status = CategoriesModel::create($inputs);
        $request->session()->flash('success', 'New Category created Successfully!');
        return redirect("admin/categories");

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $category
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriesModel $category)
    {
        $data['post_category'] = $category;
        return view('private.admin.post_categories.edit', $data);

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $reques
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriesModel $category)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $inputs = $request->all();

        $category->fill($inputs);
        $category->save();
        $request->session()->flash('success', 'Category Updated Successfully!');
        return redirect(route('admin.categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CategoriesModel $category)
    {
        $category->delete();
        $request->session()->flash('info','Category deleted Successfully');
        return redirect(route('admin.categories'));

    }


}
