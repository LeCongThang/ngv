<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 24 Oct 2017 06:51:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class NgvWorktype
 * 
 * @property int $id
 * @property string $name_vi
 * @property string $name_en
 * @property string $description_vi
 * @property int $price
 * @property int $status
 * @property int $image
 * @property int $weight
 * @property int $suggest_id
 * @property bool $tools
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $description_en
 *
 * @package App\Models
 */
class NgvWorktype extends Eloquent
{
	protected $table = 'ngv_worktype';

	protected $casts = [
		'price' => 'int',
		'status' => 'int',
		'image' => 'int',
		'weight' => 'int',
		'suggest_id' => 'int',
		'tools' => 'bool'
	];

	protected $fillable = [
		'name_vi',
		'name_en',
		'description_vi',
		'price',
		'status',
		'image',
		'weight',
		'suggest_id',
		'tools',
		'description_en'
	];
}
