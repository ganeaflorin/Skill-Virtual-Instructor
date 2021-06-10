<?php
namespace origami\models;

use origami\core\Application;
use PDO;

class PostHandler {
    public array $postBody;

    public function __construct($postBody)
    {
        $this->postBody = $postBody;
        $this->handle();
    }
    public function handle() {
        if($this->postBody["choose-operation"] === "add") {
            $this->insertLesson($this->postBody["add-lesson"]);
        }
        if($this->postBody["choose-operation"] === "delete") {
            $this->deleteLesson($this->postBody["delete-lesson"]);
        }
        if($this->postBody["choose-operation"] === "update") {
            $this->updateLesson();
        }
    }

    public function insertLesson($lessonName) {
        $tableName=Lesson::tableName();
        $statement=self::prepare("INSERT INTO $tableName (name) VALUES (:lesson) ");
        $statement->bindValue(":lesson", $lessonName);
        $statement->execute();
        return true;
    }

    public function deleteLesson($lessonName) {
        $tableName=Lesson::tableName();
        $statement=self::prepare("DELETE FROM $tableName where name= (:lesson) ");
        $statement->bindValue(":lesson", $lessonName);
        $statement->execute();
        return true;
    }
    public function updateLesson() {
        if($this->postBody["update-option"] === "add") {
            $this->addStep();
        }
        if($this->postBody["update-option"] === "update") {
            $this->updateStep();
       }
    }
    public function addStep() {
        $lessonName = $this->postBody["update-lesson"];
        $article = $this->postBody["step-article"];
        $imageLink = $this->postBody["step-image"];
        $lessonTableName=Lesson::tableName();
        $articlesTableName=LessonStep::tableName();
        $statement = self::prepare("INSERT INTO $articlesTableName (lesson_id, article, img_path) VALUES ((SELECT id FROM $lessonTableName WHERE name= :lessonName), :article, :img)");
        $statement->bindValue(":lessonName", $lessonName);
        $statement->bindValue(":article", $article);
        $statement->bindValue(":img", $imageLink);
        $statement->execute();
        return true;
    }

    public function updateStep() {
        $lessonName = $this->postBody["update-lesson"];
        $noStep = $this->postBody["step-lesson"];
        $newArticle = $this->postBody["modify-step"];
        $lessonTableName=Lesson::tableName();
        $articlesTableName=LessonStep::tableName();
        $statement = self::prepare("UPDATE $articlesTableName SET article = :newArticle WHERE 
                                    id = (SELECT id FROM $articlesTableName WHERE (lesson_id = 
                                    (SELECT id FROM $lessonTableName WHERE name= :lessonName)) LIMIT :lessonStep,1)");

        $statement->bindValue(":newArticle", $newArticle);
        $statement->bindValue(":lessonName", $lessonName);
        $statement->bindValue(":lessonStep", $noStep - 1, PDO::PARAM_INT);
        $statement->execute();
        return true;
    }
    public static function prepare($sql) {
        return Application::$app->db->pdo->prepare($sql);
    }
}

?>