<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Settings extends Model
{
    use LogsActivity;

    protected $table = 'settings';

    protected $fillable = ['email', 'phone', 'description'];

    protected static $logAttributes = ['email', 'phone', 'description'];
}
