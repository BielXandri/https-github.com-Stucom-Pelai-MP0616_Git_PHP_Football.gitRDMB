<?php
namespace WorldCup;

use DateTime;

// Importar todas las clases
require_once __DIR__ . '/Ball.php';
require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Player.php';
require_once __DIR__ . '/Forward.php';
require_once __DIR__ . '/Midfielder.php';
require_once __DIR__ . '/Defender.php';
require_once __DIR__ . '/Goalkeeper.php';
require_once __DIR__ . '/Coach.php';
require_once __DIR__ . '/Team.php';
require_once __DIR__ . '/Field.php';

// Ejecutar juego
$game = new Game();
$game->main();

class Game {
    public $field;
    public $date;
    public $ball;
    public $teams;

    public function getField() { return $this->field; }
    public function setField($field) { $this->field = $field; }
    public function getDate() { return $this->date; }
    blic function setDate($date) { $this->date = $date; }
    public function getBall() { return $this->ball; }
    public function setBall($ball) { $this->ball = $ball; }
    public function getTeams() { return $this->teams; }
    public function setTeams($teams) { $this->teams = $teams; }

    public function main() {
        echo "\nStarting application\n";
        
        
        $this->setField(new Field(100));
        $this->setDate(new DateTime());
        $this->setBall(new Ball());

        $listA = [new Goalkeeper(), new Defender(), new Defender(), new Defender(), new Defender(),
                  new Midfielder(), new Midfielder(), new Midfielder(), new Midfielder(),
                  new Forward(), new Forward()];

        $listB = [new Goalkeeper(), new Defender(), new Defender(), new Defender(), new Defender(),
                  new Midfielder(), new Midfielder(), new Midfielder(), new Midfielder(),
                  new Forward(), new Forward()];

        $teamA = new Team("NewTeam");
        $teamA->setPlayers($listA);
        $teamA->setCoach(new Coach());

        $teamB = new Team("Maped");
        $teamB->setPlayers($listB);
        $teamB->setCoach(new Coach());

        $this->setTeams([$teamA, $teamB]);

        $this->start();
    }

    public function start() {
        echo "starting match actions... \n";
        echo"  ";

        for ($i = 0; $i < 10; $i++) {
            echo "\n--- Action \n" . ($i + 1) . " ---\n";

            $teamIndex = array_rand($this->teams);
            $selectedTeam = $this->teams[$teamIndex];
            echo "Team: " . $selectedTeam->getName() . "\n";

            $players = $selectedTeam->getPlayers();
            $playerIndex = array_rand($players);
            $selectedPlayer = $players[$playerIndex];
            echo "Player type: " . (new \ReflectionClass($selectedPlayer))->getShortName() . "\n";

            $selectedPlayer->run();
            $selectedPlayer->passBall();

            if ($selectedPlayer instanceof Forward) {
                $selectedPlayer->drible();
                $selectedPlayer->kick($this->getBall());
            } elseif ($selectedPlayer instanceof Midfielder) {
                $selectedPlayer->organize();
            } elseif ($selectedPlayer instanceof Defender) {
                $selectedPlayer->steal($this->getBall());
            } elseif ($selectedPlayer instanceof Goalkeeper) {
                $selectedPlayer->block($this->getBall());
            }
        }
    }
}