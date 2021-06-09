<?php
namespace app\core\lesson;
class Lesson {
    public int $id;
    public string $name;
    public array $steps = [];
    public function __construct($id, $name, $steps) {
        $this->id = $id;
        $this->name = ucfirst($name);
        $this->createSteps($steps);
    }
    public function createSteps($steps) {
        $firstStepId = 1;
        foreach($steps as $step) {
        $lessonStep = new LessonStep($firstStepId++, $step['lesson_id'], $step['article'], $step['img_path']);
        array_push($this->steps, $lessonStep);
        }
    }

    public function renderSteps() {
        $allSteps = '';
        foreach($this->steps as $step) {
            $allSteps = $allSteps . $step; 
        }
        return $allSteps;
    }
    
    public function lessonTemplate() {

       return '<li class="lesson-title">
                    <button id="'. $this->id-1 .'" onClick="showContent(this.id)" class="dropdown-button">' .
                        $this->id .'. ' .  $this->name . '</button>
                    <div class="lesson">
                        <div class="lesson-container">'

                        . $this->renderSteps() . 
                        
                        '<div class="lesson-btns">
                                <button type="button" class="pBtn">Previous step </button>
                                <button type="button" class="nBtn">Next step</button>
                            </div>
                        </div>
                    </div> ';
    }
    public function __toString()
    {    
        return $this->lessonTemplate();
    }
}

?>