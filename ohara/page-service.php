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
                            <p class="p-subMv__en">SERVICE</p>
                            <h1 class="p-subMv__ja">事業紹介</h1>
                        </hgroup>
                        <picture class="p-subMv__img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/subMv_service.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/subMv_service.png" alt="ファーストビュー">
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
                            <span itemprop="name">事業紹介</span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-service l-section">
            <div class="p-service">
                <div class="p-service__inner l-inner">
                    <div class="p-service__blocks">
                        <div class="p-service__block">
                            <div class="p-block">
                                <div class="p-block__content">
                                    <div class="p-block__title">
                                        <hgroup class="c-title">
                                            <p class="c-title__sub --green ">FIBER FINISHING AGENT</p>
                                            <h2 class="c-title__main --black --small">繊維加工剤事業 </h2>
                                        </hgroup>
                                    </div>
                                    <p class="p-block__text c-text">当社の祖業であり、現在においても蓄積してきた技術とノウハウにより「時代に合った機能性加工」を提案し続けています。基本的に全て、環境に優しい『水系』を基本としたラインナップです。 最終用途は衣料・寝具・産業資材など多岐に渡ります。</p>
                                    <div class="p-block__btn --left">
                                        <a href="<?php echo $textile; ?>" class="c-btn "> 詳しくみる <div class="c-btn__link">
                                                <div class="c-link "><span></span></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <picture class="p-block__img --left --sp-top">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_01.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_01.jpg" alt="繊維加工剤事業 ">
                                </picture>
                            </div>
                        </div>
                        <div class="p-service__block">
                            <div class="p-block">
                                <div class="p-block__content">
                                    <div class="p-block__title">
                                        <hgroup class="c-title">
                                            <p class="c-title__sub --green ">porous material</p>
                                            <h2 class="c-title__main --black --small">気体制御技術</h2>
                                        </hgroup>
                                    </div>
                                    <p class="p-block__text c-text"> 2023年4月に立ち上げた新規事業です。京都大学発の PCP/MOF を用いた成形加工技術を確立しました。（特許取得）<br>PCP/MOFを用いた製品群であるb.cave®を主とし、臭気ソリューション（脱臭）、有害ガス対策、ガスによる機器障害対策、衛生対策などをご提供します。<br>また、用途に応じて別のPCP/MOFもしくはPCP/MOF以外を用いた粉体成形も可能です。</p>
                                    <div class="p-block__btn --left">
                                        <a href="<?php echo $pcp; ?>" class="c-btn "> 詳しくみる <div class="c-btn__link">
                                                <div class="c-link "><span></span></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <picture class="p-block__img --sp-top">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_02.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_02.jpg" alt="気体制御技術">
                                </picture>
                            </div>
                        </div>
                        <div class="p-service__block">
                            <div class="p-block">
                                <div class="p-block__content">
                                    <div class="p-block__title">
                                        <hgroup class="c-title">
                                            <p class="c-title__sub --green ">adhesive</p>
                                            <h2 class="c-title__main --black --small">瞬間接着剤事業</h2>
                                        </hgroup>
                                    </div>
                                    <p class="p-block__text c-text"> シアノアクリレート系の瞬間接着剤を中心にラインナップしております。<br><br>シアノアクリレート系の瞬間接着剤は、高速で強力な接着力を発揮する特殊な接着剤です。当社では、この接着剤を様々な用途に合わせて開発・製造しております。<br>当社の製品は充填メーカーに納品され、そこを経由し最終商品として市場に出回ります。 </p>
                                </div>
                                <picture class="p-block__img --left --sp-top">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_03.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_03.jpg" alt="瞬間接着剤事業">
                                </picture>
                            </div>
                        </div>
                        <div class="p-service__block">
                            <div class="p-block">
                                <div class="p-block__content">
                                    <div class="p-block__title">
                                        <hgroup class="c-title">
                                            <p class="c-title__sub --green ">Agriculture</p>
                                            <h2 class="c-title__main --black --small">水系ウレタン接着剤事業 </h2>
                                        </hgroup>
                                    </div>
                                    <p class="p-block__text c-text"> 当社のウレタン合成技術を活かし、2023 年に新事業・新製品として立ち上げました。<br><br>無縫製インナーやその他様々な用途にご使用頂けるよう、要望に応じて細かな処方検討が可能です。溶剤から水系への移行も含め、各種開発のご相談をお待ちしております。 </p>
                                </div>
                                <picture class="p-block__img --sp-top">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_04.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_04.jpg" alt="水系ウレタン接着剤事業">
                                </picture>
                            </div>
                        </div>
                        <div class="p-service__block">
                            <div class="p-block">
                                <div class="p-block__content">
                                    <div class="p-block__title">
                                        <hgroup class="c-title">
                                            <p class="c-title__sub --green ">Office・NETWoRK</p>
                                            <h2 class="c-title__main --black --small">KYOHPARA</h2>
                                        </hgroup>
                                    </div>
                                    <p class="p-block__text c-text"> 繊維加工剤で培った抗ウイルス・抗菌の技術を、スプレーという形で小売り販売に拡げました。直接吹きかけるだけで、ウイルスや菌の増殖を防ぎます。<br> 安全性の高い成分で作られており、人体や環境にも優しい製品です 。家庭・教育現場・公共施設など様々な場所でご使用頂いております。<br><br>KYOHPARAに関しては、協力会社にて販売しております。 </p>
                                    <div class="p-block__more">
                                        <a href="https://www.miyako-sogokanri.com/kyohpara/" target="_blank" rel="noopener" class="c-textLink">都総合管理株式会社</a>
                                    </div>
                                    <div class="p-block__more">
                                        <a href="http://www.michisu-kyoto.com/about/" target="_blank" rel="noopener" class="c-textLink">株式会社実知数</a>
                                    </div>
                                </div>
                                <picture class="p-block__img --left --sp-top">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_05.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_05.jpg" alt="研究の画像">
                                </picture>
                            </div>
                        </div>
                        <div class="p-service__block">
                            <div class="p-block">
                                <div class="p-block__content">
                                    <div class="p-block__title">
                                        <hgroup class="c-title">
                                            <p class="c-title__sub --green ">Agriculture</p>
                                            <h2 class="c-title__main --black --small">農業関連事業</h2>
                                        </hgroup>
                                    </div>
                                    <p class="p-block__text c-text"> 農薬用展着剤を開発・製造しております。​<br> 展着剤とは、農薬の効果を高めるために添加する物質です。気候変動の影響で、農作物の生育環境が悪化しており、農薬の使用量を減らしながら、農作物の品質と収量を向上させることが求められています。​<br> 当社は展着剤の技術力を活かして、農業の持続可能性と安全性に貢献します。 </p>
                                </div>
                                <picture class="p-block__img --sp-top">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_06.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/service_06.jpg" alt="農業関連事業">
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