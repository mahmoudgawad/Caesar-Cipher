# Caesar Cipher
> Encryption, Decryption And Brute Force

this program is built to encrypt and decrypt message using Caesar Cipher with specific number of shifts from 0 to 25, this program capable of determining each letter sensitivity and either encrypt or decrypt it in the same case, it also uses brute force attack to try all possible 25 shifts, it uses only one function to encrypt and decrypt messages

![caesar](https://user-images.githubusercontent.com/27032703/28717815-91eac4e6-73a3-11e7-83e9-84421ffcc7cf.jpg)

## Code Examples

```php

// make new object
$caesar = new CaesarCipher();

// encrypt message
echo $caesar->EncryptOrDecrypt('Hello World', 3, "ENCRYPT");

// decrypt message ($message, $shifts, $type)
echo $caesar->EncryptOrDecrypt('Khoor Zruog', 3, "DECRYPT");

// brute force decryption ($message)
var_dump($caesar->BruteForce('Khoor Zruog'));

```

## License

Copyright 2017 Mahmoud Abdelgawad 

