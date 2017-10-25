<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 24 Oct 2017 06:51:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class NgvMaidComment
 * 
 * @property int $id
 * @property int $from_owner_id
 * @property int $to_maid_id
 * @property int $task_id
 * @property string $content
 * @property int $evaluation_point
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class NgvMaidComment extends Eloquent
{
	protected $table = 'ngv_maid_comment';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'from_owner_id' => 'int',
		'to_maid_id' => 'int',
		'task_id' => 'int',
		'evaluation_point' => 'int'
	];

	protected $fillable = [
		'id',
		'from_owner_id',
		'to_maid_id',
		'task_id',
		'content',
		'evaluation_point'
	];
}
