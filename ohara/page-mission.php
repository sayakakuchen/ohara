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
                            <p class="p-subMv__en">MISSION</p>
                            <h1 class="p-subMv__ja">企業理念</h1>
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
                            <span itemprop="name">企業理念</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-mission l-section">
            <div class="p-mission">
                <div class="p-mission__inner l-inner">
                    <div class="p-mission__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub --green --column --sp-none">MISSION</p>
                            <h2 class="c-title__main --black --mt-zero --small --sp-small">大原パラヂウム化学は、<br>「サスティナブルな製品開発」を<br>将来に向けて進めます。</h2>
                        </hgroup>
                    </div>
                    <div class="p-mission__text c-text">
                        <p> 無数の細孔を持つPCP/MOFは超瞬間消臭機能を有しており、京都大学の指導の下、造粒およびタブレット化にも成功。 空気清浄機の進化フィルターや建材などの最終製品への採用に加え、工業品などの製造過程における臭気除去での応用も検討しています。接着剤事業では縫製を代替する製品の開発に促進し、これまでのシアノアクリレート以外での販路開拓へ検討を進めています。 </p>
                        <p> さらに「Sustainable ECO Finish」を中核ブランドに据え、環境配慮型製品の拡充にも力点を置き、2019年には繊維加工に使用する高機能型水系コーテイング剤を上市。　植物原料を使用した繊維加工剤「うるわし繊維」では、エジプトの砂漠で採れたホホバオイル原料を入手し、安心・安全なスキンケア加工剤の開発検討にも着手しています。 </p>
                        <p> わが社の研究開発、用途開拓を支えているのが、社外との連携。京都大学や京都工芸繊維大学に加え、PCP/MOFや繊維加工剤の用途開発で、同志社女子大学や京都高度技術研究所などと、介護施設や医療機関などの領域をターゲットに産学官連携での共同開発を進めています。 </p>
                        <p> わが社では、祖業である繊維用加工剤、接着剤などで、魅力ある機能性製品づくりに注力。　一方で経営理念として「安心・安全で健康な環境づくり」を、事業方針として「快適住空間の創造」を掲げ、SDGｓ(持続可能な開発目標)や働き方改革に引き続き貢献してまいります。 </p>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact') ?>
    </main>
<?php get_footer(); ?>