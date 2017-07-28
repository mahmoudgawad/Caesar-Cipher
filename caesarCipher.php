<?php
	
	/**
	 * CaesarCipher
	 * https://github.com/mahmoudgawad/Caesar-Cipher
	 *
	 * Copyright 2017, Mahmoud Abdelgawad
	 * E-Mail : prog.mahmoud96@hotmail.com
	 */

class CaesarCipher
{
	
	private $uAlphabet;    // English Alphabet (UPPERCASE)
	private $lAlphabet;    // English Alphabet (lowercase)

	function __construct()
	{
		$this->uAlphabet = range('A', 'Z');
		$this->lAlphabet = range('a', 'z');
	}

	/**
	*	EncryptOrDecrypt ()
	*   
	*	it encrypts or decrypts messages depends on the third parameter
	*
	* @param $message (string) -> User's Message
	* @param $shift (string) -> User's Number of Shits
	* @param $type (string) -> ENCRYPT || DECRYPT
	*
	* @return $outputMsg (string) -> Encrypted Or Decrypted Message
	*/

	public function EncryptOrDecrypt ($message, $shift, $type = "ENCRYPT")
	{
		
		$shift = ($type == "ENCRYPT") ? $shift : 26 - $shift ;
		$outputMsg = '';

		for ($i = 0; $i < strlen($message); $i++) { 
			if (array_search($message[$i], $this->uAlphabet) !== false) 
			{ // if this character is uppercase character
				$outputMsg .= $this->uAlphabet[($shift + array_search($message[$i], $this->uAlphabet)) % 26]; 
			}
			elseif (array_search($message[$i], $this->lAlphabet) !== false)
			{ // if this character is lowercase character
				$outputMsg .= $this->lAlphabet[($shift + array_search($message[$i], $this->lAlphabet)) % 26];
				
			} else 
			{ // if this character is not an english alphabet characters
				$outputMsg.= $message[$i]; continue;
			}
		}
		return $outputMsg;
	}

	/**
	*	BruteForce ()
	*   
	*	it tries all possible substitution from (0 -> 25)
	*
	* @param $message (string) -> User's Message
	*
	* @return $outputArray (string) -> Decrypted Array of Messages
	*/

	public function BruteForce ($message)
	{
		$outputMsg = '';
		for ($i = 0; $i < count($this->uAlphabet); $i++) { 
			for ($j = 0; $j < strlen($message); $j++) { 
				if (array_search($message[$j], $this->uAlphabet)) 
				{ // if this character is uppercase character
					$outputMsg .= $this->uAlphabet[($i + array_search($message[$j], $this->uAlphabet)) % 26]; 
				}
				elseif (array_search($message[$j], $this->lAlphabet))
				{ // if this character is lowercase character
					$outputMsg .= $this->lAlphabet[($i + array_search($message[$j], $this->lAlphabet)) % 26];
					
				} else 
				{ // if this character is not an english alphabet characters
					$outputMsg.= $message[$j]; continue;
				}
			}
			$outputArray[] = $outputMsg; 
			$outputMsg = '';
		}
		return $outputArray;
	}
}

?>