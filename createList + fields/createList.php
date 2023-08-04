<?php
if(CModule::IncludeModule("iblock")) {
    // Создание нового инфоблока
    $iblock = new CIBlock;
    $arFields = Array(
        "ACTIVE" => 'Y',
        "NAME" => 'Список созданный vovqqqa',
        "CODE" => 'new_list',
        "IBLOCK_TYPE_ID" => 'lists',
        "SITE_ID" => Array("s1"),
        "SORT" => 500,
        "GROUP_ID" => Array("2"=>"R") // Права доступа
    );

    // Проверка на ошибки
    $iblockId = $iblock->Add($arFields);
    if(!$iblockId) {
        echo 'Ошибка: '.$iblock->LAST_ERROR.'<br>';
    } else {
        echo 'Инфоблок успешно создан с ID: '.$iblockId.'<br>';

        // Создание пользовательского поля на основе стандартного поля
        if(CModule::IncludeModule("lists")) {
            $listFieldList = new \CListFieldList($iblockId);

            $field = array(
                "TYPE" => 'L', // Тип поля
                "CODE" => "SPISOK", // Символьный код
                "NAME" => "Список", // Название
                "SORT" => '100',
                "VALUES" => [ // Значения для списочного поля
                    [
                        "VALUE" => "Да"
                    ]
                ],
                "SETTINGS" => [
                    'SHOW_ADD_FORM' => 'Y',
                    'SHOW_EDIT_FORM' => 'Y',
                    'ADD_READ_ONLY_FIELD' => 'N',
                    'EDIT_READ_ONLY_FIELD' => 'N',
                    'SHOW_FIELD_PREVIEW' => 'N',
                ]
            );

            $fieldId = $listFieldList->AddField($field);

            if(!$fieldId) {
                echo 'Ошибка при создании поля<br>';
            } else {
                echo 'Поле успешно создано с ID: '.$fieldId.'<br>';
            }
        }
    }
}
?>
