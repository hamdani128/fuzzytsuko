<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Info extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'					=> [
				'type'				=> 'int',
				'constraint'		=> 11,
				'unsigned'			=> TRUE,
				'auto_increment'	=> TRUE
			],
			'deskripsi'				=> [
				'type'				=> 'varchar',
				'constraint'		=> '255',
			],
			'prod_ton'				=> [
				'type'				=> 'varchar',
				'constraint'		=> '255',
			],
			'penj_ton'				=> [
				'type'				=> 'varchar',
				'constraint'		=> '255',
			],
			'stok_ton'				=> [
				'type'				=> 'varchar',
				'constraint'		=> '255',
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('info');
	}

	public function down()
	{
		$this->forge->dropTable('info');
	}
}
