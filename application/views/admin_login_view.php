<!--  ==================== ADMIN LOGIN ====================	-->		
  <div class="wrapper">
   <?=form_open('admin/admin_login', array('class' => 'login-form'));?>
      <h1>Admin Login</h1>
  		<label>Username:</label>
  		<p><input type="text" name="usernameInpt" class="post-inpt" /></p>
  		<label>Password:</label>
  		<p><input type="password" name="passInpt" class="post-inpt" /></p>
  		<p><input type="submit" class="submit-btn" value="Login" /></p>
    </form>
  </div><!-- /wrapper -->