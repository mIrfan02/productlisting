<?php

namespace App\Http\Controllers;

use App\Mail\CustomQuoteMail;
use App\Models\customquote; // Update model name to uppercase
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class CustomQuoteController extends Controller
{
    public function create()
    {
        return view('index');
    }



    public function store(Request $request)
    {
        $data = $request->all();

        // Validate the request data if needed
        $request->validate([
            'fileUpload' => 'file|mimes:jpeg,png,jpg,gif,pdf,doc,docx|max:2048',
            'phone_number' => 'nullable',

        ]);

        // Get all request data
        $data = $request->all();

        if ($request->hasFile('fileUpload')) {
            $file = $request->file('fileUpload');

            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/categories'), $filename);

            $data['fileUpload'] = 'uploads/categories/' . $filename;
        }

        // Get the URL of the current page

        $url = $request->url;
        // dd($url);
        $data['page_url'] = $url;


        // Create custom quote
        $customQuote = Customquote::create($data);

        if ($customQuote) {

            $data['file_path'] = $data['fileUpload'] ?? null;
            Mail::to('recipient@example.com')->send(new CustomQuoteMail($data));

            return redirect()->back()->with('success', 'Custom quote created successfully and email sent');
        } else {
            return redirect()->back()->withErrors(['error' => 'Failed to create custom quote']);
        }
    }
}
