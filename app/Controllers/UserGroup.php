<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserGroup extends BaseController
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('UserGroupModel', 'user', TRUE);
    // }

    public function index()
    {
        $data = [
            'judul'     => 'Setting',
            'subjudul'  => 'User Manajemen',
            'isi'       => 'admin/page/v_userGroup',
            // 'script'    => 'admin/script/script_userGroup'
        ];

        return view('admin/layout/wrapper', $data);
    }
}
