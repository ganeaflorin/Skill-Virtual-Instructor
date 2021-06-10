<?php
namespace tie\models;
use tie\core\DbModel;
class LessonStep extends DbModel{
    public int $id;
    public int $lesson_id;
    public string $article;
    public string $imgPath;

public static function tableName() : string {
    return 'tie_articles';
}


}
?>