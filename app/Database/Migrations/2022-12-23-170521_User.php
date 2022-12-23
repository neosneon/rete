<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
	{
		// Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 128,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 128,
			],
			'role_id' => [
				'type'           => 'INT',
                'constrain'      => 1
			],
			'status'      => [
				'type'           => 'int',
				'constraint'     => 1,
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
		$this->forge->createTable('user', TRUE);
	}

	//-------------------------------------------------------

	public function down()
	{
		// menghapus tabel news
		$this->forge->dropTable('user');
	}
}
