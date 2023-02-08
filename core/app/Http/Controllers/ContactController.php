<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /*Form Submit*/
    public function submitContact(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
        ]);
        Contact::submitContactData($request);
        return back()->with('message', 'Submit Successfully');
    }

    /*Show Contact Admin*/
    public function showContact(){
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('backend.contact.contact', compact('contacts'));
    }
    public function deleteContact(Request $request){
        $contact = Contact::find($request->id);
        $contact->delete();
        return back()->with('message', 'Deleted Successfully');
    }
}
