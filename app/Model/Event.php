<?php

namespace App\Model;

use App\Helpers\CakHelper;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];
    protected $dates = ['date_event'];

    protected $appends 	= array(
        'DateNice',
    );


    public function getDateNiceAttribute()
    {
        return CakHelper::convertDateTimeNice($this->date_event);
    }

}
