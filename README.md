# Документация к приложению BeautySOS

## Содержание
1. [Введение](#введение)
2. [Функции](#функции)
3. [Установка](#установка)
4. [Использование](#использование)
5. [Настройка](#настройка)
6. [Участие в разработке](#участие-в-разработке)
7. [Лицензия](#лицензия)
8. [Контакты](#контакты)

## Введение
**BeautySOS** — это интеллектуальный помощник, разработанный для подбора косметики, подходящей вашему типу кожи, предпочтениям и потребностям. Он использует обширную базу данных косметических продуктов, отзывы пользователей и продвинутые алгоритмы рекомендаций, чтобы предоставить персонализированные советы.

## Функции
- **Персонализированные рекомендации**: Получайте советы по выбору продуктов, исходя из вашего типа кожи и предпочтений.
- **Обширная база данных**: Доступ к обширной коллекции косметических продуктов и отзывов пользователей.
- **Анализ кожи**: Используйте инструмент анализа кожи, чтобы лучше понять потребности вашей кожи.
- **Отзывы и рейтинги**: Читайте и оставляйте отзывы о различных продуктах.
- **Сравнение продуктов**: Сравнивайте разные продукты друг с другом.

## Установка
Чтобы установить и запустить BeautySOS на вашем локальном компьютере, выполните следующие шаги:

### Требования
- [Open Server Panel](https://ospanel.io/)
- PHP версии 7.4 или выше
- MySQL

### Шаги
1. **Клонируйте репозиторий**
    ```sh
    git clone https://github.com/yourusername/BeautySOS.git
    ```

2. **Перейдите в каталог проекта**
    ```sh
    cd BeautySOS
    ```

3. **Настройка Open Server Panel**
   - Убедитесь, что Open Server Panel установлен и запущен.
   - Скопируйте файлы проекта в директорию, используемую вашим Open Server Panel (например, `C:\OSPanel\domains\beautysos`).

4. **Создайте базу данных**
   - Откройте phpMyAdmin через Open Server Panel.
   - Создайте новую базу данных с именем `beautysos`.

5. **Настройте файл конфигурации**
   - Переименуйте файл `.env.example` в `.env`.
   - Откройте файл `.env` и настройте параметры подключения к базе данных:
    ```env
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=beautysos
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. **Импортируйте базу данных**
   - Импортируйте файл базы данных (например, `database.sql`) через phpMyAdmin в созданную базу данных `beautysos`.

## Использование
После установки вы можете начать использовать BeautySOS следующим образом:

1. **Запустите Open Server Panel**
   - Убедитесь, что Open Server Panel работает, и перейдите по адресу [http://localhost/beautysos](http://localhost/beautysos) в вашем браузере.

2. **Регистрация и вход**
   - Создайте новый аккаунт или войдите с существующими данными.

3. **Настройка профиля**
   - Введите информацию о вашем типе кожи, предпочтениях и любых специфических потребностях.

4. **Изучение продуктов**
   - Просматривайте базу данных косметических продуктов, читайте отзывы и получайте рекомендации.

5. **Анализ кожи**
   - Используйте инструмент анализа кожи, чтобы получить информацию о состоянии вашей кожи и получить индивидуальные рекомендации по продуктам.

6. **Написание отзывов**
   - Делитесь своим опытом использования различных продуктов, оставляя отзывы и ставя оценки.

## Настройка
Вы можете настроить BeautySOS для своих нужд, изменив файл конфигурации `.env`.

### Файл конфигурации: `.env`
```env
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=beautysos
DB_USERNAME=root
DB_PASSWORD=