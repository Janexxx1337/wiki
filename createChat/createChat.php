<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (!CModule::IncludeModule('im')) {
    die('Модуль im не установлен');
}

// Создаем экземпляр класса CIMChat
$chat = new CIMChat();

// Добавляем новый чат
$result = $chat->Add([
    "TITLE" => "Новый чат",
    "TYPE" => "C",
    "USERS" => [2,3]
]);

if ($result) {
    echo 'Чат успешно создан с ID: ' . $result;
} else {
    echo 'Произошла ошибка при создании чата';
}
