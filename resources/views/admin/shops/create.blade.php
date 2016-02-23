<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Add new shop</div>
                
                <form action="{{ action("ShopController@store") }}" method="post">
                    <input type="text" name="name">

                </form>
            </div>
        </div>
    </body>
</html>
