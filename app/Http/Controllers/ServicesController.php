<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Service;
use Intervention\Image\Facades\Image;

class ServicesController extends Controller
{
  public function index() {

      $data = Service::notdeleted()->orderBy('created_at', "DESC")->get();

      return view('admin.services.index', compact('data'));
  }

  public function create(Request $request) {

      if (request()->isMethod('post')) {
          $this->validate(request(), [
              'title' => 'required|string|max:191',
              'title2' => 'nullable|string|max:191',
              'title3' => 'nullable|string|max:191',
              'description' => 'nullable|string',
              'content' => 'required|string',
              'content2' => 'nullable|string',
              'content3' => 'nullable|string',
              'image' => 'required|mimes:jpeg,jpg,bmp,png|max:2048',
              'gallery' => 'nullable|max:2048',
          ]);

          $newRow = new Service();

          $newRow->title = request('title');
          $newRow->title2 = request('title2');
          $newRow->title3 = request('title3');
          $newRow->description = request('description');
          $newRow->content = request('content');
          $newRow->content2 = request('content2');
          $newRow->content3 = request('content3');
          $newRow->active = 0;
          $newRow->deleted = 0;

          // check image element in request and accept image
          if (request()->hasFile('gallery')) {

            $images = request('gallery');

              foreach($images as $file){
                  $ext = $file->getClientOriginalExtension();
                  $imgTitle = config('app.seo-image-prefix') . str_slug($newRow->title, '-') . rand(1,55) . "." . $ext;
                  $file->move(public_path('/uploads/service/'), $imgTitle);
                  $data[] = '/uploads/service/' . $imgTitle;

              }
            }

          $newRow->gallery = json_encode($data);

          $image = "";

          // check image element in request and accept image
          if (request()->hasFile('image')) {
              $file = request('image');
//                echo $file->getClientOriginalName();
//                echo $file->getClientOriginalExtension();

              $fileName = str_slug($newRow->title, '-');
              $extension = $file->getClientOriginalExtension();
              $fullFileName = config('app.seo-image-prefix') . $fileName . "." . $extension;

              $file->move(public_path('/uploads/service'), $fullFileName);
              $image = '/uploads/service/' . $fullFileName;

              // intervention
              // create image from original
              $intervetionImage = Image::make(public_path('/uploads/service/') . $fullFileName);
              // xl size
              $intervetionImage->resize(1000, null, function ($constraint) {
                  $constraint->aspectRatio();
              });
              $fullFileNameXL = config('app.seo-image-prefix') . $fileName . "-xl." . $extension;
              $intervetionImage->save(public_path('/uploads/service/') . $fullFileNameXL);



          }

          $newRow->image = $image;

          $newRow->save();

          // set message

          session()->flash('message-type', "success");
          session()->flash('message', "Partner $newRow->title has been created successfully!!!");

          return redirect( route('my-services') );
      }



      return view('admin.services.create');
  }

  public function edit(Service $service) {


      if (request()->isMethod('post')) {
          $this->validate(request(), [
              'title' => 'required|string|max:191',
              'title2' => 'nullable|max:191',
              'title3' => 'nullable|max:191',
              'description' => 'nullable',
              'content' => 'required|string',
              'content2' => 'nullable|string',
              'content3' => 'nullable|string',
              'image' => 'nullable|mimes:jpeg,jpg,bmp,png',
              'gallery' => 'nullable|max:2048'
          ]);


          $service->title = request('title');
          $service->title2 = request('title2');
          $service->title3 = request('title3');
          $service->content = request('content');
          $service->content2 = request('content2');
          $service->content3 = request('content3');


          $image = $service->image;

          // check image element in request and accept image
          if (request()->hasFile('image')) {
              $file = request('image');
//                echo $file->getClientOriginalName();
//                echo $file->getClientOriginalExtension();

              $fileName = str_slug($service->title, '-');
              $extension = $file->getClientOriginalExtension();
              $fullFileName = config('app.seo-image-prefix') . $fileName . "." . $extension;

              $file->move(public_path('/uploads/service'), $fullFileName);
              $image = '/uploads/service/' . $fullFileName;

              // intervention
              // create image from original
              $intervetionImage = Image::make(public_path('/uploads/service/') . $fullFileName);
              // xl size
              $intervetionImage->resize(1000, null, function ($constraint) {
                  $constraint->aspectRatio();
              });
              $fullFileNameXL = config('app.seo-image-prefix') . $fileName . "-xl." . $extension;
              $intervetionImage->save(public_path('/uploads/service/') . $fullFileNameXL);


          }

          $service->image = $image;

          $gallery = $service->gallery;

          if (request()->hasFile('gallery')) {

            $images = request('gallery');

              foreach($images as $file){
                  $ext = $file->getClientOriginalExtension();
                  $imgTitle = config('app.seo-image-prefix') . str_slug($service->title, '-') . rand(1,55) . "." . $ext;
                  $file->move(public_path('/uploads/service/'), $imgTitle);
                  $data[] = '/uploads/service/' . $imgTitle;

              }

            }


            $service->gallery = $gallery;



          $service->save();

          // set message

          session()->flash('message-type', "success");
          session()->flash('message', "Partner $service->title has been edited successfully!!!");


//            session()->flash('message', [
//                'type' => 'success',
//                'text' => "User $newRow->name has been created successfully!!!"
//            ]);


          return redirect(route('my-services'));
      }

      return view('admin.services.edit', compact('service'));
  }

  public function activate(Service $services) {

      if ($services->active == 1) {
          $services->active = 0;
          $services->save();
      } else {
          $services->active = 1;
          $services->save();
      }

      // set message
      session()->flash('message-type', "success");
      session()->flash('message', "Service $services->title status updated successfully!!!");


      return redirect(route('my-services'));
  }

  public function delete(Service $service) {
      $service->deleted = 1;

      $service->save();

      // set message
      session()->flash('message-type', "success");
      session()->flash('message', "Service $service->title deleted successfully!!!");


      return redirect(route('my-services'));
  }
}
