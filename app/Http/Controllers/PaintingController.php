<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaintingController extends Controller
{
    private $paintings = [];
    function __construct()
    {
        $this->paintings = Storage::json('Painting.json');
    }

    public function index()
    {
        return view('index', ['paintings' => $this->paintings]);
    }
}
