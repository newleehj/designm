<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
 <!-- Form -->
<main class="contactD">
	<section class="ctwrap">
		<h3 class="cth3">제작서비스 신청</h3>
		<div class="ctcontent">
			<form method="post" action="#">
				<div class="ctfields">
					<div class="ctfield1">
						<label for="name">Name</label>
						<input type="text" name="name" id="ctname" value="" />
					</div>
					<div class="ctfield2">
						<label for="email">Email</label>
						<input type="email" name="email" id="ctemail" value="" />
					</div>
					<div class="ctfield3">
						<label for="email">phone</label>
						<input type="email" name="email" id="ctphone" value="" />
					</div>
					<div class="ctfield4">
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="6"></textarea>
					</div>
				</div>
				<ul class="ctactions">
					<li><input type="submit" name="submit" id="ctsubmit" value="신청하기" /></li>
				</ul>
			</form>
		</div>
	</section>	
</main>
 
<?php
include_once(G5_PATH.'/tail.php');
?>