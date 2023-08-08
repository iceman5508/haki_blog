<?php

namespace App\Http\Controllers;

use App\Models\CommentsModel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CommentController extends Controller
{
    public function index(Request $request)
    {

        if($request->ajax())
        {
            $model = CommentsModel::query();
            return Datatables::of($model)
                ->addColumn('actions', function ($model) use ($request) {
                    $id = $model->id;
                    $link = $request->url().'/'.$id;
                    //Edit Button
                    $actionHtml = '<a href="'.$link.'/edit'.' " class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span></a>';
                    //Delete Button
                    $actionHtml .='<a href="" data-delete-url="'.$link .'" class="btn btn-danger btn-sm delete-data" data-toggle="modal" data-target="#deleteModal"><span class="glyphicon glyphicon-trash"></span></a>';
                    return $actionHtml;
                })
                ->addColumn('post',function ($model) use ($request){
                    //Show Post title on which user has Commented
                    $actionHtml = $model->post->title;
                    return $actionHtml;
                })

                ->rawColumns(['actions','status'])
                ->make(true);
        }

        return view('private.admin.comments.list');
    }


    /**
     * Edit/Approve Comment

     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(CommentsModel $comment)
    {
        $comment->read = '1';
        $comment->save();
        $data['comment'] = $comment;
        return view('private.admin.comments.edit',$data);
    }


    public function update(Request $request, CommentsModel $comment)
    {
        $inputs = $request->all();

        $comment->fill($inputs);
        $comment->save();

        $request->session()->flash('success','Comment updated successfully');

        return redirect(route('admin.comments'));
    }

    public function destroy(Request $request,CommentsModel $comment)
    {
        $comment->delete();
        $request->session()->flash('info','Comment deleted successfully');

        return redirect(route('admin.comments'));
    }

}
