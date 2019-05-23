<?php

namespace App\Http\Controllers\Ajax;

use App\Contact;
use App\Http\Controllers\Controller;

use Illuminate\Support\Arr;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

define('TABLE_COLUMNS',['age',	'eyeColor',	'name', 'gender', 'company', 'email', 'phone', 'address']);
define('JSON_PATH', 'json/data.json');

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getContacts()
    {
        $json = Storage::disk('public')->get(JSON_PATH);
        $collect = collect(
            Arr::flatten(json_decode($json, true),2)
        );
        $data = $collect->where('isActive', true)->mapInto( Contact::class);

        return response(json_encode($data->simplePaginate(2)), 200);
    }
}
