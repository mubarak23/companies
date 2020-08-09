<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index(){
        $contacts = Contact::orderBy('first_name', 'asc')->paginate(10);
        return view('contact.index', compact('contacts'));
    }

    public function create(){
        return view('contact.create');
    }

    public function show($id){
        $contacts = Contact::find($id);
    return view('contact.show', compact('contacts'));
    }
}
