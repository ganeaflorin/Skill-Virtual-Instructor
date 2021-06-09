<?php
namespace app\core\lesson;
class LessonStep {
    public int $id;
    public int $lesson_id;
    public string $article;
    public string $imgPath;
    
    public function __construct($id, $lesson_id, $article, $imgPath) {
        $this->id = $id;
        $this->lesson_id = $lesson_id;
        $this->article = $article;
        $this->imgPath = $imgPath;
    }
    public function stepTemplate() {
        return '<section class="lesson-container__step">
        <div class="lesson-container__step__indication">
            <h3>Step '. $this->id . '</h3>
            <p>'.$this->article .'</p>
        </div>
        <img src="'. $this->imgPath .'" class="lesson__img" alt="">
    </section>';
    }

    public function __toString() {
        return $this->stepTemplate();
    }
}

?>