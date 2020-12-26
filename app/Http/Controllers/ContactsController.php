<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail;
use App\Mail\ContactMail;

class ContactsController extends Controller
{
    public function contactP(){
      if(request()->isMethod('post')){
        $this->validate(request(), [
          'name' => "required|string",
          'email' => 'required|string',
          'phone' => 'nullable|string',
          'document' => 'nullable|mimes:jpg,png,pdf',
          'message' => 'required|string',
        ]);

        $contact = new Contact;

        $contact->name = request('name');
        $contact->email = request('email');
        $contact->phone = request('phone');
        $contact->message = request('message');

        //ukoliko postoji dokument pdf, docx
        $document = '';

        if(request()->hasFile('document')){

          $file = request('document');

          $fileName = str_slug($contact->name, '-');
            $extension = $file->getClientOriginalExtension();
            $fullFileName =  config('app.seo-document-prefix') . $fileName . "." . $extension;

            $file->move(public_path('/uploads/documents'), $fullFileName);
            $document = '/uploads/documents/' . $fullFileName;

        }


        $contact->document = $document;

        $contact->save();



        // Check if uploaded file size was greater than
        // maximum allowed file size

        session()->flash('message-type', "success");
        session()->flash('message', 'Message sent successfully.');



        \Mail::to('office@dentastico.rs')->send(new ContactMail($contact));
        return redirect()->back()->with('message-type', 'success')->with('message', 'Message sent successfully.');

      }
    }

    public function contactF(){
      if(request()->isMethod('post')){
        $this->validate(request(), [
          'name' => "required|string",
          'email' => 'required|string',
          'message' => 'required|string',
        ]);

        $contact = new Contact;

        $contact->name = request('name');
        $contact->email = request('email');

        $contact->message = request('message');


        $contact->save();



        // Check if uploaded file size was greater than
        // maximum allowed file size

        session()->flash('message-type', "success");
        session()->flash('message', 'Message sent successfully.');



        \Mail::to('office@dentastico.rs')->send(new ContactMail($contact));
        return redirect()->back()->with('message-type', 'success')->with('message', 'Message sent successfully.');

      }
    }
}
