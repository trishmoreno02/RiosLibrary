# Rio's Library

## Installation
**Install PHP.** Yep, that's it. I've already included the dependencies and MySQL itself in this project, so installation would be easier.
However, in case something happens, here's an alternative installation process:

1. Download Composer: https://getcomposer.org/download/
2. On the project directory, run `composer install`
3. Run `php artisan key:generate`


## How to Run
1. Start the MySQL Server using the batch file start_mysql.bat
2. Start the PHP Server using the batch file start_server.bat

For an alternative, you could use your own MySQL instance (if you have installed) and import the database in SQL/library.sql
Another alternative is to copy mysql/data/library folder to your mysql/data folder, if you have MySQL installed. 

3. Enter localhost:8000 on the browser

To close the MySQL Server, run stop_mysql.bat.

For login credentials, you may try: 
Email: trishmoreno@test.com Password: 12345678

You may also log in as admin. go to /admin/login and try:
Email: admin@app.com Password: admin-password

## Limitations
- Admin can only add books. 
- User cannot change his/her password
- Since I only have batch files, you can only run this in Windows. I've provided alternative solutions, however.

### Why use batch files and put MySQL and all these dependencies?
I focused on user experience on this one. Rather than having the user (you) to type stuff and import this and that or install this and that, I'd rather let you do that in a fewer clicks as possible.
(I know putting MySQL isn't advisable, but that's just for the purposes of this exercise)

Please contact me if there are any problems (trishmoreno02@gmail.com).
