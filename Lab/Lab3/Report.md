# Практическая работа №3
## Nginx, DNS

### Часть А. Nginx

### 1. Установка Nginx

![вывод systemctl status nginx](screenshots/01-nginx-status.png)

### 2. Страница по IP

![«Welcome to nginx!» в браузере](screenshots/02-browser-ip.png)

### 3. curl

![вывод curl -v](screenshots/03-curl.png)

### 4. Директория и права

Сделал на занятии\
![вывод ls -la /var/www/ ДО и ПОСЛЕ chown](screenshots/04-permissions.png)

### 5. Конфигурация Nginx

``listen`` - Указывает порт и адрес, на которых Nginx будет слушать и принимать входящие соединения.\
``root`` - Определяет корневую папку на файловой системе, откуда сервер будет отдавать файлы сайта.\
``server_name`` - Задает имя домена или IP-адрес, по которому сервер будет идентифицировать и обрабатывать запросы.\
``index`` - Устанавливает приоритетный список файлов, которые открываются по умолчанию при обращении к директории.

### Часть B. DNS

### 6. DNS-зона

![панель VK Cloud с созданной зоной](screenshots/05-dns-zone.png)

### 7. A-запись

![A-запись в панели VK Cloud](screenshots/06-a-record.png)

### 8. ping

![вывод ping](screenshots/07-ping.png)

### 8. dig

![вывод dig с подписями](screenshots/08-dig.png)

### 8. dig +trace

![вывод dig +trace](screenshots/09-dig-trace.png)

### 8. Сайт по домену

![страница Nginx в браузере](screenshots/10-browser-domain.png)

### Ссылка на PR: 
``https://github.com/ZloyKobra/web-app-arch/pull/2``
