# Практическая работа №1
## Основы командной строки Linux

![Описание](screenshots/picture.png)

### 1. Создание ВМ

![Параметры виртуальной машины в процессе создания](screenshots/01-vm-settings.png)
![Командная строка Ubuntu после установки с приглашением](screenshots/02-vm-console.png)

### 2. Информация о системе

![Вывод: cat ~/report/01-system.txt](screenshots/03-system-info.png)

### 3. Сеть: IP-адрес и открытые порты

![Вывод ip addr show](screenshots/04-ip-addr.png)
![Вывод sudo ss -tlnp](screenshots/05-ports.png)

### 4. Сервис SSH

![Вывод sudo systemctl status ssh](screenshots/06-ssh-status.png)
![Вывод sudo ss -tlnp | grep ssh](screenshots/07-ssh-port.png)

### 5. Пользователи и группы

![Вывод grep '/bin/bash' /etc/passwd](screenshots/08-users.png)
![Процесс создания пользователя boardy](screenshots/09-new-user.png)
![Вывод id boardy](screenshots/10-user-check.png)

### 6. Дерево каталогов

![Вывод ls -la /](screenshots/11-root-tree.png)
![Вывод ls -la ~](screenshots/12-home-tree.png)

### 7. Права доступа

![Вывод ls -ld / /etc /var /tmp /home](screenshots/13-permissions.png)
![Три состояния testfile.txt (до, после chmod 755, после chmod 600)](screenshots/14-chmod.png)

### 8. Установленные пакеты и сервисы

![Вывод dpkg -l | grep -E 'openssh|python|git|curl|vim|nano'](screenshots/15-packages.png)
На скриншоте без python, потому что слишком много библиотек скачано

![Вывод systemctl list-units --type=service --state=running](screenshots/16-services.png)

### 9. Конвейер и перенаправление

![Вывод ps aux --sort=-%mem | head -11](screenshots/17-top-processes.png)
![Вывод подсчёта процессов по пользователям](screenshots/18-process-count.png)
![Вывод топ-10 больших файлов в /var](screenshots/19-big-files.png)

### 10. Итоговый файл

![Вывод ls -lh ~/report/ со всеми файлами](screenshots/20-report-files.png)
