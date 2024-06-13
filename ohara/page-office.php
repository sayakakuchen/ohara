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
                            <p class="p-subMv__en">OFFICE・NETWORK</p>
                            <h1 class="p-subMv__ja">主な事業所<br class="u-mobile">ネットワーク</h1>
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
                            <a itemprop="item" href="<?php echo $company; ?>">
                                <span itemprop="name">会社案内</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <span itemprop="name">主な事業所・ネットワーク</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-office l-section">
            <div class="p-office">
                <div class="p-office__inner l-inner">
                    <div class="p-office__title">
                        <hgroup class="c-singleTitle">
                            <p class="c-singleTitle__sub --left">OFFICE</p>
                            <h2 class="c-singleTitle__main --left">主な事業所</h2>
                        </hgroup>
                    </div>
                    <div class="p-office__items">
                        <div class="p-office__item">
                            <div class="p-office__content">
                                <h3 class="p-office__subTitle">本社</h3>
                                <p class="p-office__address c-text"> 〒602-8155<br>京都市上京区竹屋町通千本東入上ル主税町1092 </p>
                                <p class="p-office__tel c-text">TEL：075-841-8521　FAX：075-811-5715</p>
                                <div class="p-office__btn">
                                    <a href="https://maps.app.goo.gl/52oWq4oMjcuotNEv6" class="c-googleBtn" target="_blank" rel="noopener">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin_white.png" alt="ピン"> Google Map </a>
                                </div>
                            </div>
                            <picture class="p-office__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/dummy.jpg" alt="本社">
                            </picture>
                        </div>
                        <div class="p-office__item">
                            <div class="p-office__content">
                                <h3 class="p-office__subTitle">吉祥院工場・化学研究所</h3>
                                <p class="p-office__address c-text"> 〒601-8341<br>京都市南区吉祥院前田町32 </p>
                                <p class="p-office__tel c-text">TEL：075-681-1707　FAX：075-672-5150</p>
                                <div class="p-office__btn">
                                    <a href="https://maps.app.goo.gl/djUDBGYHSvYhRBg86" class="c-googleBtn" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin_white.png" alt="ピン"> Google Map </a>
                                </div>
                            </div>
                            <picture class="p-office__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/dummy.jpg" alt="吉祥院工場・化学研究所">
                            </picture>
                        </div>
                        <div class="p-office__item">
                            <div class="p-office__content">
                                <h3 class="p-office__subTitle">上鳥羽工場</h3>
                                <p class="p-office__address c-text"> 〒601-8178<br>京都市南区上鳥羽戒光45-2 </p>
                                <p class="p-office__tel c-text">TEL：075-691-0700　FAX：075-691-8950</p>
                                <div class="p-office__btn">
                                    <a href="https://maps.app.goo.gl/SpP1RC1MhoCm6zhV6" class="c-googleBtn" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin_white.png" alt="ピン"> Google Map </a>
                                </div>
                            </div>
                            <picture class="p-office__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/dummy.jpg" alt="上鳥羽工場">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-network">
            <div class="p-network">
                <div class="p-network__inner l-inner">
                    <div class="p-network__title">
                        <hgroup class="c-singleTitle">
                            <p class="c-singleTitle__sub --left">NETWORK</p>
                            <h2 class="c-singleTitle__main --left">ネットワーク</h2>
                        </hgroup>
                    </div>
                    <picture class="p-network__map">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/network.webp" media="(min-width:768px)" type="image/webp" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/network.png" media="(min-width:768px)" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/network_sp.webp" type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/network_sp.png" alt="マップ">
                    </picture>
                    <ul class="p-network__lists">
                        <li class="p-network__list">
                            <h3 class="p-network__listTitle">青島大原化学有限公司</h3>
                            <p class="p-network__en">QINGDAO OHARA CHEMICAL CO.,LTD.</p>
                            <p class="p-network__address"> Qingdao Huanhai Economic & <br class="u-mobile">Technological <br class="u-desktop">Development <br class="u-mobile">Zone,Qingdao, China </p>
                            <div class="p-network__tel">TEL：0532-4820147 　FAX：0532-4820143</div>
                        </li>
                        <li class="p-network__list">
                            <h3 class="p-network__listTitle">LJ SPECIALITIES LTD.</h3>
                            <p class="p-network__address"> ENGLAND, Chesterfield </p>
                            <div class="p-network__tel">TEL：01246-593-000　FAX：01246-857-810</div>
                        </li>
                        <li class="p-network__list">
                            <h3 class="p-network__listTitle">大榮貿易商事株式会社</h3>
                            <p class="p-network__en">PAN KOR CORPORATION</p>
                            <p class="p-network__address"> KOREA, Seoul </p>
                            <div class="p-network__tel">TEL：02-3474-0237　FAX：02-3472-9816</div>
                        </li>
                        <li class="p-network__list">
                            <h3 class="p-network__listTitle">V.P.C. GROUP</h3>
                            <p class="p-network__address"> THAILAND, Bangkok </p>
                            <div class="p-network__tel">TEL：02-892-0920　FAX：02-892-0928</div>
                        </li>
                        <li class="p-network__list">
                            <h3 class="p-network__listTitle">TEXCHEM MATERIALS SDN. BHD.</h3>
                            <p class="p-network__address"> MALAYSIA, Penang </p>
                            <div class="p-network__tel">TEL：04-229-2000　FAX：04-229-1380</div>
                        </li>
                        <li class="p-network__list">
                            <h3 class="p-network__listTitle">PT LAUTAN LUAS Tbk</h3>
                            <p class="p-network__address"> INDONESIA, Jakarta </p>
                            <div class="p-network__tel">TEL：21-5367-7777　FAX：21-5367-1120</div>
                        </li>
                        <li class="p-network__list">
                            <h3 class="p-network__listTitle">FARSMART CO.,LTD.</h3>
                            <p class="p-network__address"> TAIWAN, Taipei </p>
                            <div class="p-network__tel"> TEL：02-2798-7896<br>E-MAIL：farsmart@farsmart.com.tw </div>
                        </li>
                        <li class="p-network__list">
                            <h3 class="p-network__listTitle">KUNAL ORGANICS PVT. LTD.</h3>
                            <p class="p-network__address"> INDIA, Ahmedabad </p>
                            <div class="p-network__tel">TEL：6442217　FAX：91-79-6560118</div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact'); ?>
    </main>
<?php get_footer(); ?>