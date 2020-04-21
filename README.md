# Meretskov - the simplest ICQ bot in PHP, for posting random ideas from photosession.tips in ICQ
Мерецков - простейший ICQ бот на PHP, для постинга в ICQ случайных идей из photosession.tips

The principle of operation is simple. When you open the file, a request is made to the site photosession.tips, in response comes a randomly selected idea and an illustration for it. Next, a record is formed and sent to ICQ, the group you specified.
>Принцип работы прост. При открытии файла, делается запрос на сайт photosession.tips, в ответ приходит случайным образом выбранная идея и иллюстрация к ней. Далее формируется запись и отправляется в ICQ,  указанную вами группу.  

![Meretskov](https://github.com/blyamur/Photosession.tips-ICQ-Bot-PHP/blob/master/readme/scheme.png)

 

Launching can be done either manually or on a schedule via Cron
>Запуск можно производить как вручную, так и по расписанию через Cron

### photosession.tips
Photosession.tips API Description \ Описание API Photosession.tips: [https://photosession.tips/page/api/](https://photosession.tips/page/api/)
Key receipt \ Получение ключа: [https://photosession.tips/open_api/](https://photosession.tips/open_api/)

### ICQ 
ICQ API Description \ Описание API ICQ: [https://icq.com/botapi/](https://icq.com/botapi/) 
Key receipt \ Получение ключа:[https://icq.com/botapi/botTutorial.html](https://icq.com/botapi/botTutorial.html) 

The author does not pretend to be correct code, its purity, etc. This example is laid out as an example of the possibility of collaboration between photosession.tips and ICQ
>Автор не претендует на правильность кода, его чистоту и пр. Данный пример выложен в качестве иллюстрации примера возможности совместной работы сайта photosession.tips и ICQ
