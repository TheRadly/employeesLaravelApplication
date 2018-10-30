<p align="center"><img src="https://i.work.ua/employer_design/8/0/1/117801_company_logo_5.png"></p>
    <span>Employeers Laravel Test</span>
<p align="center">
 ## About the application (О приложении)
@@ -10,32 +9,32 @@
## Install (Установка)
 1. Download the application in .zip archive, or make git clone (Скачать приложение в .zip архиве, либо сделать git clone) - https://github.com/TheRadly/employeesLaravelApplication.git
2. Enter in the console at the root of the application (Ввести в консоли в корне приложения) - `**composer update**`
2. Enter in the console at the root of the application (Ввести в консоли в корне приложения) - **`composer update`**
3. Write the path to the Database in the **.env** file (Прописать путь к Базе Данных в файле **.env**)
4. Create a database called (Создайте базу данных, которая называется) (!!required!!) - `**employee**`
5. Write in the console in the root of the application (Пропишите в консоли в корне приложения) - `**php artisan migrate**` and `**php artisan db:seed**`
4. Create a database called (Создайте базу данных, которая называется) (!!required!!) - **`employee`**
5. Write in the console in the root of the application (Пропишите в консоли в корне приложения) - **`php artisan migrate`** and **`php artisan db:seed`**
 Complete!
**Complete!**
 ## Run application (Запуск приложения)
 Write in the console in the root of the application (Пропишите в консоли в корне приложения) - `**php artisan serve**` or `**npm start**` (To choose)
Write in the console in the root of the application (Пропишите в консоли в корне приложения) - **`php artisan serve`** or **`npm start`** (To choose)
 
## About the test task (О задании)
 Часть​ ​No1​ ​(обязательная)
Создайте веб страницу, которая будет выводить иерархию сотрудников в
1. Создайте веб страницу, которая будет выводить иерархию сотрудников в
древовидной ​форме.
● Информация о каждом сотруднике должна храниться в базе данных и
2. Информация о каждом сотруднике должна храниться в базе данных и
содержать ​следующие ​данные:
○ ФИО;
○ Должность;
○ Дата ​приема ​на ​работу;
○ Размер ​заработной ​платы;
● У ​каждого ​сотрудника ​есть ​1 ​начальник;
● База данных должна содержать не менее 50 000 сотрудников и 5 уровней
2.1 ФИО;
2.2 Должность;
2.3 Дата ​приема ​на ​работу;
2.4 Размер ​заработной ​платы;
2.5 У ​каждого ​сотрудника ​есть ​1 ​начальник;
8. База данных должна содержать не менее 50 000 сотрудников и 5 уровней
иерархий.
● Не ​забудьте ​отобразить ​должность ​сотрудника.
9. Не ​забудьте ​отобразить ​должность ​сотрудника. - **Complete**
 Часть​ ​No2​ ​(опциональная)
1. Создайте ​базу ​данных ​используя ​миграции ​Laravel ​/ ​Symfony. - **Complete**
 2. Используйте ​Laravel ​/ ​Symfony ​seeder ​для ​заполнения ​базы ​данных. - **Complete**
 3. Используйте ​Twitter ​Bootstrap ​для ​создания ​базовых ​стилей ​Вашей ​страницы. - **Complete**
 4. Создайте еще одну страницу и выведите на ней список сотрудников со всей 
 имеющейся о сотруднике информацией из базы данных и возможностью
 сортировать ​по ​любому ​полю. - **Complete**
 5. Добавьте возможность поиска сотрудников по любому полю для страницы
 созданной ​в ​задаче ​4. - **Complete**
 6. Добавьте возможность сортировать (и искать если Вы выполнили задачу No5)
 по ​любому ​полю ​без ​перезагрузки ​страницы, ​например ​используя ​ajax. - **Complete**
 7. Используя стандартные функции Laravel / Symfony, осуществите 
 аутентификацию пользователя для раздела веб сайта доступного только для
 зарегистрированных ​пользователей. - **Complete**
 8. Перенесите функционал разработанный в задачах 4, 5 и 6 (используя ajax
 запросы) ​в ​раздел ​доступный ​только ​для ​зарегистрированных ​пользователей. - **Complete**
 9. В разделе доступном только для зарегистрированных пользователей,
 реализуйте остальные CRUD операции для записей сотрудников. Пожалуйста
 заметьте, что все поля касающиеся пользователей должны быть
 редактируемыми, ​включая ​начальника ​каждого ​сотрудника. - **Complete**
 10. Осуществите возможность загружать фотографию сотрудника и отобразите ее
 на странице, где можно редактировать данные о сотрудник. Добавьте
 дополнительную колонку с уменьшенной фотографией сотрудника на
 странице ​списка ​всех ​сотрудников. - **Complete**
 11. Осуществите возможность перераспределения сотрудников в случае
 изменения начальника (бонусом может быть то, что вы сможете это
 осуществить с применением встроенных механизмов/парадигм, предлагаемых
 Laravel ​/ ​Symfony ​ORM). - **Complete**
 12. Реализуйте ленивую загрузку для дерева сотрудников. Например, показывайте
 первые два уровня иерархии по умолчанию и подгружайте 2 следующих
 уровня ​или ​всю ​ветку ​дерева ​при ​клике ​на ​сотрудника ​второго ​уровня. - **Complete**
 13. Реализуйте возможность менять начальника сотрудника используя drag-n-drop
 сразу ​в ​дереве ​сотрудников. - **Non-Complete**
 14. Создайте структуру базы данных используя MySQL Workbench (не забудьте
 закомитить проект MySQL Workbench в git) и сгенерируйте файл(ы) миграций с
 помощью Laravel / Symfony из существующей БД MySQL, или прямо из файла
 проекта ​MySQL ​Workbench.  - **Non-Complete**
