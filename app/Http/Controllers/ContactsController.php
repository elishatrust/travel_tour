<?php

namespace App\Http\Controllers;

use App\Models\ContactsModel;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function list()
    {
        $data = [
                'title' => 'Upzone Safaris',
                'header' => 'Constants',
            ];

        return view('backend.contacts.list', compact('data'));
    }

    public function listView()
    {
        $data = ContactsModel::getContacts();
        return view('backend.contacts.list_view', compact('data'));
    }

    public function deleteContacts($id)
    {
        try {
            $data = ContactsModel::updateContacts($id);
            if($data)
            {
                $message='Contact message deleted successfully';
                return response()->json(['status' => 200, 'message' => $message]);
            }else{
                $message='Something went wrong. Try again!';
                return response()->json(['status' => 450, 'message' => $message]);
            }

        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'message' => $e->getMessage()]);
        }
    }
}
