<?php
//require de logic waar je de functie iets laat doen
require_once './model/Logic.php';

//maak class controller 
class Controller{

    //maak public funtie construct
    public function __construct() {
        $this->Logic = new Logic();
    }

    //maak public functie destruct
    public function __destruct() {
    }

    //maak public funtie handleRequest hierin zorg je dat je ?op=... kan gebruiken
    public function handleRequest() {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
            //switch case met alle cases die in ondernoemde functies verder gaan
            switch ($op) {
                case 'create' :
                $this->collectCreate();
                break;
                case 'reads';
                $this->collectReads();
                break;
                case 'read';
                $this->collectRead( $_REQUEST['id'] );
                break;
                case 'updateread';
                $this->collectUpdateRead( $_REQUEST['id'] );
                break;
                case 'update';
                $this->collectUpdate( $_REQUEST['id'] );
                break;
                case 'delete';
                $this->collectDelete( $_REQUEST['id'] );
                break;

                default:
                $this->collectHome();
            }
        } catch ( ValidationException $e ) {
            $errors = $e->getErrors();
        }
    }

    //default pagina
    public function collectHome(){
        $reads = $this->Logic->Reads();
        
        //de view die iets laat zien
        include 'view/home.php';
    }


    //nieuwe public functie met je case $this->...($_REQUEST);
    public function collectCreate(){
        //verwijs naar logic waar het iets gaat doen
        $products = $this->Logic->Create();
        $reads = $this->Logic->Reads();
        //de view die iets laat zien
        include 'view/home.php';
    }

    //nieuwe public functie met je case $this->...($_REQUEST);
    public function collectReads(){
        //verwijs naar logic waar het iets gaat doen
        $reads = $this->Logic->Reads();
        //de view die iets laat zien
        include 'view/reads.php';
    }

    //nieuwe public functie met je case $this->...($_REQUEST);
    public function collectRead( $id ){
        //verwijs naar logic waar het iets gaat doen
        $read = $this->Logic->Read( $id );
        //de view die iets laat zien
        include 'view/read.php';
    }

    //nieuwe public functie met je case $this->...($_REQUEST);
    public function collectUpdateRead( $id ){
        //verwijs naar logic waar het iets gaat doen
        $updateread = $this->Logic->UpdateRead( $id );
        //de view die iets laat zien
        include 'view/updateread.php';
    }

    //nieuwe public functie met je case $this->...($_REQUEST);
     public function collectUpdate( $id ){
        //verwijs naar logic waar het iets gaat doen
        $update = $this->Logic->Update( $id );
        $reads = $this->Logic->Reads();
        //de view die iets laat zien
        include 'view/home.php';
    }

    //nieuwe public functie met je case $this->...($_REQUEST);
    public function collectDelete( $id ){
        //verwijs naar logic waar het iets gaat doen
        $delete = $this->Logic->Delete( $id );
        $reads = $this->Logic->Reads();
        //de view die iets laat zien
        include 'view/home.php';
    }

}
?>