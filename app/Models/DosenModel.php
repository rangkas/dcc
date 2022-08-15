<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = "sp_dosen";
    protected $primaryKey = "id_dosen";
    protected $allowedFields = ["nidn", "nama"];
    protected $useTimestamps = false;

    public function getDosen()
    {
        return $this->db->table('sp_dosen')
            ->get()->getResultArray();
    }
}
