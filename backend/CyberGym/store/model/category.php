<?php
    class category{
        private $id;
        private $categoryName;
        private $cateDesc;
        private $icon;

        public function __construct($categoryName,$cateDesc,$icon){
            $this->categoryName = $categoryName;
            $this->cateDesc = $cateDesc;
            $this->icon = $icon;
        }

        public function getId(){
            return $this->id;
        }

        public function getName(){
            return $this->categoryName;
        }
        public function setName($categoryName){
            $this->categoryName = $categoryName;
        }

        public function getDescription(){
            return $this->descCategory;
        }
        public function setDescription($cateDesc){
            $this->cateDesc = $cateDesc;
        }
        public function getIcon(){
            return $this->icon;
        }
        public function setIcon($icon){
            $this->icon = $icon;
        }
    }
?>