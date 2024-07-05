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
$voice = esc_html(home_url('/recruit/voice/'));
$application = esc_html(home_url('/recruit/application/'));
$entry = esc_html(home_url('/recruit/entry/'));
$column = esc_html(home_url('/column/'));
$contact = esc_html(home_url('/contact/'));
$sitemap = esc_html(home_url('/sitemap/'));

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
</head>
<body>
    <header class="l-header">
        <div class="p-column-header">
            <div class="p-column-header__inner l-inner">
                <div class="p-column-header__top">
                    <div class="p-column-header__textLink">
                        <a href="#">KAITEKI Magazineとは</a>
                    </div>
                    <h1 class="p-column-header__logo u-desktop">
                        <a href="<?php echo $column; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/column/column-logo.png" alt="kaiteki magazine">
                        </a>
                    </h1>
                    <ul class="p-column-header__links">
                        <li class="p-column-header__link u-desktop">
                            <a href="<?php echo $home; ?>">コーポレートサイトへ</a>
                        </li>
                        <li class="p-column-header__link u-sns">
                            <a href="#" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/column/instagram.svg" alt="instagram">
                            </a>
                        </li>
                        <li class="p-column-header__link u-sns">
                            <a href="#" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/column/x.svg" alt="x">
                            </a>
                        </li>
                        <li class="p-column-header__link u-hamburger u-mobile">
                            <button class="c-hamburger js-hamburger" type="button" aria-controls="drawer" aria-expanded="false">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="p-column-header__logo u-mobile">
                    <a href="<?php echo $column; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/column/column-logo.png" alt="kaiteki magazine">
                    </a>
                </div>
                <nav class="p-column-header__nav u-desktop">
                    <ul class="p-column-header__navLinks">
                        <li class="p-column-header__navLink">
                            <a href="<?php echo esc_html(home_url('/column_category/company/')) ?>">会社について</a>
                        </li>
                        <li class="p-column-header__navLink">
                            <a href="<?php echo esc_html(home_url('/column_category/chemistry/')) ?>">化学について</a>
                        </li>
                        <li class="p-column-header__navLink">
                            <a href="<?php echo esc_html(home_url('/column_category/fashion/')) ?>">ファッションについて</a>
                        </li>
                        <li class="p-column-header__navLink">
                            <a href="<?php echo esc_html(home_url('/column_category/development-story/')) ?>">開発ストーリー</a>
                        </li>
                        <li class="p-column-header__navLink">
                            <a href="<?php echo esc_html(home_url('/column_category/sustainable/')) ?>">サステナブル</a>
                        </li>
                    </ul>
                </nav>
                <div class="p-column-header__drawer">
                    <div class="p-drawer">
                        <div class="p-drawer__inner">
                            <nav class="p-drawer__nav">
                                <ul class="p-drawer__links">
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $home; ?>">ホーム</a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $service; ?>">事業紹介</a>
                                        <span class="p-drawer__button js-drawer-button"></span>
                                        <ul class="p-drawer__subLinks">
                                            <li class="p-drawer__subLink">
                                                <a href="<?php echo $textile; ?>">繊維加工材</a>
                                            </li>
                                            <li class="p-drawer__subLink">
                                                <a href="<?php echo $pcp; ?>">気体制御技術</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $company; ?>">企業情報</a>
                                        <span class="p-drawer__button js-drawer-button"></span>
                                        <ul class="p-drawer__subLinks">
                                            <li class="p-drawer__subLink">
                                                <a href="<?php echo $message; ?>">メッセージ</a>
                                            </li>
                                            <li class="p-drawer__subLink">
                                                <a href="<?php echo $mission; ?>">企業理念</a>
                                            </li>
                                            <li class="p-drawer__subLink">
                                                <a href="<?php echo $about; ?>">会社概要</a>
                                            </li>
                                            <li class="p-drawer__subLink">
                                                <a href="<?php echo $history; ?>">歴史</a>
                                            </li>
                                            <li class="p-drawer__subLink">
                                                <a href="<?php echo $office; ?>">主な事業所・ネットワーク</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $sustainability; ?>">サステナビリティ</a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $study; ?>">研究</a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $column; ?>">コラム</a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $news; ?>">最新情報</a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $recruit; ?>">採用情報</a>
                                        <span class="p-drawer__button js-drawer-button"></span>
                                        <ul class="p-drawer__subLinks">
                                            <li class="p-drawer__subLink">
                                                <a href="<?php echo $manufact; ?>">私たちの働き方</a>
                                            </li>
                                            <li class="p-drawer__subLink">
                                                <a href="<?php echo $voice; ?>">先輩の声</a>
                                            </li>
                                            <li class="p-drawer__subLink">
                                                <a href="<?php echo $application; ?>">募集要項</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $contact; ?>">お問い合わせ</a>
                                    </li>
                                    <li class="p-drawer__link">
                                        <a href="<?php echo $sitemap; ?>">サイトマップ</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>