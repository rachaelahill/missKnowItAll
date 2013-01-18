<!--  ==================== POSTING CONTENT ====================	-->		
  <div class="wrapper">
    <?=form_open('home/', array('class' => 'post-form'));?>
  		<label>Title:</label>
  		<p><input type="text" name="titleInpt" class="title-inpt" placeholder="Ex: First Post"/></p>
  		<label>Dear Miss Know It All:</label>
  		<p><textarea name="postInpt" class="post-inpt"></textarea></p>
  		<label>Signature:</label>
  		<p><input type="text" name="signInpt" class="sign-inpt" placeholder="Ex: John Smith" /></p>
  		<p class="submit-btn"><input type="submit" name="submit" value="" /></p>
  		<p class="cancel-btn"><?=anchor('home/', 'Cancel')?></p>
    </form>
    <div class="reasons">
      <h1>Get Advice</h1>
      <ul>
        <li>Don’t know what to do about your relationship?</li>
    	  <li>Having issues at school or work?</li>
    	  <li>Situations just not working out the way you thought?</li>
      </ul>
      <p>You don’t have to figure out everything on your own, ask <span>Miss Know It All</span> .</p>
    </div><!-- /reasons -->
  </div><!-- /wrapper -->
</body>
</html>