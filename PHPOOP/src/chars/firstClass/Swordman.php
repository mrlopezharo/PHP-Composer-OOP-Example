<?php
namespace Ricardo\Phpoop\chars\firstClass;
use Ricardo\Phpoop\chars\Novice\Novice;

    class Swordman extends Novice{

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
            return "-Swordman TrickDead";
        }

        public function firstAid() : string {
            return "-Swordman FirstAid";
        }
        
        public function move() : string {
            return "-Swordman Move";
        }

        public function attack() : string {
            return "-Swordman Attack";
        }

        public function advanceSkillOne() : string {
            return '-Swordman Bash';
        }

        public function advanceSkillTwo() : string {
            return '-Swordman BowlingBash';
        }
    }    
?>