<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index(){
        return view('contact.index');
    }

    public function create(){
        return view('contact.create');
    }

    public function show($id){
        $contacts = Contact::find($id);
    return view('contact.show', compact('contacts'));
    }
}
