<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurWorks extends Model
{
    use HasFactory;

    protected $fillable = ['image_url','video_url','image_check','sira'];
}
