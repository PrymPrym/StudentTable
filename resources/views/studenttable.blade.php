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
						<tr>Таблица данных о студентах</tr>                    
                    </thead>
                    <tbody>
                    	<tr><td>
								<form method='POST' action='/students/sort'>
									@csrf
									<input type='hidden' name='indexSort' value='0'>
									<button type='submit'>Имя</button>				
								</form>							
							</td>
							<td>
								<form method='POST' action='/students/sort'>
									@csrf
									<input type='hidden' name='indexSort' value='1'>
									<button type='submit'>Отчество</button>				
								</form>
							</td>
							<td>
								<form method='POST' action='/students/sort'>
									@csrf
									<input type='hidden' name='indexSort' value='2'>
									<button type='submit'>Фамилия</button>				
								</form>
							</td>
							<td>
								<form method='POST' action='/students/sort'>
									@csrf
									<input type='hidden' name='indexSort' value='3'>
									<button type='submit'>Дата рождения</button>				
								</form>
							</td>
							<td>
								<form method='POST' action='/students/sort'>
									@csrf
									<input type='hidden' name='indexSort' value='4'>
									<button type='submit'>Математика</button>				
								</form>
							</td>
							<td>
								<form method='POST' action='/students/sort'>
									@csrf
									<input type='hidden' name='indexSort' value='5'>
									<button type='submit'>Физика</button>				
								</form>
							</td>
							<td>
								<form method='POST' action='/students/sort'>
									@csrf
									<input type='hidden' name='indexSort' value='6'>
									<button type='submit'>Геометрия</button>				
								</form>
							</td>
							<td>
								<form method='POST' action='/students/sort'>
									@csrf
									<input type='hidden' name='indexSort' value='7'>
									<button type='submit'>Музыка</button>				
								</form>
							</td>
							<td>
								<form method='POST' action='/students/sort'>
									@csrf
									<input type='hidden' name='indexSort' value='8'>
									<button type='submit'>Рисование</button>				
								</form>
							</td><td>Операция</td></tr>    
						@foreach ($students as $student)
                    	<tr><td>{{ $student->name}}</td><td>{{ $student->patronymic}}</td><td>{{ $student->surname}}</td><td>{{ $student->birthdata}}</td><td>{{ $student->math}}</td><td>{{ $student->physics}}</td><td>{{ $student->geometry}}</td><td>{{ $student->music}}</td><td>{{ $student->painting}}</td><td><a href='/students/edit/{{ $student->id}}'>Редактировать запись</a></td></tr>    
                    	@endforeach
                    </tbody>
                    </table>
                </div>
                <br>
                <br>
                <a href='/students/add'>Добавить запись</a>
                <br>
                <br>
               	<form method='POST' action='/students/find'>				
					@csrf
					<table>
					<tr>
						<td><input type='text' name='searchdata' placeholder=''required></td>
						<td>
							<select name="fieldname" required>
								 <option value="">Выберите в какой категории искать</option>
								 <option value="patronymic">Отчество</option>
								 <option value="name">Имя</option>
								 <option value="surname">Фамилия</option>
								 <option value="birthdata">Дата рождения</option>
								 <option value="math">математика</option>
								 <option value="physics">физика</option>
								 <option value="geometry">геометрия</option>
								 <option value="music">музыка</option>
								 <option value="painting">рисование</option>						
							</select>						
						</td>						
						<td><button type='submit'>Найти запись в БД</button></td>
					</tr>	
					</table>					
			    </form
            </div>
        </div>
    </body>
</html>
