<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Printed;
use App\Models\Works;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function about(Request $request)
    {
        $about = AboutUs::where('id',1)->first();

        return view('panel.about.index', [
            'aboutupdate' => $about,
        ]);
    }

    public function aboutupdate(Request $request,AboutUs $aboutUs)
    {
        $data = $request->all();
        $validated = $request->validate([
            'image' => 'nullable',
            'image.*' => 'image|mimes:jpg,png,jpeg'
        ]);

        if (!isset($data['image']))
        {
            $aboutUs->where('id',1)->update([
                'title_tr' => $data['title_tr'],
                'title_en' => $data['title_en'],
                'description_tr' => $data['description_tr'],
                'description_en' => $data['description_en'],
                'address' => $data['address'],
                'tel' => $data['tel'],
                'map' => $data['map'],
                'email' => $data['email'],

            ]);
        }else{
            $imageUrl = time() . "-" . "home" . "-" . $validated['image']->getClientOriginalName();
            $validated['image']->move(public_path('images'). "/", $imageUrl);

            $aboutUs->where('id',1)->update([
                'title_tr' => $data['title_tr'],
                'title_en' => $data['title_en'],
                'image_url' => $imageUrl,
                'description_tr' => $data['description_tr'],
                'description_en' => $data['description_en'],
                'address' => $data['address'],
                'tel' => $data['tel'],
                'map' => $data['map'],
                'email' => $data['email'],

            ]);
        }


        return redirect()->back()->with('successMessage', "Sayfa Başarıyla Güncellendi");
    }

    public function printed()
    {
        $printed = Printed::where('id',1)->first();
        return view('panel.printed.index',['printedupdate' => $printed]);
    }

    public function printedupdate(Request $request)
    {
        $data = $request->all();

        Printed::where('id',1)->update([
            'description_tr' => $data['description_tr'],
            'description_en' => $data['description_en'],
        ]);

        return redirect()->back()->with('successMessage', "Sayfa Başarıyla Güncellendi");
    }


}

