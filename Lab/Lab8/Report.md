# Практика 8
## MySQL: от файла к базе данных

### Часть A. MySQL — установка и настройка
### 1. Установка MySQL

![systemctl status mysql + mysql --version](screenshots/1.png)

### 2. База данных и пользователь

![SELECT @@character_set_database, @@collation_database;](screenshots/2.png)

### 3. phpMyAdmin

![главная страница phpMyAdmin с базой boardy](screenshots/3.png)

### Часть B. Таблицы и связи
### 4. Три таблицы

![SHOW TABLES;](screenshots/5.png)
![DESCRIBE posts;](screenshots/6.png)
![структура таблицы posts в phpMyAdmin (столбцы, типы, ключи)](screenshots/7.png)

### 5. SQL-скрипт

![содержимое schema.sql](screenshots/8.png)

### Часть C. SQL — базовые операции

### 6. INSERT

![SELECT * FROM users; + SELECT * FROM posts;](screenshots/9.png)
![вкладка «Обзор» таблицы posts в phpMyAdmin](screenshots/10.png)


### 7. SELECT + JOIN

![результат (в CLI или phpMyAdmin → SQL)](screenshots/11.png)
![результат (в CLI или phpMyAdmin → SQL)](screenshots/12.png)

### 8. Foreign Key — защита целостности

![ошибка (Cannot add or update a child row)](screenshots/13.png)

### 9. CASCADE

![результат (COUNT до и после DELETE (CLI или phpMyAdmin)](screenshots/14.png)

### 10. SQL-инъекция

![результат (все пользователи)](screenshots/15.png)

### Часть D. PHP + MySQL
### 11. db.php

![curl -X submit.php](screenshots/16.png)
![содержимое db.php](screenshots/17.png)

### 12. submit.php через MySQL

![отправка формы, «Спасибо»](screenshots/18.png)
![новая запись в posts (phpMyAdmin → posts → Обзор)](screenshots/19.png)

### 13. messages.php через MySQL

![результат (страница с данными из MySQL](screenshots/21.png)

### Часть E. FastAPI + MySQL
### 14. aiomysql

![curl /api/messages и /api/users](screenshots/22.png)

## ```https://github.com/ZloyKobra/web-app-arch/pull/5```
