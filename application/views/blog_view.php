<!--  ==================== BLOG CONTENT ====================	-->	
  <? if(isset($posts)) : foreach($posts as $row) :?>	
	<div class="all-posts">
	    <h2><?=$row->titleName;?></h2>
	  	<div class="ribbon-wrapper">
    		<div class="ribbon-front">
    			<p class="date-posted">January 10, 2013</p>
    		</div>
    		<div class="ribbon-edge-topleft"></div>
    		<div class="ribbon-edge-back-topleft"></div>
    		<div class="ribbon-edge-topright"></div>
    		<div class="ribbon-edge-bottomleft"></div>
    		<div class="ribbon-edge-bottomright"></div>
    		<div class="ribbon-back-left"></div>
    		<div class="ribbon-back-right"></div>
    	</div><!-- /Ribbon -->
    <div class="post-content">	
  	  <p class="dear-txt">Dear Miss Know It All,</p>
  	  <p class="post-txt"><?=$row->postTxt;?></p>
      <p class="user-sign"><?=$row->userSign;?></p>
      <p><?=anchor("client/post_detail/$row->id", 'continue reading')?></p>
    </div><!-- /post-content -->
	</div><!-- /all-Posts -->
	<? endforeach;?>
  <? endif;?>