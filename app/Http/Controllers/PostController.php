<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModel;
use App\Models\PostsModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class PostController extends Controller
{
    /**
     * Display the list of Posts. If Request is ajax, return json response for dataTables.
     *
     * @param Request $request
     * @return Factory|View
     * @throws \Exception
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $model = PostsModel::query();

            return Datatables::of($model)
                ->addColumn('status',function ($model) use ($request){
                    $statusHtml = ($model->active) ? '<span class="label label-success">Active</span>' :'<span class="label label-danger">Deactivated</span>';
                    return $statusHtml;
                })

                ->addColumn('actions', function ($model) use ($request) {
                    $id = $model->id;
                    $link = $request->url().'/'.$id;
                    //Edit Button
                    $actionHtml = '<a href="'.$link.'/edit'.' " class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a>';
                    //Delete Button
                    $actionHtml .='<a href="" data-delete-url="'.$link .'" class="btn btn-danger btn-sm delete-data" data-toggle="modal" data-target="#deleteModal"><span class="glyphicon glyphicon-trash"></span></a>';

                    return $actionHtml;
                })
                ->rawColumns(['actions','status'])
                ->make(true);
        }
        return view('private.admin.posts.list');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function show(): view
    {
        $data = array();
        //Get key value pair data from categories table for populating in dropdown:
        $categories = CategoriesModel::pluck("name","id");
        $data['post_tags'] = array();
        $data['categories'] = $categories;
        return view("private.admin.posts.create",$data);
    }



    /**
     * Store a newly created Post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'active' => 'required',
            'category_id'=>'required|numeric',
            'featured_image'=>'required'
        ]);
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        $inputs['slug'] = Str::slug($inputs['title'], '-');


        if($inputs['featured_image'])
        {
            $image_path = uploadWithThumb($inputs['featured_image'],'images/blog');
            $inputs['featured_image'] = $image_path;
        }


        PostsModel::create($inputs);
        $request->session()->flash('success', 'Post Successfully!');

        return redirect("admin/posts");

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param PostsModel $post
     * @return Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function edit(PostsModel $post)
    {
        $data = array();
        $categories = $post->category()->pluck('name', 'id');

        //Tags should be populated in edit form

        $post_tags = $post->tags()->select("tags.id",'name')->get()->toArray();
        $tags =array();
        foreach ($post_tags as $tag)
        {
            $tags[$tag['id']] = $tag['name'];
        }
        $data['post_tags'] = $tags;
        $data['post'] = $post;
        $data['categories'] = $categories;

        return view("private.admin.posts.edit",$data);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $post
     * @return Application|\Illuminate\Foundation\Application|RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function update(Request $request, PostsModel $post)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'active' => 'required',
            'category_id'=>'required|numeric'
        ]);

        $inputs = $request->all();


        $inputs['slug'] = Str::slug($inputs['title'], '-');
        if($request->hasFile('featured_image'))
        {
            $image_path = uploadWithThumb($inputs['featured_image'],'images/blog');
            $inputs['featured_image'] = $image_path;
        }
        $post->update($inputs);
        \Session::flash('success','Post Updated Successfully');
        return redirect(url('admin/posts'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param PostsModel $post
     * @return Application|\Illuminate\Foundation\Application|RedirectResponse|Redirector
     */
    public function destroy(PostsModel $post)
    {
        $post->delete();
        \Session::flash('info','Post deleted Successfully');
        return redirect(url('admin/posts'));
    }

}
