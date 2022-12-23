<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kk extends Migration
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
			'nomor_kk'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
			'kepala_keluarga'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
			'id_kecamatan'       => [
				'type'           => 'INT',
				'constraint'     => 5
            ],
			'id_kelurahan'       => [
				'type'           => 'INT',
				'constraint'     => 5
            ],
			'id_rw'       => [
				'type'           => 'INT',
				'constraint'     => 5
            ],
			'id_rt'       => [
				'type'           => 'INT',
				'constraint'     => 5
            ],
			'kode_pos'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
            ],
			'provinsi'       => [
                'type'           => 'INT',
				'constraint'     => 5
            ],
            'foto_kk'       => [
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
		$this->forge->createTable('kk', TRUE);
	}

	//-------------------------------------------------------

	public function down()
	{
		// menghapus tabel news
		$this->forge->dropTable('kk');
	}
}
