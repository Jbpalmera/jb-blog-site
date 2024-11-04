<?php 

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users_tbl';
    protected $primaryKey = 'user_id';       
    protected $allowedFields = ['username', 'firstname', 'lastname', 'phone','email', 'password' ,'verify_status'];

    protected $validationRules = [
        'username' => 'required|min_length[3]|max_length[20]',
        'email' => 'required|valid_email',
        'password' => 'required|min_length[6]',
    ];
    

    public function verifyEmail($email)
    {
   
        $user = $this->where('email', $email)->first();
    
        if ($user) {
          
            if ($this->update($user['user_id'], ['verify_status' => 'verified'])) {
                return true; 
            } else {
               
                log_message('error', 'Failed to update verify_status for user_id: ' . $user['user_id']);
                return false;
            }
        }
    
        return false; 
    }
    
}
