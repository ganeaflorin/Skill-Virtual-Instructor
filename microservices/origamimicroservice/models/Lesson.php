<?php
namespace origami\models;
use origami\core\DbModel;
class Lesson extends DbModel{
    public $id;
    public $name;
    public array $steps;

    public static function tableName() : string {
        return 'origami_lessons';
    }

    public function attributes(): array{
        return ['id', 'name'];
    }
    public function getId() {
        return $this->id;
    }
}
