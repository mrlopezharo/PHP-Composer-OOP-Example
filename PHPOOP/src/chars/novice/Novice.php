<?php
namespace Ricardo\Phpoop\chars\novice;
use Ricardo\Phpoop\chars\Character;

    class Novice extends Character{

        public function __construct($nickName, $job, $strength, $agility, $vitality, $intelligence, $dexterity, $luck){
            $this->nickName = $nickName;
            $this->job = $job;
            $this->strength = $strength;
            $this->agility = $agility;
            $this->vitality = $vitality;
            $this->intelligence = $intelligence;
            $this->dexterity = $dexterity;
            $this->luck = $luck;
        }

        public function trickDead(){
            return '-Novice TrickDead';
        }

        public function firstAid(){
            return '-Novice FirsAid';
        }
        
        public function advanceSkillOne(){
            return '-No Skill';
        }

        public function advanceSkillTwo(){
            return '-No Skill';
        }
        
        public function move() : string {
            return "-Novice Move";
        }

        public function attack() : string {
            return "-Novice Attack";
        }
    }    
?>