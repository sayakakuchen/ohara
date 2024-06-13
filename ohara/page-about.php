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
                            <p class="p-subMv__en">COMPANY INFO</p>
                            <h1 class="p-subMv__ja">会社概要</h1>
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
                            <span itemprop="name">会社概要</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-about l-section">
            <div class="p-about">
                <div class="p-about__inner l-inner">
                    <dl class="p-about__info">
                        <dt>商号</dt>
                        <dd>大原パラヂウム化学株式会社</dd>
                        <dt>創業年月日</dt>
                        <dd>1926年8月</dd>
                        <dt>設立年月日</dt>
                        <dd>1965年4月1日（会社組織に改組）</dd>
                        <dt>所在地</dt>
                        <dd> 【本社】<br> 〒602-8155　京都市上京区竹屋町通千本東入上ル主税町1092<br> TEL（075）841-8521　FAX（075）811-5715<br> E-mail:office@paragium.co.jp<br><br> 【吉祥院工場・化学研究所】 <br> 〒601-8341　京都市南区吉祥院前田町32<br> TEL（075）681-1707　FAX（075）672-5150<br> E-mail:kisshoin@paragium.co.jp<br><br> 【上鳥羽工場】<br> 〒601-8178　京都市南区上鳥羽南戒光町56<br> TEL（075）691-0700　FAX（075）691-8950 </dd>
                        <dt>資本金</dt>
                        <dd>3,600万円</dd>
                        <dt>代表者</dt>
                        <dd>代表取締役社長　　大原　一浩</dd>
                        <dt>取引銀行</dt>
                        <dd> 三井住友銀行　京都支店<br> 三菱UFJ銀行　京都中央支店<br> 京都銀行　本店 </dd>
                        <dt>関連会社</dt>
                        <dd>青島大原化学有限公司（中国）</dd>
                    </dl>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact') ?>
    </main>
<?php get_footer(); ?>