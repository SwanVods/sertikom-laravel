<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class NameController extends Controller
{


    public function index()
    {
        $name = new Name();
        $data = [
            'data' =>$name->get(),
        ];

        return view('welcome', $data);
    }   
    
    public function store(Request $request)
    {
        $name = new Name();
        $name->name = $request->name;
        $name->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $name = Name::find($id);
        $data = [
            'id' => $id,
            'name' => $name->name
        ];
        return view('update', $data);
    }

    public function update(Request $request)
    {
        $name = Name::find($request->id);
        $name->name = $request->name;
        $name->save();
        return redirect()->route('home')->with('pesan', 'Data berhasil di update');
    }

    public function delete($id)
    {
        Name::where('id', $id)->delete();
        
        return redirect()->back();
    }

}
