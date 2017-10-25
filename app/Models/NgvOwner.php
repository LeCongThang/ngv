<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 24 Oct 2017 06:51:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class NgvOwner
 * 
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $fullname
 * @property string $phone
 * @property string $avatar
 * @property string $address
 * @property string $lat
 * @property string $lng
 * @property int $gender
 * @property int $evaluation_point
 * @property int $wallet
 * @property string $password
 * @property string $device_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $status
 * @property int $badge
 *
 * @package App\Models
 */
class NgvOwner extends Eloquent
{
	protected $table = 'ngv_owner';

	protected $casts = [
		'gender' => 'int',
		'evaluation_point' => 'int',
		'wallet' => 'int',
		'status' => 'int',
		'badge' => 'int'
	];

	protected $hidden = [
		'password',
		'device_token'
	];

	protected $fillable = [
		'username',
		'email',
		'fullname',
		'phone',
		'avatar',
		'address',
		'lat',
		'lng',
		'gender',
		'evaluation_point',
		'wallet',
		'password',
		'device_token',
		'status',
		'badge'
	];
}
