<?php 

namespace App\Models;

use App\Core\Application;
use App\Core\DbModel;
use App\Core\Model;

class LoginForm extends Model
{
    public string $email = '';
    public string $password = '';

    public User $user;

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]]
        ];

    }

    public function login()
    {
        
        $user = (new User)->findOne(['email' => $this->email]);
        if (!$user) {
            $this->addError('email', 'User does not exist with this email address');
            return false;
        }
        if (!password_verify($this->password, $user->password)) {
            $this->addError('password', 'Password is incorrect');
            return false;
        }

        return Application::$app->login($user);
    }

    public function labels(): array
    {
        return [
            'email' => 'Email Address',
            'password' => 'Password',
        ];
    }
}
