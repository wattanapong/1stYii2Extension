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
	
    const author = "Wattanapong Suttapak";

    public static function greeting($msg=self::author){
		return (self::getOE()==0?"Hello":"Hi").", This is greeting from ".$msg.".";
	}
	
	private function getOE(){
		return rand(0,1);
	}
}
