<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Crm\Service;
use Bitrix\Main\Loader;

// Проверка наличия и подключение модуля CRM
if (!Loader::includeModule('crm')) {
    die('Модуль CRM не установлен');
}

// Получение контейнера сервисов CRM
$container = Service\Container::getInstance();

// Получение класса данных для типов динамических сущностей
$typeDataClass = $container->getDynamicTypeDataClass();

// Создание нового типа динамической сущности
$type = $typeDataClass::createObject();

// Установка параметров для нового типа динамической сущности
$type->set('NAME', 'NDA') // Название
->set('TABLE_NAME', 'tbl_nda') // Имя таблицы
->set('TITLE', 'NDA') // Заголовок
->set('CODE', 'NDA') // Символьный код.
->set('IS_USE_IN_USERFIELD_ENABLED', 'Y'); // Флаг, разрешающий использование пользовательских полей.

// Сохранение нового типа динамической сущности и получение результата
$result = $type->save();

// Проверка результата сохранения
if ($result->isSuccess()) {
    echo 'Новый тип динамической сущности успешно сохранен';
} else {
    // Выводим все ошибки, которые произошли при сохранении
    $errors = $result->getErrorMessages();
    foreach ($errors as $error) {
        echo 'Ошибка: ' . $error . "\n";
    }
}
