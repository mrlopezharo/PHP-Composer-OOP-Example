<?php
namespace Ricardo\Phpoop\chars\firstClass;
use Ricardo\Phpoop\chars\Novice\Novice;

    class Mage extends Novice{

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

        public function trickDead() : string {
            return "-Mage TrickDead";
        }

        public function firstAid() : string {
            return "-Mage FirstAid";
        }
        
        public function move() : string {
            return "-Mage Move";
        }

        public function attack() : string {
            return "-Mage Attack";
        }

        public function advanceSkillOne() : string {
            return '-Mage FireBolt';
        }

        public function advanceSkillTwo() : string {
            return '-Mage Ice Bolt';
        }
    }    
?>