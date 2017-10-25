<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 24 Oct 2017 06:51:22 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class NgvOwnerComment
 * 
 * @property int $id
 * @property int $from_maid_id
 * @property int $to_owner_id
 * @property int $task_id
 * @property string $content
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class NgvOwnerComment extends Eloquent
{
	protected $table = 'ngv_owner_comment';
	public $timestamps = false;

	protected $casts = [
		'from_maid_id' => 'int',
		'to_owner_id' => 'int',
		'task_id' => 'int'
	];

	protected $fillable = [
		'from_maid_id',
		'to_owner_id',
		'task_id',
		'content'
	];
}
