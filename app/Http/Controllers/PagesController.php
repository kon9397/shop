<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Главная';
        $categories = Category::all();
        return view('pages.index', compact('title'))->with('categories', $categories);
    }

    public function contact() {
        $title = 'Контакты';
        return view('pages.contact', compact('title'));
    }
}
