<?php
include_once('../../../common.php');
$num = 1;
$title = 'about';
include_once(G5_THEME_PATH . '/head.php');
?>

<main>
    <section class="about01_ceo">
        <div class="top">
            <img src="<?php echo G5_THEME_URL ?>/img/about/about_all_visual.jpg" alt="">
            <div class="t_txt">
                <h2>About 비락</h2>
                <p>고객만족을 넘어 고객가치를 실천하는 선도기업</p>
            </div>
        </div>
        <div class="inner nav">
            <ul class="ab_nav">
                <li class="home_gnb"><a href="/"><i class="xi-home"></i></a></li>
                <li class="head_gnb"><a href="#!">About 비락<i class="xi-caret-down-circle-o"></i></a>
                    <ul class="sub_nav">
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/about01.php">About 비락</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/business01.php">BUSUNESS</a></li>
                        <li><a href="/bbs/board.php?bo_table=notice">News Room</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/employment01.php">인재채용</a></li>
                    </ul>
                </li>
                <li class="ab_gnb"><a href="#!">CI소개<i class="xi-caret-down-circle-o"></i></a>
                    <ul class="sub_nav">
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/about01.php">CEO 인사말</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/about02.php">기업소개</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/about03.php">연혁</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/about04.php">CI소개</a></li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/about05.php">오시는 길</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </section>
    <section class="mainAbout04 sec">
        <div class="inner abcontent">
            <h2><strong>VILAC</strong>CI</h2>
            <span>모든 비락인의 미래를 향한 의지, 비락의 발전</span>
            <p>전체적으로 식물에서 영글은 열매의 형태로 비락인의 창조정신 (인류복지를 위한 건강추구, 종합식품 회사로서의 신미각 추구,<br>
                미래지향적 기업 성장 추구)을 이 땅에 뿌리내려 역사와 전통을 계승 발전시키는 모든 비락인의 미래를 향한 의지를 상징하고 나아가<br>
                비락의 모든 상품과 기업의지가 6대주로 향하는 비락의 발전을 의미한다.</p>
            <div class="ci01">
                <div class="flex_inner ci_f">
                    <img src="<?php echo G5_THEME_URL ?>/img/ci/ci01.png" alt="">
                    <img src="<?php echo G5_THEME_URL ?>/img/ci/ci02.png" alt="">
                    <img src="<?php echo G5_THEME_URL ?>/img/ci/ci03.png" alt="">
                </div>
                <div class="desc_ci">
                    <span>Signature</span>
                </div>
            </div>
            <div class="ci01">
                <div class="flex_inner ci_f">
                    <img src="<?php echo G5_THEME_URL ?>/img/ci/ci04.png" alt="">
                    <img src="<?php echo G5_THEME_URL ?>/img/ci/ci05.png" alt="">
                    <img src="<?php echo G5_THEME_URL ?>/img/ci/ci06.png" alt="">
                </div>
                <div class="desc_ci">
                    <span class="logotype">Logotype</span>
                </div>
            </div>
            <div class="ci_download">
                <a href="http://www.vilac.co.kr/download/vilac_ci.zip">
                    <i class="xi-download"></i>CI download
                </a>
            </div>
        </div>
    </section>
</main>

<?php
include_once(G5_THEME_PATH . '/tail.php');
?>