<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        $works = Works::all();

        return view('panel.works.index',['works' => $works]);
    }

    public function create()
    {
        return view('panel.works.create');
    }
    public function update(Request $request, Works $works)
    {
        $data = $request->all();

        $validated = $request->validate([
            'image' => 'nullable',
            'image.*' => 'image|mimes:jpg,png,jpeg'
        ]);


        if (!isset($data['image']))
        {
            $works->where('id',$data['id'])->update([
                'sira' => $request['sira'],
                'title' => $request['title'],
            ]);
        }else{
            $imageUrl = time() . "-" . "logo" . "-" . $validated['image']->getClientOriginalName();
            $validated['image']->move(public_path('images'). "/", $imageUrl);

            $works->where('id',$data['id'])->update([
                'sira' => $request['sira'],
                'title' => $request['title'],
                'image_url' => $imageUrl,
            ]);
        }


        return redirect()->back()->with('successMessage', "Başarı ile Güncellendi");

    }

    public function store(Request $request, Works $works)
    {
        $data = $request->all();
        $validated = $request->validate([
            'image' => 'nullable',
            'image.*' => 'image|mimes:jpg,png,jpeg'
        ]);

        $imageUrl = time() . "-" . "logo" . "-" . $validated['image']->getClientOriginalName();
        $validated['image']->move(public_path('images'). "/", $imageUrl);

        Works::create([
            'image_url' => $imageUrl,
            'sira' => $data['sira'],
            'title' => $data['title'],
            'statu' => 1
        ]);

        return redirect()->back()->with('successMessage', "Logo Başarıyla Eklendi");
    }

    public function edit(Request $request, Works $works)
    {
        $id = $request->all();
        $data = Works::where('id',$id)->first();

        return view('panel.works.edit',['works' => $data]);
    }

    public function destroy(Works $works, Request $request)
    {
        Works::destroy($request->data);

        return redirect()->back()->with('deleteSuccess', 'Kayıt  Silindi');
    }
}
