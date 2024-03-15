<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SetUser extends Migration
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
            'id_group'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => true,
            ],
            'email'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true,
            ],
            'username'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
                'null'           => true,
            ],
            'password'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
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
            'deleted_at'      => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
            ],
            'deleted_by'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true,
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('set_user', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
        $this->forge->dropTable('set_user');
    }
}
