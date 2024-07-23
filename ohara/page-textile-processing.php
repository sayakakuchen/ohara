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

<?php get_header(); ?>
    <main>
        <section class="l-subMv">
            <div class="p-subMv ">
                <div class="p-subMv__inner l-inner">
                    <div class="p-subMv__wrap">
                        <hgroup class="p-subMv__title">
                            <p class="p-subMv__en">FIBER FINISHING AGENT</p>
                            <h1 class="p-subMv__ja">繊維加工剤</h1>
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
                            <a itemprop="item" href="<?php echo $service; ?>">
                                <span itemprop="name">事業紹介</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <span itemprop="name">繊維加工剤</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-textileAbout l-section">
            <div class="p-textileAbout">
                <div class="p-textileAbout__inner l-inner">
                    <div class="p-textileAbout__wrap">
                        <div class="p-textileAbout__content">
                            <div class="p-textileAbout__title">
                                <hgroup class="c-title">
                                    <p class="c-title__sub --green --column --sp-none">ABOUT</p>
                                    <h2 class="c-title__main --black --mt-zero --small --sp-small">繊維加工剤事業とは</h2>
                                </hgroup>
                            </div>
                            <p class="p-textileAbout__text c-text"> 生活に欠かすことが出来ない繊維製品。その繊維の機能性を高め、より快適な生活を支えることが当社の繊維加工剤事業のミッションです。最終商品は、衣料をはじめ衛生材料・空調関連・自動車資材など多岐に渡ります。皆様の生活の中にも、当社製品が関わっている物があるかもしれません。<br> 求められる機能は目まぐるしく変化し続けますが、時代に沿った積極的な開発・営業展開を行います。<br> また、創業当初から『水系』でのラインナップに一貫していることも含め、地球環境への配慮も忘れません。 <br> 繊維産業の“黒子”として、革新的な加工剤を提供し続けます。 </p>
                        </div>
                        <picture class="p-textileAbout__img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/textile_01.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/textile_01.jpg" alt="繊維加工剤事業とは">
                        </picture>
                    </div>
                    <div class="p-textileAbout__movie">
                        <div class="p-movie">
                            <figure class="p-movie__icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/movie.svg" alt="動画のアイコン">
                            </figure>
                            <div class="p-movie__content">
                                <h3 class="p-movie__title">効果を動画で紹介</h3>
                                <p class="p-movie__text c-text"> 具体的な効果を分かりやすく実験動画でご紹介しています </p>
                            </div>
                            <div class="p-movie__btn">
                                <a href="#" class="c-btn "> 動画を見る <div class="c-btn__link">
                                        <div class="c-link "><span></span></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-lineup">
            <div class="p-lineup">
                <div class="p-lineup__inner l-inner">
                    <div class="p-lineup__title">
                        <hgroup class="c-singleTitle">
                            <p class="c-singleTitle__sub ">LINE UP</p>
                            <h2 class="c-singleTitle__main ">主なラインナップ</h2>
                        </hgroup>
                    </div>
                    <div class="p-lineup__items">
                        <div class="p-lineup__item js-lineup">
                            <p class="p-lineup__text">風合い</p>
                            <ul class="p-lineup__lists">
                                <li class="p-lineup__list"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/uruwashi.pdf" target="_blank" rel="noopener">うるわし繊維</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">αシリーズ</a></li>
                            </ul>
                        </div>
                        <div class="p-lineup__item js-lineup">
                            <p class="p-lineup__text">撥水撥油・防汚</p>
                            <ul class="p-lineup__lists">
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">フッ素撥水撥油加工</a>剤</li>
                                <li class="p-lineup__list"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/fluorine.pdf" target="_blank" rel="noopener">非フッ素撥水</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">防汚加工剤</a></li>
                            </ul>
                        </div>
                        <div class="p-lineup__item js-lineup">
                            <p class="p-lineup__text">暑さ対策</p>
                            <ul class="p-lineup__lists">
                                <li class="p-lineup__list"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/confort.pdf" target="_blank" rel="noopener">コンフォートクール</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">熱遮蔽、UVカット加工剤</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">調温加工剤</a></li>
                            </ul>
                        </div>
                        <div class="p-lineup__item js-lineup">
                            <p class="p-lineup__text">寒さ対策</p>
                            <ul class="p-lineup__lists">
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">吸湿発熱加工剤</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">ゲルマニウム加工剤</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">調温加工剤</a></li>
                            </ul>
                        </div>
                        <div class="p-lineup__item js-lineup">
                            <p class="p-lineup__text">衛生対策</p>
                            <ul class="p-lineup__lists">
                                <li class="p-lineup__list"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/aller.pdf" target="_blank" rel="noopener">アレルフレッシュ</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">抗菌・抗ウイルス加工剤</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">消臭加工剤</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">防虫加工剤</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">花粉リリース加工剤</a></li>
                            </ul>
                        </div>
                        <div class="p-lineup__item js-lineup">
                            <p class="p-lineup__text">美容・健康</p>
                            <ul class="p-lineup__lists">
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">弱酸性加工剤</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">抗酸化加工剤</a></li>
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">マイナスイオン加工剤</a></li>
                            </ul>
                        </div>
                        <div class="p-lineup__item js-lineup">
                            <p class="p-lineup__text">コーティング加工</p>
                            <ul class="p-lineup__lists">
                                <li class="p-lineup__list"><a href="#" target="_blank" rel="noopener">汗じみ防止</a></li>
                                <li class="p-lineup__list"><a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/ecomotion.pdf" target="_blank" rel="noopener">エコモーション</a></li>
                            </ul>
                        </div>
                        <div class="p-lineup__item">
                            <p class="p-lineup__text">aシリーズ<span>浴中加工対応の加工剤シリーズ</span></p>
                        </div>
                        <div class="p-lineup__item">
                            <p class="p-lineup__text">帯電防止加工剤<span>静電気の発生を抑える</span></p>
                        </div>
                        <div class="p-lineup__item">
                            <p class="p-lineup__text">透け防止加工剤<span>中に着用した衣類を透けにくく</span></p>
                        </div>
                        <div class="p-lineup__item">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/str8.pdf" target="_blank" rel="noopener">
                                <p class="p-lineup__text">
                                ストレッチバック加工剤<span>伸びやすく戻りやすい。<br>しわ防止にも</span>
                                </p>
                            </a>
                        </div>
                        <div class="p-lineup__item">
                            <p class="p-lineup__text">and more …<span>起毛、艶消、スリップ防止、<Br>リップル加工など</span></p>
                        </div>
                    </div>
                    <div class="p-lineup__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/check.svg" alt="アイコン">
                    </div>
                    <p class="p-lineup__note"> 対象素材に応じて品番が多数ございます。<br> 具体的な製品情報に関してはお問い合わせくださいませ。 </p>
                    <div class="p-lineup__sustainability">
                        <div class="p-earth">
                            <div class="p-earth__title">
                                <hgroup class="c-title">
                                    <p class="c-title__sub --green --border-none">sustainability</p>
                                    <h2 class="c-title__main --black --center --small">サステナブルな<br class="u-mobile">取り組みを見る</h2>
                                </hgroup>
                            </div>
                            <div class="p-earth__link">
                                <a href="<?php echo $sustainability; ?>">
                                    <div class="c-link --big"><span></span></div>
                                </a>
                            </div>
                            <picture class="p-earth__img">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/earth.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/earth.png" alt="地球のイラスト">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-case">
            <div class="p-case">
                <div class="p-case__inner l-inner">
                    <div class="p-case__title">
                        <hgroup class="c-singleTitle">
                            <p class="c-singleTitle__sub ">CASE</p>
                            <h2 class="c-singleTitle__main ">ピックアップ採用事例 </h2>
                        </hgroup>
                    </div>
                    <div class="p-case__items">
                        <div class="p-case__item">
                            <div class="c-box">
                                <div class="c-box__number">01</div>
                                <h3 class="c-box__title">コンフォートクールⓇ<br class="u-mobile">シリーズ</h3>
                                <div class="c-box__wrap">
                                    <picture class="c-box__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" alt="アイキャッチ画像">
                                    </picture>
                                    <p class="c-box__text c-text">マスクやデニムなど、夏に暑さを感じる原因になりやすいアイテムに対して多く採用頂いています。 </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-case__item">
                            <div class="c-box">
                                <div class="c-box__number">02</div>
                                <h3 class="c-box__title">パラレヂンSTR-8</h3>
                                <div class="c-box__wrap">
                                    <picture class="c-box__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" alt="アイキャッチ画像">
                                    </picture>
                                    <p class="c-box__text c-text">シワ加工として採用。伸張回復率を向上させる反発性を活かし、シワが付きにくい加工として見た目のキレイさを保ちます。 </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-case__item">
                            <div class="c-box">
                                <div class="c-box__number">03</div>
                                <h3 class="c-box__title">パラレヂンNCシリーズ<br>（防汚加工）</h3>
                                <div class="c-box__wrap">
                                    <picture class="c-box__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" alt="アイキャッチ画像">
                                    </picture>
                                    <p class="c-box__text c-text">食品防汚目的として子供服にて採用。衣服のキレイな状態を保つことに加え、洗濯が楽になることで家事の時短にも繋がります。 </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-case__item">
                            <div class="c-box">
                                <div class="c-box__number">04</div>
                                <h3 class="c-box__title">パラゾールGH-908</h3>
                                <div class="c-box__wrap">
                                    <picture class="c-box__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" alt="アイキャッチ画像">
                                    </picture>
                                    <p class="c-box__text c-text">本来はアクリルバインダーとして使用される事が多いですが、摩耗強度を向上させる目的での採用事例もあります。これにより、衣服の寿命を延ばすことも可能です。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-case__item">
                            <div class="c-box">
                                <div class="c-box__number">05</div>
                                <h3 class="c-box__title">アレルフレッシュⓇシリーズ<br>（抗アレルゲン加工）</h3>
                                <div class="c-box__wrap">
                                    <picture class="c-box__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" alt="アイキャッチ画像">
                                    </picture>
                                    <p class="c-box__text c-text">大手自動車メーカーのオプションフロアマットとして採用されました。当社の商標もカタログ上でご使用頂きました。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-case__item">
                            <div class="c-box">
                                <div class="c-box__number">06</div>
                                <h3 class="c-box__title">パラファインPHC-50<br>（弱酸性加工）</h3>
                                <div class="c-box__wrap">
                                    <picture class="c-box__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/case_dummy.jpg" alt="アイキャッチ画像">
                                    </picture>
                                    <p class="c-box__text c-text">寝具（敷パッド、タオルケット、枕カバー）用として採用されました。汗をかいても生地上を弱酸性に保つことで肌にやさしく、また柔らかい風合いもご評価頂きました。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact') ?>
    </main>
<?php get_footer(); ?>