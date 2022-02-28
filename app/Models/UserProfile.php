<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'gender','date_of_birth  ','phone_number','height','weight','disablity',
    'cast','religion','adress','house_owner','image','qualification','university_college','designation',
    'job_type','bussiness_owner','father_occupation','mother_ccupation','social_status','siblings','more_details',
    'satatus','marital_status',



];

}