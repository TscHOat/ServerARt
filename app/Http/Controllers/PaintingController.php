<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use Illuminate\Http\Request;

class PaintingController extends Controller
{
    public function getPaintings()
    {
        return response()->json(Painting::select(['id','title','price','link'])->get());
    }
    public function getDetailPainting($id)
    {
        return response()->json(Painting::select(['id','title','price','link','type','artist','year','price','width','height','description'])->get()->find($id));
    }
    public function getHotItem()
    {
        return response()->json(Painting::select(['id','title','price','link'])->limit(4)->inRandomOrder()->get());
    }
}
