# Caesar Cipher
> Encryption, Decryption And Brute Force

Caesar Cipher Encryption, this program is built to encrypt and decrypt message using Caesar Cipher with specific number of shifts from 0 to 25, this program capable of determining each letter sensitivity and either encrypt or decrypt it in the same case, it also uses brute force attack to try all possible 25 shifts, it was build with PHP OOP 

![](header.png)

## Code Examples

```php

	// make new object
	$caesar = new CaesarCipher();

	// encrypt message
	echo $caesar->EncryptOrDecrypt('Hello World', 3, "ENCRYPT");

	// decrypt message ($message, $shifts, $type)
	echo $caesar->EncryptOrDecrypt('Khoor Zruog', 3, "DECRYPT");

	// brute force decryption (message)
	var_dump($caesar->BruteForce('Khoor Zruog'));

```

## License

Copyright 2017 Mahmoud Abdelgawad 

