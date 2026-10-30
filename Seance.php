<?php class Seance{
    private string $date;
    private string $heure;
    private string $film;
    public function __construct(string $date , string $heure , string $film){
        $this->date = $date;
        $this->heure = $heure;
        $this->film = $film;
    }
    public function getDate():string{
        return $this->date;
    }
    public function getHeure():string{
        return $this->heure;
    }
    public function getFilm():string{
        return $this->film;
    }
    public function setDate($nDate):void{
        $this->date = $nDate;
    }
    public function setHeure($nHeure):void{
        $this->heure = $nHeure;
    }
    public function setFilm($nFilm):void{
        $this->film = $nFilm;
    }
}