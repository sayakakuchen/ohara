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
            <div class="p-subMv ">
                <div class="p-subMv__inner l-inner">
                    <div class="p-subMv__wrap">
                        <hgroup class="p-subMv__title">
                            <p class="p-subMv__en">COMPANY</p>
                            <h1 class="p-subMv__ja">会社案内</h1>
                        </hgroup>
                        <picture class="p-subMv__img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/subMv_company.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/subMv_company.png" alt="ファーストビュー">
                        </picture>
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
                            <span itemprop="name">会社案内</span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-company l-section">
            <div class="p-company">
                <div class="p-comapny__inner l-inner">
                    <div class="p-company__blocks">
                        <div class="p-company__block">
                            <div class="p-block">
                                <div class="p-block__content">
                                    <div class="p-block__title">
                                        <hgroup class="c-title">
                                            <p class="c-title__sub --green ">MESSAGE</p>
                                            <h2 class="c-title__main --black --small">メッセージ</h2>
                                        </hgroup>
                                    </div>
                                    <p class="p-block__text c-text">『快適住空間の創造』をミッションに掲げる当社代表からのメッセージです。<br>創業家ならではの熱い想いをお届けします。</p>
                                    <div class="p-block__btn --left">
                                        <a href="<?php echo $message; ?>" class="c-btn "> 詳しくみる <div class="c-btn__link">
                                                <div class="c-link "><span></span></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <picture class="p-block__img --left --sp-top">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/company_01.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company_01.jpg" alt="メッセージ">
                                </picture>
                            </div>
                        </div>
                        <div class="p-company__block">
                            <div class="p-block">
                                <div class="p-block__content">
                                    <div class="p-block__title">
                                        <hgroup class="c-title">
                                            <p class="c-title__sub --green ">MISSION</p>
                                            <h2 class="c-title__main --black --small">企業理念</h2>
                                        </hgroup>
                                    </div>
                                    <p class="p-block__text c-text"> 『安心安全でサスティナブルな製品づくり』を目指す当社の理念をご紹介します。<br>時代の変化に順応しつつ、創業当初からの信念を貫きます。</p>
                                    <div class="p-block__btn --left">
                                        <a href="<?php echo $mission; ?>" class="c-btn "> 詳しくみる <div class="c-btn__link">
                                                <div class="c-link "><span></span></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <picture class="p-block__img --sp-top">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/company_02.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company_02.jpg" alt="メッセージ">
                                </picture>
                            </div>
                        </div>
                        <div class="p-company__block">
                            <div class="p-block">
                                <div class="p-block__content">
                                    <div class="p-block__title">
                                        <hgroup class="c-title">
                                            <p class="c-title__sub --green ">company INFO</p>
                                            <h2 class="c-title__main --black --small">会社概要</h2>
                                        </hgroup>
                                    </div>
                                    <p class="p-block__text c-text">世界的都市「京都」から先端技術を発信する当社の概要紹介です。<br>少数精鋭の組織体制で、尖った存在であり続けます。</p>
                                    <div class="p-block__btn --left">
                                        <a href="<?php echo $about; ?>" class="c-btn "> 詳しくみる <div class="c-btn__link">
                                                <div class="c-link "><span></span></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <picture class="p-block__img --left --sp-top">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/company_03.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company_03.jpg" alt="研究の画像">
                                </picture>
                            </div>
                        </div>
                        <div class="p-company__block">
                            <div class="p-block">
                                <div class="p-block__content">
                                    <div class="p-block__title">
                                        <hgroup class="c-title">
                                            <p class="c-title__sub --green ">HISTORY</p>
                                            <h2 class="c-title__main --black --small">歴史</h2>
                                        </hgroup>
                                    </div>
                                    <p class="p-block__text c-text"> 大正15年に創業を開始した当社の、化学品メーカーとしての歩みを振り返ります。<br>ファインケミカルの分野で存在感を放ち続けます。 </p>
                                    <div class="p-block__btn --left">
                                        <a href="<?php echo $history; ?>" class="c-btn "> 詳しくみる <div class="c-btn__link">
                                                <div class="c-link "><span></span></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <picture class="p-block__img --sp-top">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/company_04.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company_04.jpg" alt="研究の画像">
                                </picture>
                            </div>
                        </div>
                        <div class="p-company__block">
                            <div class="p-block">
                                <div class="p-block__content">
                                    <div class="p-block__title">
                                        <hgroup class="c-title">
                                            <p class="c-title__sub --green ">Office・NETWoRK</p>
                                            <h2 class="c-title__main --black --small">主な事業所・<br class="u-mobile">ネットワーク</h2>
                                        </hgroup>
                                    </div>
                                    <p class="p-block__text c-text">京都から世界へ。Made in JAPANのモノ作りで、高品質な製品を世界中へ届けます。</p>
                                    <div class="p-block__btn --left">
                                        <a href="<?php echo $office; ?>" class="c-btn "> 詳しくみる <div class="c-btn__link">
                                                <div class="c-link "><span></span></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <picture class="p-block__img --left --sp-top">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/company_05.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company_05.jpg" alt="研究の画像">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact') ?>
    </main>
<?php get_footer(); ?>