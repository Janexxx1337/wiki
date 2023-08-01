<?php
// Подключение модуля
if(CModule::IncludeModule("iblock")) {

    // Создание нового инфоблока
    $iblock = new CIBlock;
    $arFields = Array(
        "ACTIVE" => 'Y',
        "NAME" => 'Новый список',
        "CODE" => 'new_list',
        "IBLOCK_TYPE_ID" => 'lists',
        "SITE_ID" => Array("s1"),
        "SORT" => 500,
        "GROUP_ID" => Array("2"=>"R") // Права доступа
    );

    // Проверка на ошибки
    $ID = $iblock->Add($arFields);
    if(!$ID) {
        echo 'Ошибка: '.$iblock->LAST_ERROR.'<br>';
    } else {
        echo 'Инфоблок успешно создан с ID: '.$ID;
    }
}
