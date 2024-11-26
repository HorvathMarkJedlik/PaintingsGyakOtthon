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

    public function show($title)
    {
        foreach ($this->paintings as $paint) {
            if($paint['Painting'] == $title) {
                return view('show', ['paint' => $paint]);
            }
        }
        return abort(404);
    }

    public function artists()
    {
        $artists = [];
        foreach ($this->paintings as $paint)
        {
            if(!in_array($paint['Artist'], $artists)){
                $artists[] = $paint['Artist'];
            }
        }
        return view('artists', ['artists' => $artists]);
    }

    public function paintingsOfArtists($artist)
    {
        $paintings = [];
        foreach ($this->paintings as $paint){
            if($paint['Artist'] == $artist){
                $paintings[] = $paint;
            }
        }
        return view('index', ['paintings' => $paintings]);
    }
}
