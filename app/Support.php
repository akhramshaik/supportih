<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $table = 'bg_votes';
	protected $fillable = ['userName','userOccupation','userEmail','userMobile','userMsg','userIp','userCity','userPincode','userState','userCountry','userTimestamp'];
}



