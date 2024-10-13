<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogModel extends Model
{
    use HasFactory;

    protected $table = 'blog';

    static public function getBlog()
    {
        return DB::table('blog')->where('blog.archive', '=', 0)->orderBy('blog.id', 'desc')->get();
    }

    static public function findBlog($id)
    {
        return DB::table('blog')->where('id', '=', $id)->first();
    }

    static public function findToken($id)
    {
        return DB::table('blog')->where('tokens', '=', $id)->first();
    }

    static public function updateBlog($id)
    {
        return DB::table('blog')->where('id', '=', $id)->update(['archive' => 1]);
    }

}
