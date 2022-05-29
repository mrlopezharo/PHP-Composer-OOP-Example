<?php
namespace Ricardo\Phpoop\chars\firstClass;
use Ricardo\Phpoop\chars\Novice\Novice;

    class Archer extends Novice{

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
            return "-Archer TrickDead";
        }

        public function firstAid() : string {
            return "-Archer FirstAid";
        }
        
        public function move() : string {
            return "-Archer Move";
        }

        public function attack() : string {
            return "-Archer Attack";
        }

        public function advanceSkillOne() : string {
            return '-Archer SharpShooting';
        }

        public function advanceSkillTwo() : string {
            return '-Archer ArrowShower';
        }
    }    
?>