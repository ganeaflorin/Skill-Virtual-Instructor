<?php
namespace meals\models;

use meals\core\DbModel;

class Lesson extends DbModel{
    public $id;
    public $name;
    public array $steps;

    public static function tableName() : string {
        return 'meals_lessons';
    }

    public function attributes(): array{
        return ['id', 'name'];
    }
    public function getId() {
        return $this->id;
    }
}
