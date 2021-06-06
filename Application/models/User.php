<?php
namespace app\models;

use app\core\DbModel;
use app\core\Model;

class User extends DbModel{
    public string $username='';
    public string $email='';
    public string $password='';
    public string $cPassword='';

    public function save(){
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    public function rules(): array {

        return[
            'username' => [self::RULE_REQUIRED, [self::RULE_UNIQUE, 'class' =>self::class]],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_UNIQUE, 'class' =>self::class]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'cPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
        ];
    }
    
    public static function tableName() : string {
        return 'user';
    }
    public static function primaryKey(): string
    {
        return 'id';
    }
    
    public function labels() : array {
        return [
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'cPassword' => 'Confirm password'
        ];
    }

    public function attributes(): array{
        return ['username', 'email', 'password'];
    }

    public function getDisplayName() : string
    {
        return $this->username;
    }
    public function getEmail() : string
    {
        return $this->email;
    }
}