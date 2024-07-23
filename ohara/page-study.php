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
                            <p class="p-subMv__en">RESEARCH</p>
                            <h1 class="p-subMv__ja">研究開発</h1>
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
                            <span itemprop="name">研究開発</span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="l-studySlide">
            <div class="p-studySlide">
                <div class="p-studySlide__inner l-inner">
                    <h2 class="p-studySlide__title u-mobile">
                        <span>独自性</span>
                        <span>サステナビリティ</span>
                        <span>挑戦</span>
                    </h2>
                    <h2 class="p-studySlide__title u-desktop">
                        <span>独自性・サステナビリティ・挑戦 </span>
                    </h2>
                    <div class="p-studySlide__slider js-studySlide-slider">
                        <div class="p-studySlide__picture">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/study/slide_01.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/study/slide_01.jpg" alt="画像">
                            </picture>
                        </div>
                        <div class="p-studySlide__picture">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/study/slide_02.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/study/slide_02.jpg" alt="画像">
                            </picture>
                        </div>
                        <div class="p-studySlide__picture">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/study/slide_03.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/study/slide_03.jpg" alt="画像">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="l-greeting">
            <div class="p-greeting --white">
                <div class="p-greeting__inner l-inner">
                    <div class="p-greeting__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub --green ">MESSAGE</p>
                            <h2 class="c-title__main --black --small">ごあいさつ</h2>
                        </hgroup>
                    </div>
                    <div class="p-greeting__wrap">
                        <picture class="p-greeting__img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/study/greeting.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/study/greeting.jpg" alt="ごあいさつ">
                        </picture>
                        <div class="p-greeting__content">
                            <div class="p-greeting__text c-text">
                                <p> 当社は「快適住空間の創造」をミッションに掲げており、技術開発部では人と地球の快適さを最優先に考え、環境に優しい製品の開発に努め、常に新しい価値を創造し、社会に貢献することを目指しています。 </p>
                                <p> ＝独自性＝<br> 研究において柔軟な視点と行動力を持つことで、様々な事業展開（繊維加工剤、瞬間接着剤、PCP/MOF、農薬関連等）に発展してきたと確信しています。常に研究の最前線に立ち、多様な分野や領域に挑戦し続けることで独自性のある物作りを目指しています。 </p>
                                <p> ＝サステナビリティ＝<br> 安心・安全な製品をお届けすることはもちろん、地球環境への持続可能性も考慮し、環境への負荷を最小限に抑えることも重視しています。そのためには、革新的なアイデアや技術を生み出し、新しい商品だけでなく、既存の商品も改良し続けることが必要です。 </p>
                                <p> ＝挑戦＝<br> 私たちは、社会の変化やニーズに敏感に対応するために、最先端の技術や素材を活用して、製品の機能性を高めることに努めています。これからも挑戦的な技術開発の姿勢を持ち続けることで、社会に貢献し、顧客の満足度を高めることができると信じています。 </p>
                            </div>
                            <div class="p-greeting__name">
                                <span>技術開発部長 </span>脇 浩一
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-innovation">
            <div class="p-innovation">
                <div class="p-innovation__inner l-inner">
                    <div class="p-innovation__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub --green ">INNOVATION</p>
                            <h2 class="c-title__main --black --small">新規開発の流れ</h2>
                        </hgroup>
                    </div>
                    <picture class="p-innovation__img">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/study/innovation.webp" type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/study/innovation.jpg" alt="新規開発の流れ ">
                    </picture>
                </div>
            </div>
        </section>
        <section class="l-initiatives">
            <div class="p-initiatives">
                <div class="p-initiatives__inner l-inner">
                    <div class="p-initiatives__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub --green ">Initiatives</p>
                            <h2 class="c-title__main --black --small">取り組み</h2>
                        </hgroup>
                    </div>
                    <div class="p-initiatives__items">
                        <div class="p-initiatives__item">
                            <div class="c-rowItem">
                                <div class="c-rowItem__content">
                                    <h3 class="c-rowItem__title">共同開発</h3>
                                    <p class="c-rowItem__text c-text"> 大学や企業などが持っている新しい物質や技術を弊社の技術と組み合わせることで、様々な分野で応用できる製品作りに繋がります。このような共同開発に積極的に取り組むことで自社の競争力を高めることができると考えており、常に新しいアイデア・情報を収集しています。 </p>
                                    <div class="c-rowItem__list c-text">
                                        <span>取組み先例</span><br> 京都大学、京都工芸繊維大学、大阪公立大学、福井大学、京都産業技術研究所、他
                                    </div>
                                </div>
                                <picture class="c-rowItem__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/study/initiatives_01.jpg" alt="共同開発">
                                </picture>
                            </div>
                        </div>
                        <div class="p-initiatives__item">
                            <div class="c-rowItem">
                                <div class="c-rowItem__content">
                                    <h3 class="c-rowItem__title">支援事業への挑戦 </h3>
                                    <p class="c-rowItem__text c-text"> 大学や企業、測定機関などと協力して、製品や製造方法の開発に取り組んでいます。また、それらに関連する測定機器や製造機械の開発も、支援事業を通じて行っています。常に新しい技術やアイデアに挑戦し、世の中のニーズに応えることを目指しています。 </p>
                                    <div class="c-rowItem__list c-text">
                                        <span>事例</span><br> サポイン事業、ものづくり中小企業支援事業、京都産業21支援事業、他
                                    </div>
                                </div>
                                <picture class="c-rowItem__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/study/initiatives_02.jpg" alt="支援事業への挑戦 ">
                                </picture>
                            </div>
                        </div>
                        <div class="p-initiatives__item">
                            <div class="c-rowItem">
                                <div class="c-rowItem__content">
                                    <h3 class="c-rowItem__title">依頼試験対応 </h3>
                                    <p class="c-rowItem__text c-text"> 多様なニーズに応えるために、顧客から提供される生地等に対する最適使用濃度の試験を迅速に行っています。更に、加工場で加工された本生産生地の各種試験（機能性試験、堅牢度試験等）の評価も行っています。生地の性能や耐久性を細やかに検証することで顧客との信頼関係を築き、満足度の高いサービスを提供することを目指しています。 </p>
                                    <div class="c-rowItem__list c-text">
                                        <span>保有設備</span><br> 抗菌測定室、恒温恒湿室、FTIR測定器、UV測定器、マイクロスコープ、引張強度試験機、耐光試験機、マングル、ピンテンター連続乾燥機、高水圧測定器、標準ガス発生装置、真空乾燥機、恒温恒湿器、乾燥器、他
                                    </div>
                                </div>
                                <picture class="c-rowItem__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/study/initiatives_03.jpg" alt="依頼試験対応 ">
                                </picture>
                            </div>
                        </div>
                        <div class="p-initiatives__item">
                            <div class="c-rowItem">
                                <div class="c-rowItem__content">
                                    <h3 class="c-rowItem__title">調査依頼対応 </h3>
                                    <p class="c-rowItem__text c-text"> 調査依頼についてはOEKO-TEX、REACH、 ZDHC等の規制物質の含有調査等の報告資料の作成を行っています。規制物質の含有調査は、製品や原材料に対して、環境や健康に影響を与える可能性のある物質が含まれていないかを調査するものです。日々規制が厳しくなる中ですが、安心安全を提供するための重要な業務と位置付け、正確且つ迅速な対応を実施しています。 </p>
                                </div>
                                <picture class="c-rowItem__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/study/initiatives_04.jpg" alt="調査依頼対応 ">
                                </picture>
                            </div>
                        </div>
                        <div class="p-initiatives__item">
                            <div class="c-rowItem">
                                <div class="c-rowItem__content">
                                    <h3 class="c-rowItem__title">OEM<small>（Original Equipment Manufacturing）</small>対応 </h3>
                                    <p class="c-rowItem__text c-text"> 顧客から指定された原料を用いた製品開発など、様々なOEM製造に対応します。弊社は様々な製品に応用できる水分散技術を持っており、この技術を活用して顧客の要望にお応えしています。顧客にとっての独自性・競争力のある製品作りに協力します。 </p>
                                </div>
                                <picture class="c-rowItem__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/study/initiatives_05.jpg" alt="OEE（Original Equipment Manufacturing）対応 ">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact'); ?>
    </main>
<?php get_footer(); ?>