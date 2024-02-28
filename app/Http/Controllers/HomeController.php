<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    function index() {
        $title = 'learn laravel';
        $content = 'học laravel hay ';
        // $data = [
        //     'title' => $title,
        //     'content' => $content,
        // ];
        return view('home', compact(['title' , 'content']));

        // $contentView =  view('home');
        // dd($contentView->render());
        // return View::make('home', compact(['title' , 'content']));

    }

    function getProductDetails($id) {
        return view('clients.products.detail', compact(['id']));
    }
}
