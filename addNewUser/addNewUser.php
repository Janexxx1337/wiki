<?php
use Bitrix\Main\UserTable;

$result = UserTable::add([
    'LOGIN' => 'new_user',
    'PASSWORD' => 'password',
    'EMAIL' => 'new_user@example.com',
    'ACTIVE' => 'Y'
]);

if ($result->isSuccess()) {
    echo "User was successfully added. New user ID: {$result->getId()}.\n";
} else {
    echo "Error: " . implode(', ', $result->getErrorMessages()) . "\n";
}
