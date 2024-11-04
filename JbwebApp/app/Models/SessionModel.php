<?php 
namespace App\Models;

use CodeIgniter\Model;

class SessionModel extends Model
{
    protected $table = 'history_tbl';
    protected $primaryKey = 'session_id';
    protected $allowedFields = ['user_id', 'login_time', 'logout_time', 'ip_address'];
}
