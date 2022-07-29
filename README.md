## Web Routes

Route - /users/{id} <br>
Method - GET <br>
Description - To show user comment section page.

Route - /users/{id}/comments <br>
Method - POST <br>
Description - To create a user comment.
### Parameters
- user_id (numeric, required)
- comments (string, required)
- password (string, required)


## Command
- php artisan comment:create {user_id} {command}
<br>
Description - Create a user comment with a terminal command.
<br>
- user_id - numeric, required.
- comment - string, required.
