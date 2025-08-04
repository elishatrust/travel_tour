<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactsModel extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    static public function getContacts()
    {
        return DB::table('contacts')->where(['archive' => 0])->orderBy('id', 'desc')->get();
    }

    static public function findContact($id)
    {
        return DB::table('contacts')->where('id', '=', $id)->first();
    }

    static public function updateContacts($id)
    {
        return DB::table('contacts')->where(['id' => $id])->update(['archive' => 1]);
    }
}
