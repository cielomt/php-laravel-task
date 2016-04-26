<?php namespace App\Http\Controllers;

use App\Contacts;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller {

	public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $contacts = Contacts::orderBy('name')->owner()->get();
        return view('contacts.index', compact('contacts'));
    }

    public function create(){
        return view('contacts.create');
    }

    public function show(Contacts $contacts){
        return view('contacts.show',compact('contacts'));
    }

    public function store(ContactsRequest $request){
        Auth::user()->contacts()->create($request->all());
        return redirect('contacts')->with(['flash_message'=>'New contact successfully added!']);
    }

    public function edit(Contacts $contacts){
        return view('contacts.edit',compact('contacts'));
    }

    public function update(Contacts $contacts, ContactsRequest $request){
        $contacts->update($request->all());
        return redirect('contacts')->with(['flash_message'=>'Contact successfully updated!']);
    }

    public function destroy(Contacts $contacts){
        $contacts->delete();
        return redirect('contacts')->with(['flash_message'=>'Contact successfully deleted!']);
    }
}
