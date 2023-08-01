<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (CModule::IncludeModule('tasks')) {
    $arFields = array(
        "TITLE" => "Новая задача",
        "DESCRIPTION" => "Описание новой задачи",
        "RESPONSIBLE_ID" => 1,  // ID ответственного пользователя
        "CREATED_BY" => 1,      // ID пользователя, создавшего задачу
    );

    $obTask = new CTasks;
    $taskID = $obTask->Add($arFields);

    if (!$taskID) {
        echo 'Ошибка создания задачи: ' . $obTask->GetLastError();
    } else {
        echo 'Задача успешно создана с ID: ' . $taskID;
    }
}
