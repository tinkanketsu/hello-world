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
                <div class="title">Salon List</div>
                @foreach($shops as $shop)
                <div>{{{ $shop->name }}}</div>
                @endforeach
            </div>
            <a href="{{action("ShopController@create")}}">Add new salon</a>
        </div>
    </body>
</html>
