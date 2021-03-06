<!--  ==================== POST DETAIL RESPONSE ====================	-->		
	<div class="wrapper">
  	<? if(isset($posts)) : foreach($posts as $user) :?>	
  	  <div class="all-posts">
    	   <h2 class="title-detail"><?=$user->titleName;?></h2>
    	   <span class="ribbon-wrapper">
        		<span class="ribbon-front">
        			<p class="date-posted"><?=date("F j, Y", $user->postDate);?></p>
        		</span>
        		<span class="ribbon-edge-topleft"></span>
        		<span class="ribbon-edge-back-topleft"></span>
        		<span class="ribbon-edge-topright"></span>
        		<span class="ribbon-edge-bottomleft"></span>
        		<span class="ribbon-edge-bottomright"></span>
        		<span class="ribbon-back-left"></span>
        		<span class="ribbon-back-right"></span>
        	</span><!-- /Ribbon -->
        	<? $admin['logged_in'] = $this->session->userdata('logged_in');
      	   if(empty($admin['logged_in'])){?>
      	     <div class="fb-wrapper">
        	   <div class="fb-like" data-href="<?=base_url().$this->uri->uri_string();?>" data-send="true" data-layout="button_count" data-show-faces="false"></div>
      	     </div>
        	 <? }?>
        <div class="post-content">
    	    <p class="dear-txt">Dear Miss Know It All,</p>
    	    <p class="post-txt"><?=$user->postTxt;?></p>
    	    <p class="user-sign"><?=$user->userSign;?></p>
        </div><!-- /post-content -->
      <? endforeach ?>
      <? endif ?><!-- /user post conditional -->
      </div><!-- /all-posts -->
      <? if($user->response == 'yes'){?>
        <? if(isset($response)) : foreach($response as $resp) :?>
          <div class="response-content">
            <div class="tucked-corners top-corners">
              <span class="tucked-corners bottom-corners">       
                <h2>Re: <?=$user->titleName;?></h2>
                <? $admin['logged_in'] = $this->session->userdata('logged_in');
        	   if(isset($admin['logged_in']) && $admin['logged_in'] && $user->response == 'yes'){?>
        	     <p class="edit-resp">Edit Reply</p>
      	    <? }?>
          	    <p class="resp-date"><?=date("F j, Y", $resp->respDate);?></p>
          	    <div class="post-content">
            	    <p class="dear-txt">Dear <?=$user->userSign;?>,</p>
            	    <p class="post-txt"><?=$resp->respTxt;?></p>
            	    <p class="sign-resp">Miss Know It All</p>
          	    </div><!-- /post-content -->
              </span><!-- /tucked-corners bottom-corners -->
            </div><!-- /tucked-corners top-corners -->	
          </div><!-- /response-content -->
          <div class="edit-resp-content">
            <div class="tucked-corners top-corners">
            <span class="tucked-corners bottom-corners">   
              <?=form_open('admin/edit_resp', array('class' => 'post-form'));?>
                <h2>Re: <?=$user->titleName;?></h2>
          	    <p class="resp-date"><?=date("F j, Y", $resp->respDate);?></p>
                <div class="post-content">
                  <p class="dear-txt">Dear <?=$user->userSign;?>,</p>
                  <p><textarea required="true" data-validate="validate(minlength(10))" name="postInpt"><?=$resp->respTxt;?></textarea></p>
                  <input type="hidden" name="userId" value="<?=$user->id?>"/>
                  <p><input type="submit"  class="resp-btn" value="Update Advice!" /></p>
                  <p class="cancel-edit">Cancel</p>
                  <p class="sign-resp">Miss Know It All</p>
                </div><!-- /post-content -->
              </form>
            </span><!-- /tucked-corners bottom-corners -->
          </div><!-- /post-content -->
        </div><!-- /edit-resp-content -->
        <? endforeach ?>
        <? endif ?><!-- /admin resp conditional -->
      <? }else{?>
        <div class="tucked-corners top-corners">
          <span class="tucked-corners bottom-corners">   
            <?=form_open('admin/create_resp', array('class' => 'post-form'));?>
              <h2>Re: <?=$user->titleName;?></h2>
              <div class="post-content">
                <p class="dear-txt">Dear <?=$user->userSign;?>,</p>
                <p><textarea name="postInpt" data-validate="validate(minlength(10))" required="true" placeholder="Click here to start adivce..."></textarea></p>
                <input type="hidden" name="userId" value="<?=$user->id?>"
                <p><input type="submit" class="resp-btn" value="Give Advice!" /></p>
                <p class="sign-resp">Miss Know It All</p>
              </div><!-- /post-content -->
            </form>
          </span><!-- /tucked-corners bottom-corners -->
        </div><!-- /post-content -->
      <? }?>
      
	</div>