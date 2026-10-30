<?php class BilletReduit extends BilletPleinTarif{
    private string $justificatif;
    public function __construct(int $numero , float $prix , Seance $seance , string $justificatif){
        parent::__construct($numero , $prix , $seance);
        $this->justificatif = $justificatif;
    }
    public function getJustificatif():string{
        return $this->justificatif;
    }
    public function setJustificatif(string $justificatif):void{
        $this->justificatif = $justificatif;
    }
    public function calculerPrix():float{
        return $this->getPrix() * 0.3;
    }
}