# Finance service 💸
**Название проекта:** Финансовый сервис

**Разработчик:** Фролова Арина

>Мудрый человек держит деньги в голове, но не в сердце. 
<br> (c) Jonathan Swift 

**Суть проекта:** 
    
Данный сервис помогает держать ваши финансы не только в голове, но и в удобной компьютерной системе, связанной с базой данных, что позволяет не потерять ни единой суммы из расчетов. Сервис предлагает работу со списком ваших доходов и расходов по определенным категориям и временным промежуткам, позволяя уточнять ваши финансовые возможности.

## **Руководство пользователя:** ##

### **До запуска** ###

После установки проекта необходимо открыть файл `index.php`, раскомментировать строки, приведенные ниже и вписать ваш хост, название базы данных, имя пользователя и пароль от него.
```php
//const HOST = 'localhost';
//const DBNAME = '';
//const USERNAME='root';
//const PASSWORD='';
```
Запускаем проект через файл `main_page.php`
### **После запуска** ###
![Главная страница для неавторизованных пользователей](https://i.postimg.cc/KYz1wXvX/mtCBGcoY.jpg)

Для работы с таблицами и записями в них необходимо авторизоваться. Сделать вы это можете, нажав на подсвеченный текст в главном меню или через кнопки в правом верхнем углу.

![Страница регистрации](https://i.postimg.cc/DykBT6Xp/N8jwogK9.jpg)

Обратите внимание `логин и e-mail у каждого пользователя должен отличаться`

![Страница регистрации](https://i.postimg.cc/1trH9nNn/hKnUJgWd.jpg)

После первого запуска проекта все таблицы ваших доходов и расходов будут пусты. Чтобы это исправить, заходим в пункт меню в верхней части экрана `Расходы / Доходы`, в разделе `Настройка`, справа от таблицы, нажимаем на кнопку `Добавить в список`.

![Страница добавлнния прибыли](https://i.postimg.cc/BZw1b4G6/photo-6031743305206837148-m.jpg)

Попадаем на новую страницу, где в полях вводим название нашей прибыли/траты, выбираем нужную категорию, вводим стоимость и выбираем дату. После нажимаем `Отправить`.

После отправки данных в бд вы будете перенаправлены на страницу, на которой уже будут внесены новые данные.

`Не волнуйтесь, другие пользователи не увидят ваших записей`

Для выхода из учетной записи воспользуйтесь кнопкой `Выход` в правой верхней части экрана.

![Главная страница для авторизованных пользователей](https://i.postimg.cc/wM7X5tZr/LWuhXcOe.jpg)


**Удачного пользования** 



