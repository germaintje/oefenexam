<?php 
require_once 'DataHandler.php';

class Logic {
    public function __construct() {
        $this->DataHandler = new DataHandler( "localhost", "mysql", "testbase", "root", "");
    }

    public function __destruct() {
    }

    public function Create() {
        
			$voornaam       = $_POST['voornaam'];
			$achternaam     = $_POST["achternaam"];
			$bijnaam    = $_POST["bijnaam"];
		
		try {
			$sql    = "INSERT INTO `tabel`(`id`, `voornaam`, `achternaam`, `bijnaam`) VALUES ('id','$voornaam','$achternaam','$bijnaam')";
			$result = $this->DataHandler->create( $sql );
            
            return $result;            
        }catch (Exception $e) {
            throw $e;
        }
    }

    public function Reads() {
        try{
            $sql = "SELECT * FROM tabel";
            $result = $this->DataHandler->reads( $sql );

            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }

    public function Read( $id ) {
        try{
            $sql = "SELECT * FROM tabel WHERE id=$id";
            $result = $this->DataHandler->read( $sql );

            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }

    public function UpdateRead( $id ) {
        try{
            $sql = "SELECT * FROM tabel WHERE id=$id";
            $result = $this->DataHandler->updateread( $sql );

            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }

    public function Update( $id ) {
        try{
            $sql ="UPDATE tabel SET voornaam='".$_POST['voornaam']."', achternaam='".$_POST['achternaam']."', bijnaam='".$_POST['bijnaam']."' WHERE id=$id";

            $result = $this->DataHandler->update( $sql );
            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }

    public function Delete( $id ) {
        try{
            $sql = "DELETE FROM tabel WHERE id=$id";
            
            $result = $this->DataHandler->delete( $sql );
            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }

}
?>