<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model {
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja', 'created_at'
    ];
}

