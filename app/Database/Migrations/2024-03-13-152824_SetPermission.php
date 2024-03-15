<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SetPermission extends Migration
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
            'id_module'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => true,
            ],
            'id_group'       => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => true,
            ],
            'create'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true,
            ],
            'read'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true,
            ],
            'update'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => true,
            ],
            'delete'      => [
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
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('set_permission', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
        $this->forge->dropTable('set_permission');
    }
}
