<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User; // Add this line to import the User model
class EmailController extends Controller
{
    public function sendEmail($recipientEmail, $verificationLink)
    {
        $email = \Config\Services::email();                                 
        
        $email->setTo($recipientEmail);
        $email->setFrom('jboyanib102199@gmail.com', 'Jb Oyanib');
        $email->setSubject('Verification Link');
        $email->setMessage('<p>This is a test Email for verification link <a href="' . $verificationLink . '">Click here to verify your email</a></p>');
    
        if ($email->send()) {
            return true; // Email sent successfully
        } else {
            return false; // Failed to send email
        }
    }
    public function verify()
    {
        $email = $this->request->getGet('email');
    
        $userModel = new User();
    
        if ($userModel->verifyEmail($email)) {
        
            return redirect()->to('/login')->with('success', 'You are now verified! Kindly log in to your account.');
        } else {
 
            return redirect()->to('/login')->with('error', 'Verification failed. Please try again.');
        }
    }
    public function login() {
    $request = service('request');
    $email = $request->getGet('email');

    if ($email) {
        $userModel = new User();
        $user = $userModel->where('email', $email)->first();

        if ($user) {
          
            $userModel->update($user['user_id'], ['verify_status' => 'verified']);
            return view('verification_success'); 
        } else {
            return view('verification_error', ['error' => 'User not found.']);
        }
    }

    return view('verification_error', ['error' => 'Invalid request.']);
}

    




}
