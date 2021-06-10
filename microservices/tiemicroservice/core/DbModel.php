<?php
namespace tie\core;

use tie\models\LessonStep;

abstract class DbModel
{
    abstract static public function tableName(): string;
     static public function pathName() {
         return "tie";
     }
    public static function getAllLessons()
    {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName");
        $statement->execute();
        $lessons = [];
        $lessons['pathName'] = static::pathName();
        while ($lesson = $statement->fetchObject(static::class)) {
            $lesson->steps = LessonStep::getLessonSteps($lesson->getId());
            array_push($lessons, $lesson);
        }
        return $lessons;
    }

    public static function getLessonSteps($id) {
        $tableName = static::tableName();
        $statement = self::prepare("SELECT * FROM $tableName WHERE lesson_ID = $id");
        $statement->execute();
        $steps = [];
        while ($step = $statement->fetchObject(static::class)) {
            array_push($steps, $step);
        }
        return $steps;
    }
    public static function prepare($sql) {
        return Application::$app->db->pdo->prepare($sql);
    }
}
