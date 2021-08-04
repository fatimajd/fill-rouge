<?php 
/**
 * 
 */
require_once 'connection.php';

class Plats
{
	public $nom;
    public $date;
    public $heure;
    public $image;
    public $prix;
    public $prixenc;
    public $nmbrplats;
    public $idR=11;
    
	static $table="plats";

    public function insert(){

     	$cnx = new Connection;
     	$cnx->insert(self::$table,['nom','date','heure','image','prix','prixenc','nmbrplats','idR'],[$this->nom,
         $this->date,
         
         $this->heure,
         $this->image,
         $this->prix,
         $this->prixenc,
         $this->nmbrplats,
         $this->idR]);
         
        }
     public static function getAll(){
    	$cnx = new Connection;
    	$requette="SELECT plats.*, restaurant.ville FROM `plats`,`restaurant` WHERE plats.idR=restaurant.id";
        $query=$cnx->sql->query($requette);
		return $query;
    }
    public function edit($id) {
        $cnx = new Connection;
        return $cnx->edit(self::$table,$id);

   }
   public function updateone($id){
       $cnx = new Connection;
       $cnx->update(self::$table,['nom','date','heure','image','prix','prixenc','nmbrplats'],[$this->nom,
       $this->date,
       
       $this->heure,
       $this->image,
       $this->prix,
       $this->prixenc,
       $this->nmbrplats],$id);
   }
   public static function deleteone($id){
    $cnx = new Connection;
    $cnx->delete(self::$table,$id);
}
    public function bestseller(){
        $cnx = new Connection;
        $requette="SELECT * FROM `plats` WHERE nmbrachat >=10";
        $query=$cnx->sql->query($requette);
		return $query;
    }
    public function derniereheure(){
        $cnx = new Connection;
        $requette="SELECT * FROM `plats` WHERE TIMEDIFF(heure, CURRENT_TIME())<=1";
        $query=$cnx->sql->query($requette);
		return $query;
    }
}