<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Company;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index(){
        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        $contacts = Contact::orderBy('first_name', 'asc')->where(function($query){
            if($companyId = request('company_id')){
                $query->where('company_id', $companyId);
            }
        })->paginate(10);
        return view('contact.index', compact('contacts', 'companies'));
    }

    public function create(){
        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('contact.create', compact('companies'));
    }

    public function show($id){
        $contact = Contact::find($id);
    return view('contact.show', compact('contact'));
    }

    public function store(Request $request){
        dd($request->all());
    }
}
