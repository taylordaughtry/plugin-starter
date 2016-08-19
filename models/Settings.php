<?php
namespace craft\plugins\sampleplugin\models;

use craft\app\base\Model;

class Settings extends Model
{
	public $type;
	public $section;
	public $email;

	public function rules()
	{
		return [
			[
				'type',
				'string',
				'min' => 4
			],
			[
				'section',
				'number',
				'min' => 2,
				'max' => 12,
				'integerOnly' => true
			],
			[
				'email',
				'email'
			],
			[
				'email',
				'string',
				'min' => 5,
				'max' => 255
			]
		];
	}
}