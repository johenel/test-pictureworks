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

## Development Timeline
- User configs (10 mins)
- User web routes/functions + Unit test (15 mins)
- Comment resource backend configs (30 mins)
- Laradock (docker) setup (15 mins) 
- Command to create a user comment (15 mins)
- Front end for user comment section page + comment form (1 hr)
