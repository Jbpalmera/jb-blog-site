<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\SessionModel;
date_default_timezone_set('Asia/Manila'); 

class AuthController extends BaseController
{
    


    public function register()
    {
        $request = service('request');

        if ($request->getMethod() !== 'post') {
            return view('registration');
        }

        $username = $request->getPost('reg_username');
        $firstname = $request->getPost('reg_firstname');
        $lastname = $request->getPost('reg_lastname');
        $phone = $request->getPost('reg_phone');
        $email = $request->getPost('reg_email');
        $password = $request->getPost('reg_password');
        $confirmPassword = $request->getPost('reg_Conpassword');

        if ($password !== $confirmPassword) {
            return view('registration', ['error' => 'Passwords do not match.']);
        }

        $passwordValidation = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/';
        if (!preg_match($passwordValidation, $password)) {
            return view('registration', ['error' => 'Password must be 8 characters or more and contain at least one number, one special character, and one uppercase letter.']);
        }

        $userModel = new User();

        if ($userModel->where('username', $username)->first()) {
            return view('registration', ['error' => 'Username is already taken.']);
        }

        if ($userModel->where('email', $email)->first()) {
            return view('registration', ['error' => 'Email is already taken.']);
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $hashedPassword,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'phone' => $phone,
            'verify_status' => 'unverified'
        ];

        if ($userModel->insert($data)) {
            // Send verification email
            $emailController = new EmailController();
            $verificationLink = base_url('verify?email=' . urlencode($email));
            if ($emailController->sendEmail($email, $verificationLink)) {
                return view('registration', ['success' => 'Registration successful! A verification email has been sent to your email address.']);
            } else {
                return view('registration', ['error' => 'Registration successful! But failed to send verification email.']);
            }
        } else {
            $errors = $userModel->errors();
            return view('registration', ['error' => 'Registration failed: ' . implode(', ', $errors)]);
        }

        log_message('info', 'User registered: ' . $username . ' with hashed password: ' . $hashedPassword);
    }


    public function login(): mixed
    {
        $request = service('request');
        $email = $request->getGet('email');
        
        if ($request->getMethod() === 'post') {
            $email = $request->getPost('email');
            $password = $request->getPost('password');
    
            $userModel = new User();
            $user = $userModel->where('email', $email)->first();
    
            log_message('info', 'Login attempt for email: ' . $email);
    
            if ($user) {
                log_message('info', 'User found: ' . $user['username']);
    
                // Check if the user is verified
                if ($user['verify_status'] === 'unverified') {
                    return view('login', ['error' => 'Please check your email to verify your account before logging in.']);
                }
    
                if (password_verify($password, $user['password'])) {
                    session()->set('user_id', $user['user_id']);
                    session()->set('username', $user['username']);
    
                
                    $sessionModel = new SessionModel();
                    $sessionModel->insert([
                        'user_id' => $user['user_id'],
                        'login_time' => date('Y-m-d H:i:s'),
                        'ip_address' => $this->request->getIPAddress()
                    ]);
    
                    log_message('info', 'User logged in: ' . $user['username']);
                    log_message('info', 'Session data: ' . print_r(session()->get(), true)); 
                    return redirect()->to('/landing_page');
                } else {
                    log_message('error', 'Incorrect password for user: ' . $email);
                }
            } else {
                log_message('error', 'User not found: ' . $email);
            }
    
            return view('login', ['error' => 'Invalid email or password.']);
        }
    
        return view('login');
    }
    
    
    public function landing_page()
{
    return view('landing_page');
}



    public function logout()
    {
        $sessionModel = new SessionModel();
        $userId = session()->get('user_id');
    
 
        $logoutTime = date('Y-m-d H:i:s');
  
        $lastSession = $sessionModel->where('user_id', $userId)->orderBy('session_id', 'DESC')->first();
    
        if ($lastSession) {
          
            $sessionModel->update($lastSession['session_id'], ['logout_time' => $logoutTime]);
        } else {
            log_message('error', 'No active session found for user ID: ' . $userId);
        }
    
        session()->destroy();
        return redirect()->to('/login');
    }
}






?>
