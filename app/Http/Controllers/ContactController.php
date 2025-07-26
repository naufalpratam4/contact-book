<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function dashboardContact(){
        $user = Auth::user();
        $contact = Contact::where('user_id', $user->id)->get();
        return view('dashboard.main', compact('contact', 'user'));
    }
    public function createContact(Request $request){
        $user = Auth::user();
        $data = new Contact([
            'user_id' => $user->id,
            'nama_kontak' => $request->input('nama_kontak'),
            'email' => $request->input('email'),
            'no' => $request->input('no'),
            'job' => $request->input('job'),
            'img' => $request->input('img')
        ]);
    }
}
