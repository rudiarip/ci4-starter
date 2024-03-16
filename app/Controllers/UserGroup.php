<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserGroupModel;

class UserGroup extends BaseController
{
    public function __construct()
    {
        $this->m_user = new UserGroupModel();
    }

    public function index()
    {
        $data = [
            'judul'     => 'Setting',
            'subjudul'  => 'User Manajemen',
            'isi'       => 'admin/page/v_userGroup',
            'script'    => 'admin/script/script_userGroup'
        ];

        return view('admin/layout/wrapper', $data);
    }
}
