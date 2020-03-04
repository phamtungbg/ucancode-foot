<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBlogRequest;
use App\Http\Requests\EditBlogRequest;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function tinTuc(Request $r) {
        dd($r->all());
        return view('backend.blog.blog');
    }
    function themTinTuc() {
        return view('backend.blog.addblog');
    }
    function postThemTinTuc(AddBlogRequest $r){
        dd($r->all());
    }
    function suaTinTuc() {
        return view('backend.blog.editblog');
    }
    function postSuaTinTuc(EditBlogRequest $r){
        dd($r->all());
    }
}
