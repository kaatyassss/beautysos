# Документация к приложению BeautySOS

## Содержание
1. [Введение](#введение)
2. [Функции](#функции)
3. [Установка](#установка)
4. [Использование](#использование)
5. [Участие в разработке](#участие-в-разработке)
6. [Лицензия](#лицензия)
7. [Контакты](#контакты)

## Введение
**BeautySOS** — это виртуальный помощник, разработанный для подбора косметики, подходящей вашему типу кожи, предпочтениям и потребностям. Он использует обширную базу данных косметических продуктов, отзывы пользователей и продвинутые алгоритмы рекомендаций, чтобы предоставить персонализированные советы.

## Функции
- **Персонализированные рекомендации**: Получайте советы по выбору продуктов, исходя из вашего типа кожи и предпочтений.
- **Обширная база данных**: Доступ к обширной коллекции косметических продуктов и отзывов пользователей.
- **Ссылки на продукты**: Получайте ссылки на продукты на самые популярные маркетплейсы.

## Установка
Чтобы установить и запустить BeautySOS на вашем локальном компьютере, выполните следующие шаги:

### Требования
- [Open Server Panel](https://ospanel.io/)
- PHP версии 7.4 или выше
- MySQL

### Шаги
1. **Клонируйте репозиторий**
    ```sh
    git clone https://github.com/kaatyassss/beautysos.git
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
   - Откройте файл `.htaccess` и настройте параметры кодировки:
   
    ```sh
    AddDefaultCharset UTF-8
    ```

6. **Импортируйте базу данных**
   - Импортируйте файл базы данных [products.sql](products.sql) через phpMyAdmin в созданную базу данных `beautysos`.

## Использование
После установки вы можете начать использовать BeautySOS следующим образом:

1. **Запустите Open Server Panel**
   - Убедитесь, что Open Server Panel работает, и перейдите по адресу [http://localhost/beautysos](http://localhost/beautysos) в вашем браузере.

2. **Пройдите опрос**
   - Введите информацию о вашем типе кожи, предпочтениях и ценовом сегменте.

3. **Изучите подобранные средства**
   - Просматривайте подобранные Вам средства, переходите на маркетплейсы и заказывайте нужные продукты.

## Участие в разработке
Мы приветствуем участие в разработке BeautySOS! Для этого выполните следующие шаги:

1. **Сделайте форк репозитория**
2. **Создайте новую ветку**

    ```sh
    git checkout -b feature-branch
    ```
4. **Внесите изменения**
5. **Создайте пулл-реквест (Pull Request)**

## Лицензия
Этот проект лицензируется под лицензией MIT. Подробнее см. [LICENSE](LICENSE).

## Контакты
Если у вас есть вопросы или предложения, свяжитесь с нами:

- Электронная почта: support@beautysos.com
- ВКонтакте: https://vk.com/kaatyassss, https://vk.com/darisha_10
