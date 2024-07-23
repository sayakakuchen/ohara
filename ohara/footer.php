<?php 

$home = esc_html(home_url());
$news = esc_html(home_url('/news/'));
$company = esc_html(home_url('/company/'));
$message = esc_html(home_url('/company/message/'));
$mission = esc_html(home_url('/company/mission/'));
$about = esc_html(home_url('/company/about/'));
$history = esc_html(home_url('/company/history/'));
$office = esc_html(home_url('/company/office/'));
$service = esc_html(home_url('/service/'));
$textile = esc_html(home_url('/service/textile-processing/'));
$pcp = esc_html(home_url('/service/pcp-mof/'));
$sustainability = esc_html(home_url('/sustainability/'));
$study = esc_html(home_url('/study/'));
$recruit = esc_html(home_url('/recruit/'));
$manufact = esc_html(home_url('/recruit/manufacturing/'));
$technology = esc_html(home_url('/recruit/technology-development/'));
$sales = esc_html(home_url('/recruit/sales/'));
$office_work = esc_html(home_url('/recruit/office-work/'));
$recruit = esc_html(home_url('/recruit/voice/'));
$application = esc_html(home_url('/recruit/application/'));
$entry = esc_html(home_url('/recruit/entry/'));
$column = esc_html(home_url('/column/'));
$contact = esc_html(home_url('/contact/'));
$sitemap = esc_html(home_url('/sitemap/'));

?>


<footer class="l-footer">
        <div class="p-footer">
            <div class="p-footer__inner l-inner">
                <div class="p-footer__blocks">
                    <div class="p-footer__block">
                        <div class="p-footer__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="大原バラヂウム化学株式会社">
                        </div>
                        <div class="p-footer__info c-text"> 【本部】<br> 〒602-8155<br> 京都市上京区竹屋町通千本東入上ル主税町1092<br> TEL：（075）841-8521<br> FAX：（075）811-5715 </div>
                    </div>
                    <div class="p-footer__block">
                        <div class="p-footer__navs">
                            <div class="p-footer__nav">
                                <ul class="p-footer__links">
                                    <li class="p-footer__link"><a href="<?php echo $service; ?>">事業紹介</a></li>
                                    <li class="p-footer__link"><a href="<?php echo $textile; ?>">繊維加工剤</a></li>
                                    <li class="p-footer__link"><a href="<?php echo $pcp; ?>">気体制御技術</a></li>
                                </ul>
                                <ul class="p-footer__links">
                                    <li class="p-footer__link"><a href="<?php echo $company; ?>">企業情報</a></li>
                                    <li class="p-footer__link"><a href="<?php echo $message; ?>">メッセージ</a></li>
                                    <li class="p-footer__link"><a href="<?php echo $mission; ?>">企業理念</a></li>
                                    <li class="p-footer__link"><a href="<?php echo $about; ?>">会社概要</a></li>
                                    <li class="p-footer__link"><a href="<?php echo $history; ?>">歴史</a></li>
                                    <li class="p-footer__link"><a href="<?php echo $office; ?>">主な事業所・ネットワーク</a></li>
                                </ul>
                            </div>
                            <div class="p-footer__nav">
                                <ul class="p-footer__links">
                                    <li class="p-footer__link"><a href="<?php echo $sustainability; ?>">サステナビリティ</a></li>
                                </ul>
                                <ul class="p-footer__links">
                                    <li class="p-footer__link"><a href="<?php echo $study; ?>">研究</a></li>
                                </ul>
                                <ul class="p-footer__links">
                                    <li class="p-footer__link"><a href="<?php echo $column; ?>">コラム</a></li>
                                </ul>
                                <ul class="p-footer__links">
                                    <li class="p-footer__link"><a href="<?php echo $news; ?>">最新情報</a></li>
                                </ul>
                            </div>
                            <div class="p-footer__nav">
                                <ul class="p-footer__links">
                                    <li class="p-footer__link"><a href="<?php echo $recruit; ?>">採用情報</a></li>
                                    <li class="p-footer__link"><a href="<?php echo $manufact; ?>">私たちの働き方</a></li>
                                    <li class="p-footer__link"><a href="<?php echo $voice; ?>">先輩の声</a></li>
                                    <li class="p-footer__link"><a href="<?php echo $application; ?>">募集要項</a></li>
                                </ul>
                                <ul class="p-footer__links">
                                    <li class="p-footer__link"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
                                    <li class="p-footer__link u-mobile"><a href="<?php echo $sitemap; ?>">サイトマップ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-footer__bottom">
                    <p class="p-footer__copy">Copyright &copy; OHARA PARAGIUM CHEMICAL CO. LTD. <br class="u-mobile">All rights reserved.</p>
                    <p class="p-footer__sitemap u-desktop"><a href="<?php echo $sitemap; ?>">サイトマップ</a></p>
                </div>
            </div>
        </div>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>