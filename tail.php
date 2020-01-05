<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

<footer class="footerD">
    <div class="footerwrapD">
        <h2 class="notext">푸터:로고,서브메뉴,주소&copy</h2>
        <!-- 푸터 메뉴 -->
        <div id="ft_menuD">
            <ul>
                <li><a href="#">이용약관</a></li>
                <li><a href="#">개인정보처리방침</a></li>
                <li><a href="#">고객센터</a></li>
            </ul>
        </div>
        <!-- 푸터 로고 -->
        <div id="ft_logoD">
            <a href="<?php echo G5_URL ?>/index.html"><img src="<?php echo G5_URL ?>/image/logo.png" alt="헤더로고"></a>
        </div>
        <!-- 주소&COPY -->
        <address class="addressD">
            <p>주소 : 광주광역시 북구 삼정로 92 한영B 대표번호 : 070-123-1234</p>
            <p>사업자번호 : 123-1234-12345 대표자 : 이지혜 E-mail : designm@gmail.com</p>   
            <p>COPY&copy; 디자인 맑음 2019 ALL RIGHTS </p>         
        </address>
    </div>
</footer>
    
<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>