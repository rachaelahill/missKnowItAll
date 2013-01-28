<!--  ==================== ADMIN LOGIN ====================	-->		
  <div class="wrapper">
   <?=form_open('login/create_admin', array('class' => 'login-form'));?>
      <h1>sign up</h1>
  		<label>Username:</label>
  		<p><input type="text" name="username" class="post-inpt" /></p>
  		<label>Password:</label>
  		<p><input type="password" name="pass" class="post-inpt" /></p>
  		<p><input type="submit" class="submit-btn" value="Login" /></p>
    </form>
  </div><!-- /wrapper -->