<div id="header">
	<h1>Tere tulemast e-hääletamiste lehele!</h1>	
	<table class="menu"><tr>
			<td><a href=""><?php echo $lang['ABOUT_VOTING'];?></a></td>
			<td><a href="?page=candidate"><?php echo $lang['LIST_OF_CANDIDATES'];?></a></td>
			<td><a href=""><?php echo $lang['HELP'];?></a></td>
			<?php
			if($language != "et"){ ?>
				<td><a href="?lang=et"><?php echo $lang['ESTONIA'];?></a></td>
			<?php }
			if($language != "en"){?>
			<td><a href="?lang=en"><?php echo $lang['ENGLISH'];?></a></td>
			<?php }?>
	</tr></table>
<div/>
