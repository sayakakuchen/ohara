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
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
</head>
<body>
    <header class="l-header">
        <div class="p-header">
            <div class="p-header__inner">
                <h2 class="p-header__logo">
                    <a href="<?php echo $home; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="ohara paragium">
                    </a>
                </h2>
                <div class="p-header__contact">
                    <a href="<?php echo $contact; ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/contact.svg" alt="お問合せ">
                    </a>
                </div>
                <div class="p-header__hamburger">
                    <button class="c-hamburger js-hamburger" type="button" aria-controls="drawer" aria-expanded="false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="p-header__drawer">
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
                <div class="p-header__globalNav">
                    <nav class="p-globalNav">
                        <div class="p-globalNav__top">
                            <ul class="p-globalNav__translate">
                                <li><a href="<?php echo $home; ?>">JP</a></li>
                                <li><a href="#">EN</a></li>
                            </ul>
                            <div class="p-globalNav__contact">
                                <a href="<?php echo $contact; ?>">お問い合わせ</a>
                            </div>
                        </div>
                        <ul class="p-globalNav__links">
                            <li class="p-globalNav__link">
                                <a href="<?php echo $home; ?>">ホーム</a>
                            </li>
                            <li class="p-globalNav__link">
                                <a href="<?php echo $service; ?>">事業紹介</a>
                                <span class="p-globalNav__button js-globalNav-button"></span>
                                <ul class="p-globalNav__subLinks">
                                    <li class="p-globalNav__subLink">
                                        <a href="<?php echo $textile; ?>">繊維加工材</a>
                                    </li>
                                    <li class="p-globalNav__subLink">
                                        <a href="<?php echo $pcp; ?>">気体制御技術</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="p-globalNav__link">
                                <a href="<?php echo $company; ?>">企業情報</a>
                                <span class="p-globalNav__button js-globalNav-button"></span>
                                <ul class="p-globalNav__subLinks">
                                    <li class="p-globalNav__subLink">
                                        <a href="<?php echo $message; ?>">メッセージ</a>
                                    </li>
                                    <li class="p-globalNav__subLink">
                                        <a href="<?php echo $mission; ?>">企業理念</a>
                                    </li>
                                    <li class="p-globalNav__subLink">
                                        <a href="<?php echo $about; ?>">会社概要</a>
                                    </li>
                                    <li class="p-globalNav__subLink">
                                        <a href="<?php echo $history; ?>">歴史</a>
                                    </li>
                                    <li class="p-globalNav__subLink">
                                        <a href="<?php echo $office; ?>">主な事業所・ネットワーク</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="p-globalNav__link">
                                <a href="<?php echo $sustainability; ?>">サステナビリティ</a>
                            </li>
                            <li class="p-globalNav__link">
                                <a href="<?php echo $study; ?>">研究</a>
                            </li>
                            <li class="p-globalNav__link">
                                <a href="<?php echo $column; ?>">コラム</a>
                            </li>
                            <li class="p-globalNav__link">
                                <a href="<?php echo $news; ?>">最新情報</a>
                            </li>
                            <li class="p-globalNav__link">
                                <a href="<?php echo $recruit; ?>">採用情報</a>
                                <span class="p-globalNav__button js-globalNav-button"></span>
                                <ul class="p-globalNav__subLinks">
                                    <li class="p-globalNav__subLink">
                                        <a href="<?php echo $manufact; ?>">私たちの働き方</a>
                                    </li>
                                    <li class="p-globalNav__subLink">
                                        <a href="<?php echo $voice; ?>">先輩の声</a>
                                    </li>
                                    <li class="p-globalNav__subLink">
                                        <a href="<?php echo $application; ?>">募集要項</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>