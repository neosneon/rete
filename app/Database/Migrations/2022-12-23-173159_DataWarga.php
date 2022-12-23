<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataWarga extends Migration
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
			'id_kk'       => [
				'type'           => 'INT',
				'constraint'     => 5
            ],
			'nama_lengkap'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '128'
            ],
			'NIK'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '8'
            ],
			'scan_ktp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '128'
            ],
			'j_kelamin'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1'
            ],
			'tempat_lahir'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '80'
            ],
			'tgl_lahir'       => [
				'type'           => 'datetime',
            ],
			'agama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '10'
            ],
			'pendidikan'       => [
                'type'           => 'VARCHAR',
				'constraint'     => '128'
            ],
            'jenis_pekerjaan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'status_pernikahan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'status_hubungan_keluarga'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'kewarganegaraan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'no_passport'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'kitas_kitap'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'ayah'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'ibu'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'status_warga'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
            ],
            'keterangan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '128'
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
		$this->forge->createTable('data_warga', TRUE);
	}

	//-------------------------------------------------------

	public function down()
	{
		// menghapus tabel news
		$this->forge->dropTable('data_warga');
	}
}
