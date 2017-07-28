<?php
	require 'caesarCipher.php';


	// make new object
	$caesar = new CaesarCipher();

	// encrypt message ($message, $shifts, $type)
	echo $caesar->EncryptOrDecrypt('Hello World', 3, "ENCRYPT");

	// decrypt message ($message, $shifts, $type)
	echo $caesar->EncryptOrDecrypt('Khoor Zruog', 3, "DECRYPT");

	// brute force decryption (message)
	var_dump($caesar->BruteForce('Khoor Zruog'));

?>