<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function dashboardContact()
    {
        $user = Auth::user();
        $contact = Contact::where('user_id', $user->id)->get();
        return view('dashboard.main', compact('contact', 'user'));
    }

    public function viewCreateContact()
    {
        $user = Auth::user();
        return view('dashboard.createContact', compact('user'));
    }
    public function createContact(Request $request)
    {
        $user = Auth::user();
        $data = new Contact([
            'user_id' => $user->id,
            'nama_kontak' => $request->input('nama_kontak'),
            'email' => $request->input('email'),
            'no' => $request->input('no'),
            'job' => $request->input('job'),
            'img' => $request->input('img'),
            'description' => $request->input('description')
        ]);
        $data->save();
        return redirect('/')->with('success', 'Berhasil menambahkan kontak');
    }

    public function detailContact($id) {
        $user = Auth::user();
        $contact = Contact::where('user_id', $user->id)->paginate(3);
        $detail = Contact::findorfail($id);
        return view('dashboard.detailContact', compact('user', 'detail', 'contact'));
    }
    public function aboutContact($id) {
        $user = Auth::user();
        $contact = Contact::where('user_id', $user->id)->get();
        $detail = Contact::findorfail($id);
        return view('dashboard.aboutContact', compact('user', 'detail', 'contact'));
    }

    public function viewUpdateContact($id)
    {
        $user = Auth::user();
        $data = Contact::where('user_id', $user->id)->where('id', $id)->firstOrFail();
        return view('dashboard.updateContact', compact('user', 'data'));
    }
    public function updateContact(Request $request, $id)
    {
        $data = Contact::findorfail($id);
        $user = Auth::user();
        $data->update([
            'user_id' => $user->id,
            'nama_kontak' => $request->input('nama_kontak'),
            'email' => $request->input('email'),
            'no' => $request->input('no'),
            'job' => $request->input('job'),
            'img' => $request->input('img'),
            'description' => $request->input('description')
        ]);
        return redirect('/')->with('success', 'Berhasil update contact');
    }
    public function deleteContact($id)
    {
        $data = Contact::findorfail($id);
        $data->delete();
        return redirect()->back()->with('success', 'Berhasil delete kontak');
    }
}
