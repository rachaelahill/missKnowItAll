<!--  ==================== POST DETAIL CONTENT ====================	-->		
	<? if(isset($posts)) : foreach($posts as $row) :?>	
	<div class="wrapper">
	  <div class="tucked-corners top-corners">
      <span class="tucked-corners bottom-corners">
  	    <h2><?=$row->titleName;?></h2>
  	    <p class="post-detail"><?=date("F j, Y", $row->postDate);?></p>
  	    <p class="dear-txt">Dear Miss Know It All,</p>
  	    <p class="post-txt"><?=$row->postTxt;?></p>
    	    <p class="user-sign"><?=$row->userSign;?></p>
  	  </span><!-- /tucked-corners-bottom -->
    </div><!-- /tucked-corners-top -->
    <hr/>
    <hr/>
    <div class="resp-post">
      <h2>Re: <?=$row->titleName;?></h2>
	    <p class="post-detail">January 13, 2013</p>
	    <p class="dear-txt">Dear <?=$row->userSign;?>,</p>
	    <p class="post-txt">Resistance to change is brought about by our inability to accept that the life we had isn’t the life we’ve got now. Any circumstances will always be part of the universal resistance, which means the more we resist, the more we draw those circumstances to us.<br/><br/>
	        Some of us will worry that because we have to deal with change, we will lose control; but it stands to reason that if we have control before the time we have to change, we’ll have control through change and beyond it. For some, change may interfere with their independence, but for others change may mean the total opposite when through new circumstances they become free of their restraints.<br/><br/>
	        We’re only human of course and we’re creatures of habit; we like to follow the same routines and aren’t always good with change. Change isn’t a habit because it’s not something that happens frequently enough and having to work through it can be an uncomfortable experience. Change is about opportunity, growth, spiritually emotionally and physically.</p>
  	    <p class="sign-resp">Miss Know It All</p>
    </div><!-- /resp-post-sect -->	
	</div><!-- /wrapper -->
	<? endforeach ?>
	<? endif ?>