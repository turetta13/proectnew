@extends ('layout.main')

<title>Sayadova Baker | Аккаунт</title>

@section('header')
@stop

	<!--account-->
@section('content')
	<div class="account">
		<div class="container">
			<div class="register">
				<form> 
					<div class="register-top-grid">
						<h3>Personal information</h3>
						<div class="input">
							<span>First Name<label>*</label></span>
							<input type="text"> 
						</div>
						<div class="input">
							<span>Last Name<label>*</label></span>
							<input type="text"> 
						</div>
						<div class="input">
							<span>Email Address<label>*</label></span>
							<input type="text"> 
						</div>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
						</a>
						<div class="clearfix"> </div>
					</div>
				    <div class="register-bottom-grid">
						<h3>Login information</h3>
						<div class="input">
							<span>Password<label>*</label></span>
							<input type="password">
						</div>
						<div class="input">
							<span>Confirm Password<label>*</label></span>
							<input type="password">
						 </div>
					</div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form>
					   <input type="submit" value="submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
			</div>
	    </div>
	</div>
@stop
	<!--//registerount-->

@section('footer')
@stop

</html>