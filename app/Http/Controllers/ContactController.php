<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{


    public function store(StoreContactRequest $request)
    {
        $contact=Contact::create($request->all());
        return redirect()->back()->with('message','Thank you for contacting us. We will return back to you as soon as possible');
    }


}
