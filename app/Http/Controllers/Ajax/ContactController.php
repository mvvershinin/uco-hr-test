<?php

namespace App\Http\Controllers\Ajax;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

define('TABLE_COLUMNS',['age',	'eyeColor',	'name', 'gender', 'company', 'email', 'phone', 'address']);

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getContacts()
    {
        $data = Contact::active()
            ->select(TABLE_COLUMNS)
            ->paginate(2);

        return response(json_encode($data), 200);
    }
}
