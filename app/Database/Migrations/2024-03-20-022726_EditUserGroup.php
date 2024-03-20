<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EditUserGroup extends Migration
{
    public function up()
    {
        $fields = array(
            'keterangan' => array(
                'type'           => 'TEXT',
                'null'           => true,
            ),
        );

        $this->forge->addColumn('set_group', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('set_group', 'keterangan');
    }
}
