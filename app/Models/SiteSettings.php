<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'city_id',
        'city',
        'description',
        'short_des',
        'photo',
        'logo',
        'address',
        'email_for_clients',
        'default_phone',
        'additional_phone',
        'commercial_email',
        'working_time',
        'vk',
        'instagramm',
        'youtube',

    ];

    public function getAllSiteData($site_id)
    {
        //return $this::where('site_id', $site_id);
        return 'false';

    }
}
