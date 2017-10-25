<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 24 Oct 2017 06:51:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class NgvTask
 * 
 * @property int $id
 * @property string $title
 * @property int $worktype_id
 * @property int $price
 * @property string $address
 * @property string $lat
 * @property string $lng
 * @property \Carbon\Carbon $start
 * @property \Carbon\Carbon $end
 * @property float $hour
 * @property bool $tools
 * @property bool $package
 * @property string $description
 * @property int $owner_id
 * @property int $maid_id
 * @property \Carbon\Carbon $check_in
 * @property \Carbon\Carbon $check_out
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class NgvTask extends Eloquent
{
	protected $table = 'ngv_task';

	protected $casts = [
		'worktype_id' => 'int',
		'price' => 'int',
		'hour' => 'float',
		'tools' => 'bool',
		'package' => 'bool',
		'owner_id' => 'int',
		'maid_id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'start',
		'end',
		'check_in',
		'check_out'
	];

	protected $fillable = [
		'title',
		'worktype_id',
		'price',
		'address',
		'lat',
		'lng',
		'start',
		'end',
		'hour',
		'tools',
		'package',
		'description',
		'owner_id',
		'maid_id',
		'check_in',
		'check_out',
		'status'
	];
}
