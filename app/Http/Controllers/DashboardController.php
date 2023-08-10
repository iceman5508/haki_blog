<?php

namespace App\Http\Controllers;

use App\Models\CommentsModel;
use App\Models\ContactModel;
use App\Models\Subscriber;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;


class DashboardController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index(): Factory|View
    {
        $data = array();

        $num_unread_comments = CommentsModel::where('read','!=','1')->count();
        $num_unread_contact = ContactModel::where('seen','!=','1')->count();
        $subscriber_count = Subscriber::all()->count();

        $data['num_unread_contact'] = $num_unread_contact;
        $data['num_unread_comments'] = $num_unread_comments;
        $data['subscriber_count'] = $subscriber_count;
        return view("private.admin.dashboard",$data);
    }


    public function contact(){

    }


    public function viewContact(){

    }
}
