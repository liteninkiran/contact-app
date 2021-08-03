<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Resources\Contact as ContactResource;
use App\Http\Resources\ContactCollection;

class ContactController extends Controller
{
    public function index()
    {
        return new ContactCollection(Contact::all());
    }

    public function show($id)
    {
        return new ContactResource(Contact::findOrFail($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'salutation' => 'required|max:255',
            'first_name' => 'required|max:255',
            'middle_name' => 'nullable|max:255',
            'last_name' => 'required|max:255',
            'dob' => 'required|date',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'postcode' => 'required|max:255',
            'telephone' => 'required|max:255',
            'email' => 'required|unique|email|max:255',
        ]);

        $contact = Contact::create($request->all());

        return (new ContactResource($contact))
                ->response()
                ->setStatusCode(201);
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return response()->json(null, 204);
    }
}
