<?php
    class Form {
        private $data;

        public function __construct($data) {
            $this->data=$data;
        }

        public function getData() {
            return $this->data;
        }

        private function getValue ($key) {
            if (isset($this->data[$key])) {
                return $this->data[$key];
            } else {
                return NULL;
            }
        }

        public function createInput($key,$classlabel,$classinput) {
            echo '<input type="text" name="'.$key.'" id="'.$key.'" value="'.$this->getValue($key).'" class="'.$classinput.'">';
            echo '<label for ="'.$key.'" class="'.$classlabel.'">'.$key.'</label>';
            
        } 

        public function createSubmit($text,$class) {
            echo '<button type="submit" class="'.$class.'">'.$text.'</button>';
        }
        public function createTextArea($text,$classarea,$niveaudautorisation,$ID,$forlabel,$classlabelarea) {
            echo '<textarea class="'.$classarea.'" data-constraits="'.$niveaudautorisation.'" name = "'.$text.'" ID="'.$ID.'"> </textarea>';
            echo '<label class='.$classlabelarea.'" for="'.$forlabel.'" >';
        }

    }
?>