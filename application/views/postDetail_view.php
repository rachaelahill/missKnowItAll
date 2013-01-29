<!--  ==================== POST DETAIL RESPONSE ====================	-->		
	<div class="wrapper">
  	<? if(isset($posts)) : foreach($posts as $row) :?>	
  	  <div class="all-posts">
    	   <h2 class="title-detail"><?=$row->titleName;?></h2>
    	   <span class="ribbon-wrapper">
        		<span class="ribbon-front">
        			<p class="date-posted"><?=date("F j, Y", $row->postDate);?></p>
        		</span>
        		<span class="ribbon-edge-topleft"></span>
        		<span class="ribbon-edge-back-topleft"></span>
        		<span class="ribbon-edge-topright"></span>
        		<span class="ribbon-edge-bottomleft"></span>
        		<span class="ribbon-edge-bottomright"></span>
        		<span class="ribbon-back-left"></span>
        		<span class="ribbon-back-right"></span>
        	</span><!-- /Ribbon -->
        <div class="post-content">
    	    <p class="dear-txt">Dear Miss Know It All,</p>
    	    <p class="post-txt"><?=$row->postTxt;?></p>
    	    <p class="user-sign"><?=$row->userSign;?></p>
        </div><!-- /post-content -->
        <? endforeach ?>
        <? endif ?><!-- /user post conditional -->
      </div><!-- /all-posts -->
      <? if(isset($response)) : foreach($response as $resp) :?>	
        <div class="tucked-corners top-corners">
          <span class="tucked-corners bottom-corners">       
            <h2>Re: <?=$row->titleName;?></h2>
      	    <p class="resp-date"></p>
      	    <div class="post-content">
        	    <p class="dear-txt">Dear <?=$row->userSign;?>,</p>
        	    <p class="post-txt"><?=$resp->respTxt;?></p>
          	    <p class="sign-resp">Miss Know It All</p>
      	    </div><!-- /post-content -->
          </span><!-- /tucked-corners bottom-corners -->
        </div><!-- /tucked-corners top-corners -->	
      <? endforeach ?>
      <? endif ?><!-- /admin resp conditional -->
	</div>