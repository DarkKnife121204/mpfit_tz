# Parsing

## Использование

Для запуска проекта локально выполните следующие шаги:

1. Клонируйте репозиторий:
   ```bash
   git clone https://github.com/DarkKnife121204/mpfit_tz
   ```

2. Откройте файл проекта в PhpStorm

3. Введите команду composer i:
    ```bash
   composer i
   ```

4. Файл .env.example переименуйте в .env
5. Запустите Docker
6. В терминале linux запустите команду для создания sail:
    ```bash
    ./vendor/bin/sail build
    ```
7. Запустите sail
    ```bash
    ./vendor/bin/sail up -d
    ```
8. Выполните миграцию:
    ```bash
    ./vendor/bin/sail artisan migrate:fresh --seed
    ```

## Информация

1. Сайт

http://127.0.0.1/product

