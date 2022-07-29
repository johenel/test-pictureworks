<html lang="en">
    <head>
        <title>User Comment</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Comment Section  - {{ucfirst($user->name)}}</h1>
            <div class="section" style="margin-bottom: 20px;">
                @foreach($user->comments as $comment)
                    <div class="flex flex-row">
                        {{$comment->content}}
                    </div>
                @endforeach
            </div>
            <div class="section">
                <form action="/users/{{$user->id}}/comments" method="POST" class="flex flex-column">
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    @csrf
                    <textarea name="comments" id="" cols="30" rows="10" required style="margin-bottom: 10px;"></textarea>
                    <br>
                    <input type="password" name="password" required style="margin-bottom: 10px;">
                    <br>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
