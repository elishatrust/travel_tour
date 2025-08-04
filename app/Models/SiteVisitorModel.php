<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteVisitorModel extends Model
{
    use HasFactory;
    
    protected $table = 'site_visitors';

    protected $fillable = ['ip_address', 'visited_at'];
}
