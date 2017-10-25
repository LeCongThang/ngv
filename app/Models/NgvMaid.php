<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 24 Oct 2017 06:51:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class NgvMaid
 * 
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $fullname
 * @property string $phone
 * @property string $image
 * @property int $age
 * @property string $address
 * @property string $lat
 * @property string $lng
 * @property bool $gender
 * @property string $ability
 * @property int $evaluation_point
 * @property int $price
 * @property string $password
 * @property string $device_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property bool $status
 * @property int $badge
 * @property int $percentage
 *
 * @package App\Models
 */
class NgvMaid extends Eloquent
{
	protected $table = 'ngv_maid';

	protected $casts = [
		'age' => 'int',
		'gender' => 'bool',
		'evaluation_point' => 'int',
		'price' => 'int',
		'status' => 'bool',
		'badge' => 'int',
		'percentage' => 'int'
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
		'image',
		'age',
		'address',
		'lat',
		'lng',
		'gender',
		'ability',
		'evaluation_point',
		'price',
		'password',
		'device_token',
		'status',
		'badge',
		'percentage'
	];
}
