<?php

/* Fighter class definition */
class Fighter {
    const MAX_LIFE = 100;
    private string $name;
    private int $strength;
    private int $dexterity;
    private int $life;

    public function __construct(string $name, int $strength, int $dexterity)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->life = Fighter::MAX_LIFE;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getStrength(): int {
        return $this->strength;
    }

    public function getDexterity(): int {
        return $this->dexterity;
    }

    public function getLife(): int {
        return $this->life;
    }

    public function fight(Fighter $ennemi): void {
        echo $this->name . " " . $this->strength;
        $numberDegat = rand(1, $this->strength);
        echo " attaque initiale de : $numberDegat";
        echo " dexterite de ennemi : $ennemi->dexterity";
        if ($ennemi->dexterity < $numberDegat) {
            $numberDegat = $numberDegat - $ennemi->dexterity;
        } else {
            $numberDegat = 0;
        }
        if ($numberDegat < 0) {
            $numberDegat = 0;
        }
        echo " attaque corrigée : $numberDegat";
        if ($ennemi->life > $numberDegat) {
            $ennemi->life = $ennemi->life - $numberDegat;
        } else {
            $ennemi->life = 0;
        }
    }
}

?>