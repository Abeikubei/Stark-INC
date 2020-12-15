<?php 

declare(strict_types=1);

use PHPUnit\Framework\TestCase;


require(dirname(__FILE__))."/../classescontrollers/CCT_controller.php";

 

final class CCT_Test extends TestCase{

	 //Testing Inserting a CCT

	public function testinsert_CCT(){
		$cct =  new CCT_class();
		$this->assertTrue(
			$cct->addCCT('2020-12-14 16:25:00', 'Medium', 'Tema Port')
		);
	}

	 

	 //Testing Viewing all CCTs 

	 public function testViewAllCCTs(){
	 	$cct =  new CCT_class(); 
	 	$this->assertTrue(
	 		$cct->viewCCT()
	 	);
	 }
	 

	 //Testing deleting a CCT

	 public function testDeleteCCT(){
	 	$cct =  new CCT_class(); 
	 	$id=1;  
	 	$this->assertTrue(
	 		$cct->deleteCCT($id)
	 	);
	 }

	 

	 //Testing Updating CCT

	 public function testUpdateCCT(){
	 	$cct =  new CCT_class();
	 	$this->assertTrue(
	 		$cct->updateCCT(1, 'date', 'category', 'port')
	 	);
	 }
}