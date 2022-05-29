<?php
namespace Ricardo\Phpoop\chars;

    abstract class Character{

        protected $nickName;
        protected $job;
        protected $strength;
        protected $agility;
        protected $vitality;
        protected $intelligence;
        protected $dexterity;
        protected $luck;

        abstract function attack();
        abstract function move();

        public function setNickName($nickName){
            $this->nickName = $nickName;
        }

        public function getNickName(){
            return $this->nickName;
        }
        
        public function setJob($job){
            $this->job = $job;
        }

        public function getJob(){
            return $this->job;
        }

        public function setStrength($strength){
            $this->strength = $strength;
        }

        public function getStrength(){
            return $this->strength;
        }

        public function setAgility($agility){
            $this->agility = $agility;
        }

        public function getAgility(){
            return $this->agility;
        }

        public function setVitality($vitality){
            $this->vitality = $vitality;
        }

        public function getVitality(){
            return $this->vitality;
        }

        public function setIntelligence($intelligence){
            $this->intelligence = $intelligence;
        }

        public function getIntelligence(){
            return $this->intelligence;
        }

        public function setDexterity($dexterity){
            $this->dexterity = $dexterity;
        }

        public function getDexterity(){
            return $this->dexterity;
        }

        public function setLuck($luck){
            $this->luck = $luck;
        }

        public function getLuck(){
            return $this->luck;
        }
    }    
?>