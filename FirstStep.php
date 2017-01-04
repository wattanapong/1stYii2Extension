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
namespace wattanapong\FirstStep;

use Yii;

class FirstStep{

    public function init()
    {
        if ($author === null){
			$this->author = "Wattanapong Suttapak";
		}
    }

    public static function greeting($msg){
		return ($this->getOE()==0?"Hello":"Hi").", This is greeting from ".$this->author.".";
	}
	
	private function getOE(){
		return rand(0,1);
	}
}
