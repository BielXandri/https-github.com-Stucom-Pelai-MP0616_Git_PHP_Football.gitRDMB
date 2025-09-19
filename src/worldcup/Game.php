<?php
namespace WorldCup;

use DateTime;

// Importamos todas las clases necesarias para montar el juego.
// Esto nos asegura que todos los objetos que usemos existan.
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

// Clase principal que representa el partido y controla todo lo que ocurre en él
class Game {
    // Propiedades del partido
    public $field;   // Campo donde se juega
    public $date;    // Fecha del partido
    public $ball;    // Pelota del juego
    public $teams;   // Array con los dos equipos

    // Getters y setters para todas las propiedades
    public function getField() { return $this->field; }
    public function setField($field) { $this->field = $field; }
    public function getDate() { return $this->date; }
    public function setDate($date) { $this->date = $date; }
    public function getBall() { return $this->ball; }
    public function setBall($ball) { $this->ball = $ball; }
    public function getTeams() { return $this->teams; }
    public function setTeams($teams) { $this->teams = $teams; }

    // Método principal que inicializa el partido
    public function main() {
        echo "<pre>";
        echo "Starting application\n";
        
        // Creamos el campo, la fecha y la pelota
        $this->setField(new Field(100));
        $this->setDate(new DateTime());
        $this->setBall(new Ball());

        // Creamos los jugadores del equipo A
        $listA = [new Goalkeeper(), new Defender(), new Defender(), new Defender(), new Defender(),
                  new Midfielder(), new Midfielder(), new Midfielder(), new Midfielder(),
                  new Forward(), new Forward()];

        // Creamos los jugadores del equipo B
        $listB = [new Goalkeeper(), new Defender(), new Defender(), new Defender(), new Defender(),
                  new Midfielder(), new Midfielder(), new Midfielder(), new Midfielder(),
                  new Forward(), new Forward()];

        // Creamos los equipos y asignamos jugadores y entrenadores
        $teamA = new Team("NewTeam");
        $teamA->setPlayers($listA);
        $teamA->setCoach(new Coach());

        $teamB = new Team("Maped");
        $teamB->setPlayers($listB);
        $teamB->setCoach(new Coach());

        // Guardamos los equipos en la propiedad del partido
        $this->setTeams([$teamA, $teamB]);

        // Arrancamos la simulación de las acciones del partido
        $this->start();
        echo "</pre>";
    }

    // Método que simula las jugadas del partido
    public function start() {
        echo "starting match actions...\n\n";

        // Repetimos 10 acciones por partido
        for ($i = 0; $i < 10; $i++) {
            echo "--- Action " . ($i + 1) . " ---\n";

            // Elegimos un equipo al azar
            $teamIndex = array_rand($this->teams);
            $selectedTeam = $this->teams[$teamIndex];
            echo "Team: " . $selectedTeam->getName() . "\n";

            // Elegimos un jugador al azar dentro del equipo seleccionado
            $players = $selectedTeam->getPlayers();
            $playerIndex = array_rand($players);
            $selectedPlayer = $players[$playerIndex];
            echo "Player type: " . (new \ReflectionClass($selectedPlayer))->getShortName() . "\n";

            // Todos los jugadores corren y pasan la pelota
            $selectedPlayer->run();
            $selectedPlayer->passBall();

            // Dependiendo del tipo de jugador, ejecutamos sus acciones específicas
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

            echo "\n";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Match Result</title>
  // Enlazamos la hoja de estilos para darle diseño a la página
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
// Creamos el objeto Game y arrancamos la simulación del partido
$game = new Game();
$game->main();
?>
</body>
</html>
