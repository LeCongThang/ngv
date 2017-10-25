<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 24 Oct 2017 06:51:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class NgvVoucher
 * 
 * @property int $id
 * @property string $codes
 * @property \Carbon\Carbon $start
 * @property \Carbon\Carbon $end
 * @property int $user_id
 * @property int $status
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class NgvVoucher extends Eloquent
{
	protected $table = 'ngv_voucher';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'start',
		'end'
	];

	protected $fillable = [
		'codes',
		'start',
		'end',
		'user_id',
		'status'
	];
}
