<?php 

namespace App\Models;

use App\Core\Model;

class TestForm extends Model
{
    public string $email = '';
    public string $message = '';

    public User $user;

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'message' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 15]]
        ];

    }

    public function labels(): array
    {
        return [
            'email' => 'Email Address',
            'password' => 'Password',
        ];
    }

    public function save()
    {
        return true;
    }
}
