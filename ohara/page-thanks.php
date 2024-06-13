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

<?php get_header(); ?>
    <main>
        <section class="l-thanks">
            <div class="p-thanks">
                <div class="p-thanks__inner l-inner">
                    <div class="p-thanks__title">
                        <hgroup class="c-singleTitle">
                            <p class="c-singleTitle__sub ">THANK YOU</p>
                            <h2 class="c-singleTitle__main ">お問い合わせが<br class="u-mobile">完了しました</h2>
                        </hgroup>
                    </div>
                    <p class="p-thanks__text c-text"> お問い合わせをいただきありがとうございます。<br> 確認のためお客様へ自動返信メールをお送りさせて頂きました。<br> 担当者からの折り返しのご連絡をさせて頂きますので、<br> 今しばらくお待ちくださいませ。 </p>
                    <div class="p-thanks__btn">
                        <a href="<?php echo $home; ?>" class="c-btn "> トップに戻る <div class="c-btn__link">
                                <div class="c-link "><span></span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>