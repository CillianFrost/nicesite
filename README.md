# NiceSite

*This site is making for my portfolio. Graffic design of the dashboard page was taken from <a href="interesnee.ru">Очень Интересно</a> IT-company's test task for new frontend-developers.*

The project works on **Laravel**. Has the limited functionality and working without middleware.

### *If you want to see isolated Frontend sources with gulp, pug and sass you can find it in "Frontend" folder.* 
> Remember that static and dynamic versions can be different.

# How to start

Since you have a server and composer just following these steps:
1. Set the **.env** file to your requirements (mostly only need to change database data);
2. Run **composer update** in cmd to create a vendor folder;
3. Run **php artisan migrate --seed** in cmd to create databases with ready test data.
4. Run **php artisan serve** and go to your localhost to see the site.

## What's not working for now
- Charts
- Sorting tables
- Put up products in store
- Buying
- Middleware
