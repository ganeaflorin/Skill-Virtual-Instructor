<?php

namespace app\core\form;

use app\core\Application;
use app\core\Model;
Class Field {
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';
    public string $type;
    public Model $model;
    public string $attribute;
    public function __construct(Model $model, string $attribute) {
        $this->type= self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }
    public function __toString() {
        $placeholderClass = "";
        if(array_key_exists($this->attribute, $this->model->errors)) {
            $placeholder = $this->model->errors[$this->attribute][0];
            $placeholderClass = " error_displayed";
        }
            else $placeholder = $this->model->getLabel($this->attribute);
        return sprintf('
        <input type="%s" name="%s" placeholder="%s" class="form-field%s">
        ', $this->type, $this->attribute, $placeholder, $placeholderClass);
    }

    public function passwordField() {
        $this->type=self::TYPE_PASSWORD;
        return $this;
    }
}