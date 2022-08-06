<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "sp_user";
    protected $primaryKey = "id_user";
    protected $allowedFields = ["username", "password", "nama", "npm", "prodi", "status"];
    protected $useTimestamps = false;
}
