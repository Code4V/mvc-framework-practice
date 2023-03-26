<?php 

namespace App\Models;

use App\Core\UserModel;

class User extends UserModel
{
    public const STATUS_INACTIVE = 0;
    public const STATUS_ACTIVE = 1;
    public const STATUS_DELETED = 2;

    public string $email = '';
    public string $password = '';

    public int $status = self::STATUS_INACTIVE;

    public static function  tableName(): string
    {
        return 'users';
    }

    public static function  primaryKey(): string
    {
        return 'id';
    }
    public function save() 
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                        self::RULE_UNIQUE, 'class' => self::class]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]]
        ];

    }

    public function attributes(): array
    {
        return ['email', 'password', 'status'];
    }

    public function labels(): array 
    {
        return [
            'email' => 'Email Address',
            'password' => 'Password'
        ];
    }

    public function getDisplayName(): string 
    {
        return $this->email;
    }
}