<!--  ==================== POST DETAIL CONTENT ====================	-->		
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
      </div><!-- /all-posts -->
      <div class="tucked-corners top-corners">
        <span class="tucked-corners bottom-corners">       
          <h2>Re: <?=$row->titleName;?></h2>
    	    <p class="resp-date">January 13, 2013</p>
    	    <div class="post-content">
      	    <p class="dear-txt">Dear <?=$row->userSign;?>,</p>
      	    <p class="post-txt">Resistance to change is brought about by our inability to accept that the life we had isn’t the life we’ve got now. Any circumstances will always be part of the universal resistance, which means the more we resist, the more we draw those circumstances to us.<br/><br/>
      	        Some of us will worry that because we have to deal with change, we will lose control; but it stands to reason that if we have control before the time we have to change, we’ll have control through change and beyond it. For some, change may interfere with their independence, but for others change may mean the total opposite when through new circumstances they become free of their restraints.<br/><br/>
      	        We’re only human of course and we’re creatures of habit; we like to follow the same routines and aren’t always good with change. Change isn’t a habit because it’s not something that happens frequently enough and having to work through it can be an uncomfortable experience. Change is about opportunity, growth, spiritually emotionally and physically.</p>
        	    <p class="sign-resp">Miss Know It All</p>
    	    </div><!-- /post-content -->
        </span><!-- /tucked-corners bottom-corners -->
      </div><!-- /tucked-corners top-corners -->	
  	<? endforeach ?>
  	<? endif ?>
	</div>