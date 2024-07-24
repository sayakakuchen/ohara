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
                            <p class="p-subMv__en">sustainability</p>
                            <h1 class="p-subMv__ja">サステナビリティ</h1>
                        </hgroup>
                        <picture class="p-subMv__img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/subMv_sustainability.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/subMv_sustainability.png" alt="ファーストビュー">
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
                            <span itemprop="name">サステナビリティ</span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-eco l-section">
            <div class="p-eco">
                <div class="p-eco__inner l-inner">
                    <h2 class="p-eco__title">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/eco_title.svg" alt="sustainbale echo finish">
                    </h2>
                    <p class="p-eco__lead c-text"> Sustainable ECO Finish とは、弊社が取り組んでいる地球環境に配慮した加工剤、加工処方の総称です。<br> 現在のペースで資源を消費し続ける社会では、人類が地球上で生きていくことが困難な時代が来ると予測されている今、<br> サスティナブル（持続可能）というテーマに多くの人や企業が取り組んでいます。<br> 私たちは早くから、環境的に持続可能なモノ・コトでなければ、社会的にも持続可能にはなりえないという理念の下、<br> 「Sustainable Development （持続可能な開発）」を心掛け、これからの未来に向けた感動製品の開発に取り組んでいます。 </p>
                    <ul class="p-eco__lists">
                        <li class="p-eco__list">
                            <picture class="p-eco__logo --1">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/x-bio.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/x-bio.png" alt="X-Bio">
                            </picture>
                            <p class="p-eco__text c-text"> バイオ化度50%という厳しい基準をクリアした繊維加工剤 </p>
                            <div class="p-eco__btn">
                                <a href="#" class="c-btn --small"> PDF <div class="c-btn__link">
                                        <div class="c-link --small"><span></span></div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="p-eco__list">
                            <picture class="p-eco__logo --2">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sanchishiru.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sanchishiru.png" alt="サンチシル">
                            </picture>
                            <p class="p-eco__text c-text"> 各地に潜んだ魅力ある材料を繊維製品としてアップサイクル。地方創生も担う。 </p>
                            <div class="p-eco__btn">
                                <a href="#" class="c-btn --small"> PDF <div class="c-btn__link">
                                        <div class="c-link --small"><span></span></div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="p-eco__list">
                            <picture class="p-eco__logo --3">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sef.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sef.png" alt="SEFシリーズ">
                            </picture>
                            <p class="p-eco__text c-text"> 人にも地球にもやさしく、原料が枯渇しにくいフッ素フリーの撥水加工剤 </p>
                            <div class="p-eco__btn">
                                <a href="#" class="c-btn --small"> PDF <div class="c-btn__link">
                                        <div class="c-link --small"><span></span></div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="p-eco__list">
                            <picture class="p-eco__logo --4">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/surtic.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/surtic.png" alt="surtic">
                            </picture>
                            <p class="p-eco__text c-text"> 本来廃棄される天然シトラス原料を用いた衛生加工剤 </p>
                            <div class="p-eco__btn">
                                <a href="#" class="c-btn --small"> PDF <div class="c-btn__link">
                                        <div class="c-link --small"><span></span></div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="p-eco__list">
                            <picture class="p-eco__logo --5">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/a.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/a.png" alt="aシリーズ">
                            </picture>
                            <p class="p-eco__text c-text"> 液流染色機で使用可能なアミノシリコン柔軟剤 </p>
                            <div class="p-eco__btn">
                                <a href="#" class="c-btn --small"> PDF <div class="c-btn__link">
                                        <div class="c-link --small"><span></span></div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="p-eco__list">
                            <picture class="p-eco__logo --6">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/andmore.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/andmore.png" alt="andmore">
                            </picture>
                            <p class="p-eco__text c-text u-desktop"></p>
                            <div class="p-eco__btn u-hidden">
                                <a href="#" class="c-btn --small"> PDF <div class="c-btn__link">
                                        <div class="c-link --small"><span></span></div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="l-topNews">
            <div class="p-topNews">
                <div class="p-topNews__inner l-inner">
                    <div class="p-topNews__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub --green ">INFORMATION</p>
                            <h2 class="c-title__main --black --small">サステナビリティ情報</h2>
                        </hgroup>
                    </div>
                    <?php
                        $args = array(
                            'post_type' => 'news', 
                            'posts_per_page' => 3 ,
                            'tax_query' => array(
                                array(
                                  'taxonomy' => 'news_category',
                                  'field' => 'slug',
                                  'terms' => 'sustainability',
                                )
                              )
                        );
                        $the_query = new WP_Query($args); if($the_query->have_posts()):
                    ?>
                    <div class="p-topNews__cards">
                        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                        <?php $terms = get_the_terms($post->ID, 'news_category'); ?>
                        <div class="p-topNews__card">
                            <a href="<?php the_permalink(); ?>" class="c-rowCard">
                                <picture class="c-rowCard__img">
                                    <?php if (has_post_thumbnail()): ?>
                                       <?php the_post_thumbnail('large'); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="アイキャッチ画像">
                                    <?php endif; ?>
                                </picture>
                                <div class="c-rowCard__content">
                                    <div class="c-rowCard__info">
                                        <time class="c-rowCard__time" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                        <?php if($terms): ?>
                                        <ul class="c-rowCard__tags">
                                            <?php foreach( $terms as $term ): ?>
                                            <li class="c-rowCard__tag c-tag"><?php echo $term->name; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </div>
                                    <p class="c-rowCard__title"><?php the_title(); ?></p>
                                    <div class="c-rowCard__text c-text"><?php the_excerpt(); ?></div>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                    <div class="p-topNews__btn">
                        <a href="<?php echo $news; ?>" class="c-btn "> 最新情報 <div class="c-btn__link">
                                <div class="c-link "><span></span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-sdg">
            <div class="p-sdg">
                <div class="p-sdg__inner l-inner">
                    <div class="p-sdg__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub --green ">OUR SDGS</p>
                            <h2 class="c-title__main --black --small">大原パラヂウムのSDGs</h2>
                        </hgroup>
                    </div>
                    <div class="p-sdg__units">
                        <div class="p-sdg__unit">
                            <h3 class="p-sdg__subtitle">繊維加工剤</h3>
                            <ul class="p-sdg__lists">
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・客先における溶剤加工からの水系移行を推進</p>
                                    <ul class="p-sdg__goals">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg9.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg12.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg14.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・「繊維to繊維リサイクル」の取り組みを後加工剤で後押し</p>
                                    <ul class="p-sdg__goals">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg9.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg11.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg12.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg13.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・エジプトで砂漠緑化に取り組むシモンド社との協業</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg1.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg13.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg15.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・サンチシル&reg;企画の推進</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg8.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg9.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg12.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・衛生対策シリーズの拡充（抗菌、抗ウイルス、消臭、防虫など）</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg3.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg11.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg16.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・非フッ素撥水剤の開発と拡販</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg3.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg12.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg14.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg14.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・植物由来原料や魚毒性の低い乳化剤の使用</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg12.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg13.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg14.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・水系/可食系コーティング剤の開発と拡販</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg12.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg14.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg15.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="p-sdg__unit">
                            <h3 class="p-sdg__subtitle">b.cave&reg;</h3>
                            <ul class="p-sdg__lists">
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・人体に対して有害なガスを吸着</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg3.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg12.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・脱臭効果による働く環境、暮らす環境の改善</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg3.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg11.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg12.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・優れた吸着力を活かして燃焼式脱臭からの脱却を支援</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg11.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg12.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg13.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・CO2等の吸脱着システムへの対応（DAC、CCS、CCUS）</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg11.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg12.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg13.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg15.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="p-sdg__unit">
                            <h3 class="p-sdg__subtitle">瞬間接着剤</h3>
                            <ul class="p-sdg__lists">
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・ネイル用、まつ毛用製品の拡充による女性のエンパワーメントへの関与</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg5.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-sdg__list">
                                    <p class="p-sdg__text">・破損物の再利用化によるゴミ、廃棄物の軽減</p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg13.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg14.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="p-sdg__unit">
                            <h3 class="p-sdg__subtitle --border">その他</h3>
                            <ul class="p-sdg__lists">
                                <li class="p-sdg__list --initial">
                                    <p class="p-sdg__text --normal">
                                    ・農業関連事業（展着剤、他）<br>
                                    ・emabaseシリーズの開発、拡販（水系ウレタン接着剤）<br>
                                    ・全社的なペーパーレス化の推進<br>
                                    ・客先への納品において通い容器を使用<br>
                                    ・製品用容器のリサイクル<br>
                                    ・受注生産や計画生産によるロス、廃棄物の削減
                                    </p>
                                    <ul class="p-sdg__goals --initial">
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg3.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg5.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg7.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg12.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg13.jpg" alt="">
                                        </li>
                                        <li class="p-sdg__goal">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sustainability/sdg15.jpg" alt="">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact'); ?>
    </main>
<?php get_footer(); ?>