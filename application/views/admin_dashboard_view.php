<!--  ==================== ADMIN DASHBOARD ====================	-->		
 <div class="post-wrapper">
 	  <ul class="post-itm">
      <? if(isset($posts)) : foreach($posts as $user) :?>	
    	<li class="all-posts">
    	    <? if($user->response == 'yes'){?>
    	      <h2><?=anchor("client/post_detail/$user->id/answered_posts", $user->titleName)?></h2>
    	    <? }else{?> 
    	      <h2><?=anchor("client/post_detail/$user->id/unanswered_posts", $user->titleName)?></h2>
    	    <? }?>  
    	    <? $admin['logged_in'] = $this->session->userdata('logged_in');
      	   if(isset($admin['logged_in']) && $user->response == 'no'){?>
      	     <p class="delete-post"><?=anchor("admin/delete_post/$user->id", 'Remove Post')?></p>
    	    <? }?>
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
        <span class="post-content">	
      	  <p class="dear-txt">Dear Miss Know It All,</p>
      	  <p class="post-txt trunc"><?=$user->postTxt;?></p>
          <p class="user-sign"><?=$user->userSign;?></p>
          <? if($user->response == 'yes'){?>
            <p class="continue-btn"><?=anchor("client/post_detail/$user->id/answered_posts", 'continue reading')?></p>
          <? }else{?>
           <p class="continue-btn"><?=anchor("client/post_detail/$user->id/unanswered_posts", 'continue reading')?></p>
          <? }?> 
        </span><!-- /post-content -->
    	</li><!-- /all-Posts -->	
    	<? endforeach;?>
      <? endif;?>
 	  </ul><!-- /post-itm -->
  </div><!-- /post-wrapper -->