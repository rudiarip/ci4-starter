<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SetModule extends Migration
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
            'id_parent'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => true,
            ],
            'name'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
                'null'           => true,
            ],
            'no_urut' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => true,
            ],
            'url'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
                'null'           => true,
            ],
            'icon'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
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
        $this->forge->createTable('set_module', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('set_module');
    }
}
