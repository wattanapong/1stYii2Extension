<?php
 /**
   * First Extension
   *
   * Testing first extension creation.
   *
   * @package    wattanapong.su
   * @subpackage first extension 
   * @author     Wattanapong Suttapak <wattanapong.su@up.ac.th>
   */
namespace wattanapong.su\FirstStep;

use Yii;

class FirstStep{

	private $author = "Wattanapong Suttapak";
    public function init()
    {
        
    }

    public function greeting($msg){
		return ($this->getOE()==0?"Hello":"Hi").", This is greeting from ".$this->author.".";
	}
	
	private function getOE(){
		return rand(0,1);
	}
}
