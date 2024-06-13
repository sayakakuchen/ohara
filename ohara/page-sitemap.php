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
        <section class="l-subMv">
            <div class="p-subMv --border">
                <div class="p-subMv__inner l-inner">
                    <div class="p-subMv__wrap">
                        <hgroup class="p-subMv__title">
                            <p class="p-subMv__en">SITE MAP</p>
                            <h1 class="p-subMv__ja">サイトマップ</h1>
                        </hgroup>
                    </div>
                </div>
            </div>
        </section>
        <div class="l-breadcrumb">
            <div class="p-breadcrumb">
                <div class="p-breadcrumb__inner l-inner">
                    <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="<?php echo $home; ?>">
                                <span itemprop="name">トップ</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <span itemprop="name">サイトマップ</span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-sitemap">
            <div class="p-sitemap">
                <div class="p-sitemap__inner l-inner">
                    <ul class="p-sitemap__blocks">
                        <li class="p-sitemap__block">
                            <p class="p-sitemap__title">
                                <a href="<?php echo $service; ?>">事業紹介</a>
                            </p>
                            <ul class="p-sitemap__links">
                                <li class="p-sitemap__link"><a href="<?php echo $textile; ?>">繊維加工剤</a></li>
                                <li class="p-sitemap__link"><a href="<?php echo $pcp; ?>">PCP/MOF</a></li>
                            </ul>
                        </li>
                        <li class="p-sitemap__block">
                            <p class="p-sitemap__title">
                                <a href="<?php echo $company; ?>">会社案内</a>
                            </p>
                            <ul class="p-sitemap__links">
                                <li class="p-sitemap__link"><a href="<?php echo $message; ?>">メッセージ</a></li>
                                <li class="p-sitemap__link"><a href="<?php echo $mission; ?>">企業理念</a></li>
                                <li class="p-sitemap__link"><a href="<?php echo $about; ?>">会社概要</a></li>
                                <li class="p-sitemap__link"><a href="<?php echo $history; ?>">歴史</a></li>
                                <li class="p-sitemap__link"><a href="<?php echo $office; ?>">主な事業所・ネットワーク</a></li>
                            </ul>
                        </li>
                        <li class="p-sitemap__block">
                            <p class="p-sitemap__title">
                                <a href="<?php echo $sustainability; ?>">サステナビリティ</a>
                            </p>
                        </li>
                        <li class="p-sitemap__block">
                            <p class="p-sitemap__title">
                                <a href="<?php echo $study; ?>">研究</a>
                            </p>
                        </li>
                        <li class="p-sitemap__block">
                            <p class="p-sitemap__title">
                                <a href="<?php echo $column; ?>">コラム</a>
                            </p>
                        </li>
                        <li class="p-sitemap__block">
                            <p class="p-sitemap__title">
                                <a href="<?php echo $news; ?>">最新情報</a>
                            </p>
                        </li>
                        <li class="p-sitemap__block">
                            <p class="p-sitemap__title">
                                <a href="<?php echo $recruit; ?>">採用情報</a>
                            </p>
                            <ul class="p-sitemap__links">
                                <li class="p-sitemap__link"><a href="<?php echo $manufact; ?>">私たちの働き方</a></li>
                                <li class="p-sitemap__link"><a href="<?php echo $voice; ?>">先輩の声</a></li>
                                <li class="p-sitemap__link"><a href="<?php echo $application; ?>">応募要項</a></li>
                            </ul>
                        </li>
                        <li class="p-sitemap__block">
                            <p class="p-sitemap__title">
                                <a href="<?php echo $contact; ?>">お問い合わせ</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact') ?>
    </main>
<?php get_footer(); ?>