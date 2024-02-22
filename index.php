<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Мой кабинет</title>
</head>
<body>
	
	<main>
		<h1>Мой кабинет</h1>
		<div class="sidebar">
			
				<div class="user-info-bar">
					<div><img src="images/smile.png" alt="Что-то пошло не так"></div>
					<p>Михаил Мингалёв</p>
					<p id="buyer">Покупатель</p>
				</div>
				<hr>
				<a href="#">
					<div class="side-bar-list">Мой профиль</div>
				</a>
				<hr>
				<a href="#">
					<div class="side-bar-list">Statut club</div>
				</a>
				<hr>
				<a href="#">
					<div class="side-bar-list">Заказы</div>
				</a>
				<hr>
				<a href="#">
					<div class="side-bar-list">Избранные товары</div>
				</a>
				<hr>
				<a href="#">
					<div class="side-bar-list">Отзывы о товарах</div>
				</a>
				<hr>
				<a href="#">
					<div class="side-bar-list" id="exit">Выход</div>
				</a>
		</div>
		<div class="content">
			<div style="margin-left: 45px;">
				<h2>Мой профиль</h2>
			<div class="divdivych">
				<div class="son-of-divdivych" id="personal-data">Личные данные</div>
				<div class="son-of-divdivych">Адреса доставки</div>
				<div class="son-of-divdivych">Пароль</div>
			</div>
			<br>
			<form action="" method="utf-8">
				<label>
					E-mail <div class="star">*</div> <br>
					<input type="email" name="email" value="emample@mail.ru" required>
				</label><br>
				<br>
				<div>
					<div class="tel-div" style="margin-right: 40px;">
						<label for="tel2">
						Номер телефона <div class="star">*</div>
						<input id="tel1" type="tel" name="tel1" value="+7 000 000-00-00" required>
						</label>
					</div>
					<div class="tel-div">
						<label for="tel2">
						Дополнительный номер
						<input id="tel2" type="tel" name="tel2" value=""></label>
					</div>
				</div>
				<br>
				<label>
					Фамилия <div class="star">*</div> <br>
					<input type="text" name="surname" value="Иванов" required>
				</label><br>
				<br>
				<label>
					Имя <div class="star">*</div> <br>
					<input type="text" name="name" value="Иван" required>
				</label><br>
				<br>
				<label>
					Отчество<br>
					<input type="text" name="last_name" value="Иванович" >
				</label><br>
				<br>
				<label for="day">Дата рождения:</label><br>
				<div class="select-div">
					<select id="day" name="day" class="select1">
    					<option value="1">1</option>
    					<option value="2">2</option>
    					<option value="3">3</option>
    					<option value="4">4</option>
    					<option value="5">5</option>
    					<option value="6">6</option>
    					<option value="7">7</option>
    					<option value="8">8</option>
    					<option value="9">9</option>
    					<option value="10">10</option>
    					<option value="11">11</option>
    					<option value="12">12</option>
    					<option value="13">13</option>
    					<option value="14">14</option>
    					<option value="15">15</option>
    					<option value="16">16</option>
    					<option value="17">17</option>
    					<option value="18">18</option>
    					<option value="19">19</option>
    					<option value="20">20</option>
    					<option value="21">21</option>
    					<option value="22">22</option>
    					<option value="23">23</option>
    					<option value="24">24</option>
    					<option value="25">25</option>
    					<option value="26">26</option>
    					<option value="27">27</option>
    					<option value="28">28</option>
    					<option value="29">29</option>
    					<option value="30">30</option>
    					<option value="31">31</option>
 				 	</select>
 				 	<select id="month" name="month" class="select2">
    					<option value="1">Январь</option>
    					<option value="2">Февраль</option>
    					<option value="3">Март</option>
    					<option value="4">Апрель</option>
    					<option value="5">Май</option>
    					<option value="6">Июнь</option>
    					<option value="7">Июль</option>
    					<option value="8">Август</option>
    					<option value="9">Сентябрь</option>
    					<option value="10">Октябрь</option>
    					<option value="11">Ноябрь</option>
    					<option value="12">Декабрь</option>
 				 	</select>
 				 	<select id="year" name="year" class="select1">
    					<option value="1990">1990</option>
    					<option value="1991">1991</option>
    					<option value="1992">1992</option>
    					<option value="1993">1993</option>
    					<option value="1994">1994</option>
    					<option value="1995">1995</option>
    					<option value="1996">1996</option>
    					<option value="1997">1997</option>
    					<option value="1998">1998</option>
    					<option value="1999">1999</option>
    					<option value="2001">2001</option>
    					<option value="2002">2002</option>
    					<option value="2003">2003</option>
    					<option value="2004">2004</option>
    					<option value="2005">2005</option>
    					<option value="2006">2006</option>
    					<option value="2007">2007</option>
    					<option value="2008">2008</option>
    					<option value="2009">2009</option>
    					<option value="2010">2010</option>
    					<option value="2011">2011</option>
    					<option value="2012">2012</option>
    					<option value="2013">2013</option>
    					<option value="2014">2014</option>
    					<option value="2015">2015</option>
    					<option value="2016">2016</option>
    					<option value="2017">2017</option>
    					<option value="2018">2018</option>
    					<option value="2019">2019</option>
    					<option value="2020">2020</option>
    					<option value="2021">2021</option>
    					<option value="2022">2022</option>
    					<option value="2023">2023</option>
    					<option value="2024">2024</option>
 				 	</select>
				</div><br>
				<label for="male">Пол</label><br>

				<div class="rb-div">
					<input type="radio" name="gender" id="male" value="male" checked>
					<label for="male" class="rb-label" style="margin-right: 10px;"><p class="gender-text">Мужской</p></label>

					<input type="radio" name="gender" id="female" value="female">
					<label for="female" class="rb-label"><p class="gender-text">Женский</p></label>
				</div>
				<br>
				<input type="submit" name="submit" value="Сохранить изменения">

			</div>
			
			</form>
		</div>
	</main>
</body>
</html>