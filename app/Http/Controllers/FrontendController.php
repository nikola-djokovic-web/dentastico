<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Service;

class FrontendController extends Controller
{
    public function services(){
      $data = Service::notdeleted()->orderBy('created_at', 'DESC')->paginate(2);
      return view('frontend.pages.services', compact('data'));
    }

    public function about(){
      return view('frontend.pages.about');
    }

    public function contact(){
      return view('frontend.pages.contact');
    }

    public function singleService(Service $service){


      return view('frontend.pages.single-service', compact('service'));
    }

    public function ourServices(){

      return view('frontend.pages.our-services');
    }
}
