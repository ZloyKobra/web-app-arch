# Практическая работа №4
## HTTP, виртуальные хосты, проект Boardy

### Часть А. Виртуальный хост основного сайта

### 1. Директория проекта

![вывод ls -la /var/www/](screenshots/01-directory.png)

### 2. Конфиг виртуального хоста

![](screenshots/02-vhost-config.png)


### Часть B. Страницы проекта

### 3. Лендинг
![](screenshots/03-landing.png)

### 4. Форма обратной связи
![](screenshots/04-form.png)

### 5. Стили и 404
![](screenshots/05-404.png)


### Часть C. Второй виртуальный хост — API

### 6. DNS-запись для поддомена
![](screenshots/06-dns-api.png)

### 7. Проверка DNS
![](screenshots/07-dig-api.png)

### 8. Конфиг и заглушка API
![](screenshots/08-api-config.png)
![](screenshots/09-api-browser.png)


### Часть D. Исследование HTTP

### 9. GET-запрос через curl -v
![](screenshots/10-curl-v.png)

### 10. Виртуальные хосты в действии
![](screenshots/11-vhosts1.png)
![](screenshots/11-vhosts2.png)
![](screenshots/11-vhosts3.png)

### 11. POST-запрос
![](screenshots/12-post-405.png)

### 12. HEAD-запрос
Head - Возвращает только заголовки в html странице\
Get - Возвращает всю разметку включая текст


### Часть E. Логи

### 13. Раздельные логи
![](screenshots/13-logs1.png)
![](screenshots/13-logs2.png)

### 14. Фильтрация логов
![](screenshots/14-log-stats.png)


### Ссылка на PR: 
``https://github.com/ZloyKobra/web-app-arch/pull/4``
