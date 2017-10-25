<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 24 Oct 2017 06:51:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class NgvAdim
 * 
 * @property int $id
 * @property string $username
 * @property string $pasword
 * @property string $fullname
 * @property string $avatar
 * @property \Carbon\Carbon $created_at
 * @property int $status
 *
 * @package App\Models
 */
class NgvAdim extends Eloquent
{
	protected $table = 'ngv_adim';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'username',
		'pasword',
		'fullname',
		'avatar',
		'status'
	];
}
