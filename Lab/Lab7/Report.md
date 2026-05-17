## Задание к отчёту
## PHP-FPM и FastAPI для Boardy

### Часть A. PHP-FPM
### 1. Установка PHP-FPM

![php -v и systemctl status php*-fpm](screenshots/putty_OXkOF18V3C.png)

### 2. Форма и сообщения на PHP

![отправка формы, ответ «Спасибо»](screenshots/browser_vvBtmHvjDy.png)
![messages.php с таблицей (мин. 3 сообщения)]()

### 3. Конфиг Nginx для PHP

![конфиг с fastcgi_pass](screenshots/putty_LK4OOWUFKY.png)

### 4. Shared nothing

![три вызова, каждый раз «Счётчик: 1»](screenshots/putty_zbecqExjgK.png)

### 5. Блокировка воркеров

![время выполнения 10 параллельных запросов](screenshots/putty_o00Ov6LI08.png.png)

### Часть B. FastAPI
### 6. Установка и приложение

![curl .../api/status (JSON)](screenshots/putty_8bcp5tLQsQ.png)
![curl .../api/messages (JSON с данными)](screenshots/putty_zAGvJOtrEY.png)

### 7. Живой процесс (счётчик)

![счётчик растёт: 1, 2, 3](screenshots/putty_K9owaHLZw0.png)

### 8. Async: 10 запросов за 2 секунды

![10 запросов, общее время ~2 сек](screenshots/putty_x3EbVqWswr.png)

### 9. Блокирующий код убивает event loop

![5 запросов, общее время ~10 сек](screenshots/putty_aVE8HYptaF.png)

### 10. Swagger

![Swagger-документация](screenshots/browser_CjBv3We2ED.png)

### 11. systemd-сервис

![systemctl status boardy-api (active)](screenshots/putty_T5PqtK0OjY.png)

### 12. Nginx proxy_pass

![конфиг с proxy_pass](screenshots/putty_1wdwSBxnUL.png)

### Часть C. Сравнение

### 13. Два формата

![HTML vs JSON](screenshots/putty_kD6D4DEWJr.png)

### 14. Процессы

![пул PHP-FPM и один Uvicorn](screenshots/putty_DTdgceigWV.png)
