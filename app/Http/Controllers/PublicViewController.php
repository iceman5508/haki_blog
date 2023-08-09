<?php

namespace App\Http\Controllers;

use App\Models\CommentsModel;
use App\Models\PostsModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PublicViewController extends Controller
{

    /**
     * @return Application|View|\Illuminate\Foundation\Application|Factory
     */
    public function index(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        $featured = PostsModel::where([['active', 1], ['featured_post', 1]])->first();

        $other_posts = PostsModel::where([['id', '!=', $featured->id],['active',1]])->take(7)->get();

        $small_cards = $other_posts->count() > 0 ?  $other_posts->slice(0, 3): [];
        $mid_cards = $other_posts->count() > 3 ?  $other_posts->slice( 3, 2) : [];
        $end_cards = $other_posts->count() > 5 ?  $other_posts->slice( 5, 2) : [];



        $data = [
           'featured' => $featured,
            'small_cards' => $small_cards,
            'mid_cards' => $mid_cards,
            'end_cards' => $end_cards
        ];
        return view('public.index', ['data' => $data]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function show(Request $request, $slug){
        $post = PostsModel::where([['slug', $slug], ['active', 1]])->first();
        $related_posts = PostsModel::where([['category_id', $post->category_id], ['active', 1], ['id', '!=', $post->id]])->take(3)->get();
        $post_comments = $post->comments->where('active', 1)->all();
        return view('public.pages.posts', ['post' => $post, 'related_posts' => $related_posts, 'comments' => $post_comments]);
    }

    /**
     * @param Request $request
     * @param PostsModel $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, PostsModel $post){
        $inputs = $request->all();

        $comment  = new CommentsModel();
        $comment->fill($inputs);
        $comment->post_id = $post->id;
        $comment->save();

        return back()->with("success","Success! Your Comment will be live after verification by admin");
    }

    /**
     * Return all posts
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function allPosts(){
       $posts =  PostsModel::where('active', 1)->get();
        return view('public.pages.post', compact('posts'));
    }


    /**
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function search(Request $request)
    {
        $query = new PostsModel();

        if ($request->search_str) {

            $query = $query->where('title', 'like', "%$request[search_str]%")
                ->orWhereHas('tags', function ($q) use ($request) {
                    $q->where('name', '=', "$request[search_str]");
                });
        }

        $posts = $query->paginate(10);


        //$data['search_str'] =$request->search_str;


        return view('public.pages.post', compact('posts') );

    }
}
