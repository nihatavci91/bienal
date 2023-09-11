<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\OurWorks;
use App\Models\Printed;
use App\Models\Works;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = AboutUs::where('id',1)->first();
        $printed = Printed::where('id',1)->first();
        $our_works = OurWorks::orderBy('sira','ASC')->get();
        $works = Works::orderBy('sira','ASC')->get();

        return view('index',
            ['about' => $about,'printed' => $printed,'our_works' => $our_works,'works' => $works,'lang' => 'tr']
        );
    }

    public function english()
    {
        $about = AboutUs::where('id',1)->first();
        $printed = Printed::where('id',1)->first();
        $our_works = OurWorks::orderBy('sira','ASC')->get();
        $works = Works::orderBy('sira','ASC')->get();

        return view('english',
            ['about' => $about,'printed' => $printed,'our_works' => $our_works,'works' => $works,'lang' => 'eng']
        );
    }
}
