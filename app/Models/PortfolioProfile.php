<?php

namespace App\Models;

use Database\Factories\PortfolioProfileFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioProfile extends Model
{
    /** @use HasFactory<PortfolioProfileFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'headline',
        'intro',
        'about',
        'profile_image_path',
        'cv_path',
    ];
}
