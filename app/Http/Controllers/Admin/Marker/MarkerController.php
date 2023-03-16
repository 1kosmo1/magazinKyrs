<?php

namespace App\Http\Controllers\Admin\Marker;

use App\Models\Marker;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;

class MarkerController extends Controller
{
    public function index(){
        $markers = Marker::all();
        return view('admin.marker.index', compact('markers'));
    }



    public function create(){
        return view('admin.marker.create');
    }

    public function edit(Marker $marker){
        return view('admin.marker.edit',compact('marker'));
    }

    public function update(Marker $marker){
        $data = request()->validate([
            'name' => 'string',
        ]);

        $marker->update($data);
        return redirect()->route('admin.markers.index');
    }

    public function show(Marker $marker){
        return view('admin.marker.show',compact('marker'));
    }

    public function store(){
        $data = request()->validate([
           'name' => 'string',
        ]);

        Marker::create($data);
        return redirect()->route('admin.markers.index');
    }

    public function destroy(Marker $marker){
        $marker->delete();
        return redirect()->route('admin.markers.index');
    }
}
