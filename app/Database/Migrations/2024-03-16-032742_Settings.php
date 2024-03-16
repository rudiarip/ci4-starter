<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Settings extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'app_name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
                'null'           => true,
            ],
            'alamat'       => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'no_hp'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'null'           => true,
            ],
            'email'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true,
            ],
            'logo'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
                'null'           => true,
            ],
            'created_at'      => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
            ],
            'created_by'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true,
            ],
            'updated_at'      => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
            ],
            'updated_by'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true,
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('settings', TRUE);
    }

    public function down()
    {
        //
    }
}
