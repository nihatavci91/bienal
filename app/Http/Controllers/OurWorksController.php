<?php

namespace App\Http\Controllers;

use App\Models\OurWorks;
use Illuminate\Http\Request;

class OurWorksController extends Controller
{
    public function index()
    {
        $our_works = OurWorks::all();
        return view('panel.our_works.index',['our_works' => $our_works]);
    }

    public function create()
    {
        return view('panel.our_works.create');
    }



    public function store(Request $request, OurWorks $ourWorks)
    {
        $data = $request->all();

        $validated = $request->validate([
            'image' => 'nullable',
            'image.*' => 'image|mimes:jpg,png,jpeg'
        ]);

        $imageUrl = time() . "-" . "our_works" . "-" . $validated['image']->getClientOriginalName();
        $validated['image']->move(public_path('images'). "/", $imageUrl);
        $check = 0;
        if ($data['image_check'] == "on")
        {
            $check = 1;
        }

        OurWorks::create([
            'image_url' => $imageUrl,
            'sira' => $data['sira'],
            'video_url' => $data['video_url'],
            'image_check' => $check
        ]);

        return redirect()->back()->with('successMessage', "Başarıyla Eklendi");
    }



    public function destroy(Request $request)
    {
        OurWorks::destroy($request->data);

        return redirect()->back()->with('deleteSuccess', 'Kayıt  Silindi');
    }
}
