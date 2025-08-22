<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string'
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success','Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm.');
    }
}
