<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }

    public function newsLetter(Request $request)
    {
        $data = [
            'email' => $request->email,
        ];

        NewsLetter::create($data);

        return back();
    }
}
