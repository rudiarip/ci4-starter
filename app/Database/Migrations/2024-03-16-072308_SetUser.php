<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SetUser extends Migration
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->dbforge();
    // }

    public function up()
    {
        $fields = array(
            'last_login' => array(
                'type'  => 'TIMESTAMP',
                'null'  => true,
            ),
            'photo' => array(
                'type'           => 'VARCHAR',
                'constraint'     => 150,
                'null'           => true,
            ),
            'status' => array(
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'null'           => true,
            ),
        );

        // $this->load->dbforge();
        $this->forge->addColumn('set_user', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('set_user', 'last_login');
        $this->forge->dropColumn('set_user', 'photo');
        $this->forge->dropColumn('set_user', 'status');
    }
}
