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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">	
				<form method='POST' action='/students'>
					@csrf
					<table>
					<tr>	
						<td><label>Создание записи нового студента</label></td>
						<td></td>
					</tr>	
					<tr>	
						<td><label>Имя</label></td>
						<td><input type='text' name='name' placeholder='Имя' required></td>
					</tr>	
					<tr>
						<td><label>Отчество</label></td>
						<td><input type='text' name='patronymic' placeholder='Отчество' required></td>
					</tr>
					<tr>
						<td><label>Фамилия </label></td>
						<td><input type='text' name='surname' placeholder='Фамилия' required></td>
					</tr>	
					<tr>
						<td><label>Оценка по математике </label></td>
						<td>
							<select name="math" required>
								 <option value="">Выберите оценку из списка</option>
								 <option value="5">5</option>
								 <option value="4">4</option>
								 <option value="3">3</option>
								 <option value="2">2</option>
								 <option value="1">1</option>						
							</select>
						</td>
					</tr>	
					<tr>
						<td><label>Оценка по физике </label></td>
						<td>
							<select name="physics" required>
								 <option value="">Выберите оценку из списка</option>
								 <option value="5">5</option>
								 <option value="4">4</option>
								 <option value="3">3</option>
								 <option value="2">2</option>
								 <option value="1">1</option>						
							</select>
						</td>
					</tr>	
					<tr>
						<td><label>Оценка по геометрии </label></td>
						<td>
							<select name="geometry" required>
								 <option value="">Выберите оценку из списка</option>
								 <option value="5">5</option>
								 <option value="4">4</option>
								 <option value="3">3</option>
								 <option value="2">2</option>
								 <option value="1">1</option>						
							</select>
						</td>
					</tr>	
					<tr>
						<td><label>Оценка по музыке </label></td>
						<td>
							<select name="music" required>
								 <option value="">Выберите оценку из списка</option>
								 <option value="5">5</option>
								 <option value="4">4</option>
								 <option value="3">3</option>
								 <option value="2">2</option>
								 <option value="1">1</option>						
							</select>
						</td>
					</tr>	
					<tr>
						<td><label>Оценка по рисованию </label></td>
						<td>
							<select name="painting" required>
								 <option value="">Выберите оценку из списка</option>
								 <option value="5">5</option>
								 <option value="4">4</option>
								 <option value="3">3</option>
								 <option value="2">2</option>
								 <option value="1">1</option>						
							</select>
						</td>
					</tr>	
					<tr>
						<td><label>Год рождения </label></td>
						<td><input type='date' name='birthdata' placeholder='дата рождения' required></td>
					</tr>		
					<tr>
						<td><label></label></td>
						<td><button type='submit'>Сохранить  в базе данных</button></td>
					</tr>		
					</table>
				</form>
            </div>
        </div>
    </body>
</html>
