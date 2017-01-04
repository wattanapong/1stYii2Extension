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
    public function init()
    {
        if ($this->author === null){
			$this->author = self::author;
		}
    }
	
	public function greet($msg){
		return ($this->getOE()==0?"Hello":"Hi").", This is greeting from ".$this->author.".";
	}

    public static function greetStatic(){
		return (self::getOE()==0?"Hello":"Hi").", This is greeting from ".self::author.".";
	}
	
	private function getOE(){
		return rand(0,1);
	}
	
	public static function instance() {
        return new FirstStep();
    }

    public function __call($name, $arguments) {
        if ($name === 'greeting') {
            call_user_func(array($this, 'greet'));
        }
    }

    public static function __callStatic($name, $arguments) {
        if ($name === 'greeting') {
            call_user_func(array('FirstStep', 'greetStatic'), $arguments[0]);
        }
    }
}
