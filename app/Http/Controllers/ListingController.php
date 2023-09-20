<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() {
        return view('layout', [
            'listings' => Work::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }
}
