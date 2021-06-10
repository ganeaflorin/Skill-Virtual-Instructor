<?php
namespace tie\models;
use tie\core\DbModel;
class Lesson extends DbModel{
    public $id;
    public $name;
    public array $steps;

    public static function tableName() : string {
        return 'tie_lessons';
    }

    public function attributes(): array{
        return ['id', 'name'];
    }
    public function getId() {
        return $this->id;
    }
}
