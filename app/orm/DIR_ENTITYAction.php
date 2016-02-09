<?php 
 
namespace Entity; 
 
use ORM\Entity\Entity; 
 
class Action extends Entity 
{ 
	const TABLE = 'action'; 
	protected $id; 
	protected $ok; 
	protected $ko; 
	protected $test; 

 
	public function __construct() { 
	} 
 

 
	public function setId($id) { 
		$this->id = $id;
	} 
 
	public function getId() { 
		return $this->id;
	} 
 
	public function setOk($ok) { 
		$this->ok = $ok;
	} 
 
	public function getOk() { 
		return $this->ok;
	} 
 
	public function setKo($ko) { 
		$this->ko = $ko;
	} 
 
	public function getKo() { 
		return $this->ko;
	} 
 
	public function setTest($test) { 
		$this->test = $test;
	} 
 
	public function getTest() { 
		return $this->test;
	} 
 
}