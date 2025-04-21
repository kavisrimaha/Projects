<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'cicrud';           // 👈 Your table name
    protected $primaryKey = 'id';          // 👈 Set this to your table's primary key

    protected $allowedFields = ['name', 'mobile', 'email']; // 👈 Add actual table fields

    // Optional: if you want to match your old `all()` method
    public function all()
    {
        return $this->findAll(); // CI4 built-in method to get all rows
    }
}
