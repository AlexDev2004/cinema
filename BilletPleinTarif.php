<?php class BilletPleinTarif{
    private int $numero;
    private float $prix;
    private Seance $seance;
    public function __construct(int $numero , float $prix , Seance $seance){
        $this->numero = $numero;
        $this->prix = $prix;
        $this->seance = $seance;
    }
    public function getNumero():int{
        return $this->numero;
    }
    public function getPrix():float{
        return $this->prix;
    }
    public function getSeance():Seance{
        return $this->seance;
    }
    public function setNumero($nNumero):void{
        $this->numero = $nNumero;
    }
    public function setPrix($nPrix):void{
        $this->prix = $nPrix;
    }
    public function setSeance($nSeance):void{
        $this->seance = $nSeance;
    }
    public function calculerPrix():float{
        return $this->prix;
    }
    public function imprimerDetail():void{
        echo($this->seance->getDate().', '.$this->seance->getHeure().', '.$this->seance->getFilm().', '.$this->numero);
    }
}