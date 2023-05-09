1)composer install;
2)npm install;
3)создать файл env
4)скопировать содержимое из файл из env.example в .env
5)запустить миграции -  php artisan migrate
6)запустить сидер - php artisan migrate --seed
5)npm run build;
6) вставить в env ключ APP_KEY или использовать этот - APP_KEY=base64:Gyw5BsNGYkQojf5fO4EETvPYb9iLMIjuaoC9+lLZfro=
7)по умолчанию база laravel

//sider
сидер создаст пользователя :admin@mail.ru,pass - 12345678.s
сидер также создаст рандомные записи в таблицу блог

//окружение
php 8.0.14
laravel 9;
apache 2 4php 8.0
mysql 10.4
