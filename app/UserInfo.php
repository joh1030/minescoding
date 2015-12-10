<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{

	protected $table = 'users_info';

    protected $fillable = [
    	'user_id',
    	'style',
    	'lang_one',
    	'lang_two',
    	'lang_three',
    	'csci_261',
    	'csci_262',
    	'csci_306',
    	'csci_406',
		'team_id',
    	'updated_at',
    	'created_at'
    ];
	protected $primaryKey = 'user_id';
}
