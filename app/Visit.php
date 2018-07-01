<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = 'bg_visitors';
	protected $fillable = ['userIp','userCity','userPincode','userState','userCountry','userTimestamp'];

}


