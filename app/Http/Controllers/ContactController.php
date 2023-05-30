<?php

namespace App\Http\Controllers;
use App\Models\Contact;


use Illuminate\Http\Request;

class ContactController extends Controller
{
      public function ContactUsForm(Request $request) {

        // dd($request);
        
          $this->validate($request, [
              'Name' => 'required',
              'Email' => 'required|email',
              'Subject'=>'required',
              'Message' => 'required'
           ]);

        // dd($request);


          //  $contact->Name = $request->Name;
          //  $contact->Email = $request->Email;
          //  $contact->Phone = $request->Phone;
          //  $contact->Name = $request->Name;
          //  Store data in database
          Contact::create($request->all());
          // 
          return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
      }
}