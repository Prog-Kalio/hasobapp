<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

     /**
     * The nprimary key associated with the table
     * 
     *  @var string 
    */

    protected $primaryKey = "asset_id";
    // protected $fillable['type', 'description', 'movement'];
    
    protected $guarded = [];

}
