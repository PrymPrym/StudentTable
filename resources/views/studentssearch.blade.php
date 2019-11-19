<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            tr,td {
				border:1px solid green;
				padding:10px;				
				}
        </style>
    </head>
    <body>
        <div>
            <div class="content">
                <div class="links">
                    <table>
                    <thead>
						<tr>Результаты поиска</tr>                    
                    </thead>
                    <tbody>
                    	<tr><td>Имя</td><td>Отчество</td><td>Фамилия</td><td>Дата рождения</td><td>Математика</td><td>Физика</td><td>Геометрия</td><td>Музыка</td><td>Рисование</button></td><td>Операция</td></tr>    
						@foreach ($students as $student)
                    	<tr><td>{{ $student->name}}</td><td>{{ $student->patronymic}}</td><td>{{ $student->surname}}</td><td>{{ $student->birthdata}}</td><td>{{ $student->math}}</td><td>{{ $student->physics}}</td><td>{{ $student->geometry}}</td><td>{{ $student->music}}</td><td>{{ $student->painting}}</td><td><a href='/students/edit/{{ $student->id}}'>Редактировать запись</a></td></tr>    
                    	@endforeach
                    </tbody>
                    </table>
                </div>
                <br>
                <br>
                <a href='/students'>Перейти на главную страницу</a>
                <br>
                <br>
            </div>
        </div>
    </body>
</html>
