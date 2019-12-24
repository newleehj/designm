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
					<div class="ctfield">
						<label for="name" class="ctbox">Name</label>
						<input type="text" name="name" class="cttext" value="" />
					</div>
					<div class="ctfield">
						<label for="email" class="ctbox">Email</label>
						<input type="email" name="email" class="cttext" value="" />
					</div>
					<div class="ctfield">
						<label for="number" class="ctbox">phone</label>
						<input type="number" name="tel" class="cttext" value="" />
					</div>
					<div class="ctfield">
						<label for="message" class="ctbox">Message</label><br>
						<textarea name="message" class="ctmessage" rows="6"></textarea>
					</div>
				</div>
				<ul class="ctfield2">
					<li><input type="submit" name="submit" class="ctbtn" value="신청하기" /></li>
					<li><input type="reset" name="reset" class="ctbtn" value="취소하기" /></a></li>
				</ul>
			</form>
		</div>
	</section>	
</main>
 
<?php
include_once(G5_PATH.'/tail.php');
?>