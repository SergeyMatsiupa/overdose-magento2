<?php
require 'app/bootstrap.php';
require 'app/autoload.php';

use Magento\Framework\App\Bootstrap;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Encryption\EncryptorInterface;

$bootstrap = Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();

/** @var EncryptorInterface $encryptor */
$encryptor = $objectManager->get(EncryptorInterface::class);

$password = 'roni_cost@example.com'; // Replace with the desired password
$hashedPassword = $encryptor->getHash($password, true);

echo "Hashed Password: " . $hashedPassword . PHP_EOL;