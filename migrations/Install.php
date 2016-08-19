<?php
namespace craft\plugins\sampleplugin\migrations;

use craft\app\db\Migration;

class Install extends Migration
{
	public function safeUp()
	{
		$this->createTable('tableName', [
			'uri' => $this->string()
		]);
	}

	public function safeDown()
	{
		$this->dropTableIfExists('tableName');
	}
}