<div class="container">
	<div class="mt-3 alert alert-danger" id="error" role="alert"></div>
	<div class="mt-3 alert alert-success" id="success" role="alert">Вы успешно зарегистрировались!</div>
	<form class="mt-3">	
		<div class="form-group">
		    <label for="inputFirstName">Имя</label>
		    <input type="text" class="form-control" id="inputFirstName" aria-describedby="emailHelp">
		</div>	
		<div class="form-group">
		    <label for="inputSecondName">Фамилия</label>
		    <input type="text" class="form-control" id="inputSecondName" aria-describedby="emailHelp">
		</div>		
		<div class="form-group">
			<label for="inputEmail">Адрес электронной почты<span class="text-danger">*</span></label>
			<input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
		</div>
		<div class="form-group">
			<label for="inputPassword">Пароль<span class="text-danger">*</span></label>
			<input type="password" class="form-control" id="inputPassword">
		</div>
		<div class="form-group">
			<label for="inputPassword2">Повторите пароль<span class="text-danger">*</span></label>
			<input type="password" class="form-control" id="inputPassword2">
		</div>
		<button type="button" id="reg" class="btn btn-primary">Зарегистрироваться</button>
	</form>
</div>