<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Maping extends Migration
{
    public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 128,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
			'coordinate'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
			'no_rumah'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
			'id_kk'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
            'created_at'=>[
                'type'           =>'datetime'
            ],
            'updated_at'=>[
                'type'          =>'datetime'
            ]
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('maping', TRUE);
	}

	//-------------------------------------------------------

	public function down()
	{
		// menghapus tabel news
		$this->forge->dropTable('maping');
	}
}
