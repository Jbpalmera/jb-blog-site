<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\SessionModel;
date_default_timezone_set('Asia/Manila'); 
class ProfileController extends BaseController
{
    public function profile()
    {
        $userModel = new User();
        $sessionModel = new SessionModel(); 
        $userId = session()->get('user_id'); 
    
        $user = $userModel->find($userId);
        
        if (is_array($user)) {
            $user = (object) $user;
        }
    
        if (!$user) {
            return redirect()->to('/some-error-page');
        }
    
      
        $loginSessions = $sessionModel->where('user_id', $userId)->findAll(); // Adjust query as needed
    
        return view('profile', ['user' => $user, 'loginSessions' => $loginSessions]);
    }

    public function updateProfile()
    {
        $request = service('request');


        $userModel = new User();

        if ($request->getMethod() === 'post') {

            if (!$this->validate([
                'update_username' => 'required|min_length[3]',
                'update_firstname' => 'required',
                'update_lastname' => 'required',
                'update_email' => 'required|valid_email',
            ])) {
                return view('profile', [
                    'user' => $userModel->find(session()->get('user_id')),
                    'errors' => $this->validator->getErrors(),
                ]);
            }


            $userId = session()->get('user_id');


            $data = [
                'username' => $request->getPost('update_username'),
                'firstname' => $request->getPost('update_firstname'),
                'lastname' => $request->getPost('update_lastname'),
                'email' => $request->getPost('update_email'),
            ];


            $userModel->update($userId, $data);

            return redirect()->to('/profile')->with('success', 'Profile updated successfully!');
        }

        return view('profile');
    }

    public function changePassword()
    {
        $request = service('request');
        $userModel = new User();
        $userId = session()->get('user_id');

        $user = $userModel->find($userId);

        if (is_array($user)) {
            $user = (object) $user;
        }


        if (!$user) {
            return redirect()->to('/some-error-page');
        }


        if ($request->getMethod() === 'post') {
            if (!$this->validate([
                'cpass_current' => 'required',
                'cpass_new' => 'required|min_length[6]',
                'cpass_confirm' => 'required|matches[cpass_new]',
            ])) {
                return view('profile', [
                    'user' => $user,
                    'errors' => $this->validator->getErrors(),
                ]);
            }

            $currentPassword = $request->getPost('cpass_current');
            $newPassword = $request->getPost('cpass_new');

            if (!password_verify($currentPassword, $user->password)) {
                return view('profile', [
                    'user' => $user,
                    'errors' => ['cpass_current' => 'Current password is incorrect.'],
                ]);
            }

            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $userModel->update($userId, ['password' => $hashedPassword]);


            return redirect()->to('/profile')->with('success', 'Password changed successfully!');
        }

        return view('login', ['user' => $user]);
    }


}



?>