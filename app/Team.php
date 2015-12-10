<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

	protected $table = 'teams';

	protected $primaryKey = 'id';

	public $timestamps = false; // no idea why this works...
}
