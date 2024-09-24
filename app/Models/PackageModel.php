<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PackageModel extends Model
{
    use HasFactory;

    protected $table = 'packages';

    static public function getPackage()
    {
        return DB::table('packages')->where('packages.archive', '=', 0)->orderBy('packages.id', 'desc')->get();
    }

    static public function findPackage($id)
    {
        return DB::table('packages')->where('id', '=', $id)->first();
    }

    static public function updatePackage($id)
    {
        return DB::table('packages')->where('id', '=', $id)->update(['archive' => 1]);
    }

}
