<!--  ==================== ADMIN LOGIN ====================	-->		
  <div class="wrapper">
   <?=form_open('login/admin_login', array('class' => 'login-form'));?>
      <h1>Admin Login</h1>
  		<label>Username:</label>
  		<p><input type="text" name="username" data-validate="validate(required)" class="post-inpt" /></p>
  		<label>Password:</label>
  		<p><input type="password" name="pass" data-validate="validate(required)" class="post-inpt" /></p>
  		<p><input type="submit" class="submit-btn" value="Login" /></p>
    </form>
  </div><!-- /wrapper -->