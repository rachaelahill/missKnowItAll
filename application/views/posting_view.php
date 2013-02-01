<!--  ==================== POSTING CONTENT ====================	-->		
  <div class="form-wrapper">
    <div class="reasons">
      <ul>
        <li>Don’t know what to do about your relationship?</li>
    	  <li>Having issues at school or work?</li>
    	  <li>Situations just not working out the way you thought?</li>
      </ul>
      <p>You don’t have to figure out everything on your own, ask <span>Miss Know It All</span> .</p>
    </div><!-- /reasons -->
    <?=form_open('client/create_post', array('class' => 'post-form'));?>
  		<label>Title:</label>
  		<p><input type="text" name="titleInpt" data-validate="validate(required, maxlength(20))" class="post-inpt" placeholder="Ex: First Post"/></p>
  		<label>Dear Miss Know It All:</label>
  		<p><textarea name="postInpt" data-validate="validate(minlength(10))"  required="true" id="post"></textarea></p>
  		<label>Signature:</label>
  		<p><input type="text" name="signInpt" data-validate="validate(required, maxlength(50)" class="post-inpt" placeholder="Ex: John Smith" /></p>
  		<p><input type="submit" class="submit-btn" value="Get Advice!" /></p>
  		<p class="cancel-btn"><?=anchor('client/', 'Cancel')?></p>
    </form>
  </div><!-- /wrapper -->