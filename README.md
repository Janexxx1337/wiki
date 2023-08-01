# wiki

## Развертывание битрикс (образы для виртуальных машин) - 
```
https://www.1c-bitrix.ru/download/vmbitrix.php
```

## Создание элементов смарт процесса – 
```
https://habr.com/ru/companies/otus/articles/740784/
```

## Создание лида через форму – 
```
http://odlord.ru/bitrix24-rest-api-sozdanie-lida-cherez-formu/
```
```
https://dev.1c-bitrix.ru/rest_help/crm/cases/add/form_lead.php
```

## Работа с API Битрикс– 
```
https://nikaverro.ru/blog/bitrix/crm-bitrix24-korobka-api/
```
```
https://dev.1c-bitrix.ru/api_d7/
```

## Дебаг php – 
```
echo "<PRE>";
print_r();
echo "</PRE>";
```

## Новые  Ajax запросы– 
```
https://sergeypanteleev.com/ru/post/bitrix-ajax
```
## Полезные команды для консоли

#### поиск по содержимому файлов - получим список файлов с путями где встречается искомое слово или предложение.
```
grep -rl “что ищем”
```

#### Рекурсивное изменение прав
```
chmod -R 755 /home/bitrix/www/upload/disk
```

#### Владельца для  папок  и фалов что лежат в каталоге 

```
chown -R bitrix:bitrix /home/bitrix/www/upload/disk/
```

### API JS
#### Подписаться на события битрикса (например - рендринг грида или канбана)
```
1.	Идешь \home\bitrix\www\bitrix\js\main\core\core.js
2.	Через поиск ищешь function onCustomEvent
3.	Вставляешь в функцию
        console.log("Name:",eventName);
        console.log("Params:",eventParams);
        console.log("-----------------------");
4.	 Ищешь нужное событие в консоле и подписываешься на него. Как подписаться смотри техдокументацию.

```

