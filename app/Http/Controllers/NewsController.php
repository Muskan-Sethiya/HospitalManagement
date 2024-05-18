<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function shownews()
    {
        $news1 = News::cursorPaginate(4);
        $latestNews = News::latest()->take(3)->get();
        return view('user.news', compact('news1','latestNews'));
    }

    public function newsdetails($id)
    {
        $data=News::find($id);
        $latestnews = News::latest()->take(3)->get();
        return view('user.news_details',compact('data','latestnews'));
    }

}
