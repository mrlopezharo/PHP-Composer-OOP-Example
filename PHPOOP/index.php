<?php

use Ricardo\Phpoop\chars\novice\Novice;
use Ricardo\Phpoop\chars\firstClass\Mage;
use Ricardo\Phpoop\chars\firstClass\Archer;
use Ricardo\Phpoop\chars\firstClass\Swordman;

require 'vendor/autoload.php';

function cls(){//clear consola
    print("\033[2J\033[;H");
}

cls();
echo "---------------------------------\n";
echo "¡¡Welcome to Kingdoms!!: \n";
echo "1.- New character. \n";
echo "2.- Close. \n";
echo "---------------------------------\n";
$respuesta1 = (int)readline(">>Press number: \n");
echo "\n";
cls();
echo "---------------------------------\n";

switch ($respuesta1) {
    case 1:
        echo "Creating a new character.\n";
        $nickName = (string)readline(">>Enter your nickname: \n");
        cls();

        $pj1 = new Novice($nickName,'Novice',9,9,9,9,9,9);

        echo "Welcome! \n";
        echo "NickName: " . $pj1->getNickName() . " \n";
        echo "Job:" . $pj1->getJob() . "\n";
        echo "Stats: \n";
        echo "-STR: " . $pj1->getStrength() . "     -AGI: " . $pj1->getAgility() . "\n";
        echo "-VIT: " . $pj1->getVitality() . "     -INT: " . $pj1->getIntelligence() . "\n";
        echo "-DEX: " . $pj1->getDexterity() . "     -LUK: " . $pj1->getLuck() . "\n";
        echo "---------------------------------\n";
        echo "Skills: \n";
        echo $pj1->trickDead() . "\n";
        echo $pj1->firstAid() . "\n";
        echo "---------------------------------\n";
        echo "Others: \n";
        echo $pj1->move() . "\n";
        echo $pj1->attack() . "\n";
        echo "---------------------------------\n";
        $continuar = readline(">>Press any key to continue: \n");
        cls();
        echo "\n";
        echo "---------------------------------\n";
        echo "Select option: \n";
        echo "1.- Change my Job. \n";
        echo "2.- Close. \n";
        echo "---------------------------------\n";
        $continuar = readline(">>Press any key to continue: \n");

            switch($continuar){
                case 1:
                    cls();
                    echo "---------------------------------\n";
                    echo "Select the Job: \n";
                    echo "1.- Mage \n";
                    echo "2.- SwordMan. \n";
                    echo "3.- Archer. \n";
                    echo "4.- Close. \n";
                    echo "---------------------------------\n";
                    $job = readline(">>Enter the number: \n");
                    switch($job){
                        case 1:
                            $pj1 = new Mage($nickName,'Mage',9,9,9,50,50,9);
                            break;
                        case 2:
                            $pj1 = new Swordman($nickName,'Swordman',50,50,9,9,50,9);
                            break;
                        case 3:
                            $pj1 = new Archer($nickName,'Archer',9,70,9,9,70,9);
                            break;
                    }

                    if($job<=3){
                        cls();
                        echo "Congratulations, you have changed your job! " . $pj1->getNickName() . "! \n";
                        echo "Job:" . $pj1->getJob() . "\n";
                        echo "Stats: \n";
                        echo "-STR: " . $pj1->getStrength() . "     -AGI: " . $pj1->getAgility() . "\n";
                        echo "-VIT: " . $pj1->getVitality() . "     -INT: " . $pj1->getIntelligence() . "\n";
                        echo "-DEX: " . $pj1->getDexterity() . "     -LUK: " . $pj1->getLuck() . "\n";
                        echo "---------------------------------\n";
                        echo "Skills: \n";
                        echo $pj1->trickDead() . "\n";
                        echo $pj1->firstAid() . "\n";
                        echo "New Skills: \n";
                        echo $pj1->advanceSkillOne() . "\n";
                        echo $pj1->advanceSkillTwo() . "\n";
                        echo "---------------------------------\n";
                        echo "Others: \n";
                        echo $pj1->move() . "\n";
                        echo $pj1->attack() . "\n";
                        $continuar = readline(">>Press any key to continue: \n");
                        cls();
                        echo "Come back soon! \n";

                    }else{
                        cls();
                        echo "Come back soon! \n";
                    }
                    break;
                case 2:
                    cls();
                    echo "Come back soon! \n";
                    break;    
            }
        break;
    case $respuesta1>=2:
        echo "Come back soon! \n";
        break;
}
