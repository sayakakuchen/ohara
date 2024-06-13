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
        <section class="l-mv">
            <div class="p-mv">
                <div class="p-mv__inner l-inner">
                    <div class="p-mv__main">
                        <picture class="p-mv__img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv.png" alt="ファーストビュー">
                        </picture>
                        <button class="p-mv__link --1 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="自動車のモーダルを開く">
                        </button>
                        <button class="p-mv__link --2 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="農場のモーダルを開く">
                        </button>
                        <button class="p-mv__link --3 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="宿泊施設のモーダルを開く">
                        </button>
                        <button class="p-mv__link --4 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="アウトドアのモーダルを開く">
                        </button>
                        <button class="p-mv__link --5 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="バス・電車のモーダルを開く">
                        </button>
                        <button class="p-mv__link --6 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="医療・介護のモーダルを開く">
                        </button>
                        <button class="p-mv__link --7 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="雨、風のモーダルを開く">
                        </button>
                        <button class="p-mv__link --8 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="工場のモーダルを開く">
                        </button>
                        <button class="p-mv__link --9 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="アパレルのモーダルを開く">
                        </button>
                        <button class="p-mv__link --10 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="のモーダルを開く">
                        </button>
                        <button class="p-mv__link --11 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="学校のモーダルを開く">
                        </button>
                        <button class="p-mv__link --12 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="住宅のモーダルを開く">
                        </button>
                        <button class="p-mv__link --13 js-mv-modal">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="スポーツのモーダルを開く">
                        </button>
                    </div>
                    <h1 class="p-mv__title"> 衣・住・美・健・環<br>
                        <span>化学の発想で彩ります</span>
                    </h1>
                    <div class="p-mv__text">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pin.png" alt="ピン"> クリックして関連製品をチェック
                    </div>
                    <div class="p-mv__modal">
                        <div class="p-mvModal">
                            <button class="p-mvModal__close js-mv-modal-close">
                                <span></span>
                                <span></span>
                            </button>
                            <div class="p-mvModal__contents">
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>自動車</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_01.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_01.jpg" alt="自動車">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_01_1.jpg" alt="カーシート・カーマット">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">カーシート・カーマット</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">撥水撥油加工</li>
                                                        <li class="p-mvModal__list">抗菌抗ウイルス加工</li>
                                                        <li class="p-mvModal__list">摩耗強度向上加工</li>
                                                        <li class="p-mvModal__list">抗アレルゲン加工 </li>
                                                        <li class="p-mvModal__list">防カビ加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_01_2.jpg" alt="空調">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">空調</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                        <li class="p-mvModal__list">マイナスイオン加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_01_3.jpg" alt="部材（天井材、インパネ等）">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">部材<small>（天井材、インパネ等）</small></div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">水系ウレタン接着剤</li>
                                                        <li class="p-mvModal__list">柔軟加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                        <li class="p-mvModal__list">耐油加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>農場</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_02.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_02.jpg" alt="農場">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_02_1.jpg" alt="臭気・ガス（メタン）・感染症問題">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">臭気・ガス<small>（メタン）</small>・感染症問題</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_02_2.jpg" alt="動物用衣類">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">動物用衣類</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">冷感加工</li>
                                                        <li class="p-mvModal__list">防虫加工</li>
                                                        <li class="p-mvModal__list">吸湿発熱加工</li>
                                                        <li class="p-mvModal__list">熱遮蔽加工</li>
                                                        <li class="p-mvModal__list">調温加工</li>
                                                        <li class="p-mvModal__list">水系ウレタン接着剤</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_02_3.jpg" alt="農業資材（クリーンクロス、消毒マット、ハウス等）">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">農業資材<small>（クリーンクロス、消毒マット、ハウス等）</small></div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                        <li class="p-mvModal__list">撥水加工</li>
                                                        <li class="p-mvModal__list">抗ウイルス加工</li>
                                                        <li class="p-mvModal__list">防風コーティング</li>
                                                        <li class="p-mvModal__list">硬仕上げ加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>宿泊施設</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_03.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_03.jpg" alt="宿泊施設">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_03_1.jpg" alt="空調　喫煙所・共有スペース">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">空調　喫煙所・共有スペース</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">抗ウイルス加工</li>
                                                        <li class="p-mvModal__list">KYOHPARA</li>
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_03_2.jpg" alt="温泉施設">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">温泉施設</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">撥水加工</li>
                                                        <li class="p-mvModal__list">吸水加工</li>
                                                        <li class="p-mvModal__list">抗ウイルス加工</li>
                                                        <li class="p-mvModal__list">マイナスイオン加工</li>
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_03_3.jpg" alt="浴衣・リネン">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">浴衣・リネン</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">抗菌加工</li>
                                                        <li class="p-mvModal__list">うるわし繊維</li>
                                                        <li class="p-mvModal__list">ゲルマニウム加工</li>
                                                        <li class="p-mvModal__list">サンチシル</li>
                                                        <li class="p-mvModal__list">マイナスイオン加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>アウトドア</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_04.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_04.jpg" alt="アウトドア">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_04_1.jpg" alt="テント・チェアなど">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">テント・チェアなど</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">撥水加工</li>
                                                        <li class="p-mvModal__list">UVカット加工</li>
                                                        <li class="p-mvModal__list">防カビ加工</li>
                                                        <li class="p-mvModal__list">防虫加工</li>
                                                        <li class="p-mvModal__list">防水コーティング</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_04_2.jpg" alt="アウトドアウェア">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">アウトドアウェア</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">防虫加工</li>
                                                        <li class="p-mvModal__list">摩耗強度向上加工</li>
                                                        <li class="p-mvModal__list">熱遮蔽加工</li>
                                                        <li class="p-mvModal__list">花粉リリーズ加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_04_3.jpg" alt="臭気問題（ゴミ、トイレ、BBQ臭など）">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">臭気問題<small>（ゴミ、トイレ、BBQ臭など）</small></div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">消臭加工</li>
                                                        <li class="p-mvModal__list">柔軟加工</li>
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                        <li class="p-mvModal__list">抗菌防臭加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>バス・電車</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_05.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_05.jpg" alt="バス・電車">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_05_1.jpg" alt="座席">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">座席</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">抗ウイルス加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                        <li class="p-mvModal__list">撥水加工</li>
                                                        <li class="p-mvModal__list">防虫加工</li>
                                                        <li class="p-mvModal__list">ウレタンコーティング</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_05_2.jpg" alt="手すり・つり革">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">手すり・つり革</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">抗ウイルス加工</li>
                                                        <li class="p-mvModal__list">抗菌加工</li>
                                                        <li class="p-mvModal__list">撥油加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_05_3.jpg" alt="空調">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">空調</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">抗アレルゲン加工</li>
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>医療・介護</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_06.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_06.jpg" alt="医療・介護">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_06_1.jpg" alt="リネン関係">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">リネン関係</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">抗ウイルス加工</li>
                                                        <li class="p-mvModal__list">消臭加工</li>
                                                        <li class="p-mvModal__list">風合い加工</li>
                                                        <li class="p-mvModal__list">抗菌防臭加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_06_2.jpg" alt="手術着・ナース服">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">手術着・ナース服</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">防汚加工（血）</li>
                                                        <li class="p-mvModal__list">抗ウイルス加工</li>
                                                        <li class="p-mvModal__list">帯電防止加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                        <li class="p-mvModal__list">吸水速乾加工</li>
                                                        <li class="p-mvModal__list">撥水加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_06_3.jpg" alt="パーテーション、空調">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">パーテーション、空調</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">抗ウイルス加工</li>
                                                        <li class="p-mvModal__list">マイナスイオン加工</li>
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                        <li class="p-mvModal__list">水系ウレタン接着剤</li>
                                                        <li class="p-mvModal__list">撥水撥油加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>雨、風</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_07.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_07.jpg" alt="雨、風">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_07_1.jpg" alt="傘">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">傘</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">撥水加工</li>
                                                        <li class="p-mvModal__list">UVカット加工</li>
                                                        <li class="p-mvModal__list">熱遮蔽加工</li>
                                                        <li class="p-mvModal__list">防カビ加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_07_2.jpg" alt="レインウェア・雨靴">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">レインウェア・雨靴</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">非フッ素撥水加工</li>
                                                        <li class="p-mvModal__list">透湿防水加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                        <li class="p-mvModal__list">防風加工</li>
                                                        <li class="p-mvModal__list">吸放湿加工</li>
                                                        <li class="p-mvModal__list">防カビ加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_07_3.jpg" alt="対策グッズ（スプレー等）">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">対策グッズ<small>（スプレー等）</small></div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">撥水剤</li>
                                                        <li class="p-mvModal__list">柔軟加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                        <li class="p-mvModal__list">耐油加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>工場</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_08.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_08.jpg" alt="工場">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_08_1.jpg" alt="臭気・有害ガス問題（機器破損など）">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">臭気・有害ガス問題<small>（機器破損など）</small></div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_08_2.jpg" alt="ユニフォーム">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">ユニフォーム</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">撥水撥油加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                        <li class="p-mvModal__list">消臭加工</li>
                                                        <li class="p-mvModal__list">ストレッチバック加工</li>
                                                        <li class="p-mvModal__list">帯電防止加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_08_3.jpg" alt="修理・補修">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">修理・補修</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">水系ウレタン接着剤</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>アパレル</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_09.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_09.jpg" alt="アパレル">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_09_1.jpg" alt="肌着">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">肌着</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">柔軟加工</li>
                                                        <li class="p-mvModal__list">弱酸性加工</li>
                                                        <li class="p-mvModal__list">抗酸化加工</li>
                                                        <li class="p-mvModal__list">消臭加工</li>
                                                        <li class="p-mvModal__list">冷感加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_09_2.jpg" alt="アウター">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">アウター</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">花粉リリース加工</li>
                                                        <li class="p-mvModal__list">撥水加工</li>
                                                        <li class="p-mvModal__list">防シワ加工</li>
                                                        <li class="p-mvModal__list">防虫加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_09_3.jpg" alt="ボトムス">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">ボトムス</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">ストレッチバック加工</li>
                                                        <li class="p-mvModal__list">堅牢度向上加工</li>
                                                        <li class="p-mvModal__list">柔軟加工</li>
                                                        <li class="p-mvModal__list">抗酸化加工</li>
                                                        <li class="p-mvModal__list">撥水撥油加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>自動車</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_10.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_10.jpg" alt="自動車">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_10_1.jpg" alt="カーシート・カーマット">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">カーシート・カーマット</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">撥水撥油加工</li>
                                                        <li class="p-mvModal__list">抗菌抗ウイルス加工</li>
                                                        <li class="p-mvModal__list">摩耗強度向上加工</li>
                                                        <li class="p-mvModal__list">抗アレルゲン加工 </li>
                                                        <li class="p-mvModal__list">防カビ加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_10_2.jpg" alt="空調">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">空調</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                        <li class="p-mvModal__list">マイナスイオン加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_10_3.jpg" alt="部材（天井材、インパネ等）">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">部材<small>（天井材、インパネ等）</small></div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">水系ウレタン接着剤</li>
                                                        <li class="p-mvModal__list">柔軟加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                        <li class="p-mvModal__list">耐油加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>学校</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_11.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_11.jpg" alt="学校">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_11_1.jpg" alt="カーテン">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">カーテン</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">熱遮蔽加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                        <li class="p-mvModal__list">抗アレルゲン加工</li>
                                                        <li class="p-mvModal__list">UVカット加工</li>
                                                        <li class="p-mvModal__list">透け防止加工</li>
                                                        <li class="p-mvModal__list">花粉リリース加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_11_2.jpg" alt="制服">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">制服</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">形態安定加工</li>
                                                        <li class="p-mvModal__list">摩耗強度向上加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                        <li class="p-mvModal__list">ピリング防止加工</li>
                                                        <li class="p-mvModal__list">透け防止加工</li>
                                                        <li class="p-mvModal__list">ストレッチバック加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_11_3.jpg" alt="体育館（避難所としても）">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">体育館<small>（避難所としても）</small></div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">抗ウイルス加工</li>
                                                        <li class="p-mvModal__list">吸湿発熱加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                        <li class="p-mvModal__list">KYOHPARA</li>
                                                        <li class="p-mvModal__list">水系ウレタン接着剤</li>
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                        <li class="p-mvModal__list">熱遮蔽加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>住宅</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_12.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_12.jpg" alt="住宅">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_12_1.jpg" alt="インテリアファブリック">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">インテリアファブリック</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">抗アレルゲン加工</li>
                                                        <li class="p-mvModal__list">防汚加工（食品）</li>
                                                        <li class="p-mvModal__list">撥水撥油加工</li>
                                                        <li class="p-mvModal__list">摩耗強度向上加工</li>
                                                        <li class="p-mvModal__list">防カビ加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_12_2.jpg" alt="寝具">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">寝具</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">消臭加工</li>
                                                        <li class="p-mvModal__list">抗酸化加工</li>
                                                        <li class="p-mvModal__list">ワタ抜け防止加工</li>
                                                        <li class="p-mvModal__list">ゲルマニウム加工</li>
                                                        <li class="p-mvModal__list">調温加工</li>
                                                        <li class="p-mvModal__list">水系ウレタン接着剤</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_12_3.jpg" alt="ペット関連">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">ペット関連</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">消臭加工<small>（ペット臭）</small></li>
                                                        <li class="p-mvModal__list">b.caveシリーズ</li>
                                                        <li class="p-mvModal__list">撥水加工</li>
                                                        <li class="p-mvModal__list">滑り止め加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-mvModal__content">
                                    <div class="p-mvModal__wrap">
                                        <h3 class="p-mvModal__title"><span>スポーツ</span></h3>
                                        <picture class="p-mvModal__img">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_13.webp" type="image/webp" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_13.jpg" alt="スポーツ">
                                        </picture>
                                        <div class="p-mvModal__blocks">
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_13_1.jpg" alt="ウェア">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">ウェア</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">冷感加工</li>
                                                        <li class="p-mvModal__list">吸水速乾加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                        <li class="p-mvModal__list">UVカット加工</li>
                                                        <li class="p-mvModal__list">ストレッチバック加工</li>
                                                        <li class="p-mvModal__list">透湿防水加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_13_2.jpg" alt="競技アイテム">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">競技アイテム</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">摩耗強度向上加工</li>
                                                        <li class="p-mvModal__list">平滑性付与</li>
                                                        <li class="p-mvModal__list">滑り止め加工</li>
                                                        <li class="p-mvModal__list">防汚加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="p-mvModal__block">
                                                <picture class="p-mvModal__img2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/modal_13_3.jpg" alt="タオル・観戦グッズ">
                                                </picture>
                                                <div class="p-mvModal__group">
                                                    <div class="p-mvModal__subTitle">タオル・観戦グッズ</div>
                                                    <ul class="p-mvModal__lists">
                                                        <li class="p-mvModal__list">吸水速乾加工</li>
                                                        <li class="p-mvModal__list">冷感加工</li>
                                                        <li class="p-mvModal__list">熱遮蔽加工</li>
                                                        <li class="p-mvModal__list">防水加工</li>
                                                        <li class="p-mvModal__list">抗菌防臭加工</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-mvModal__bg js-mv-modal-close"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-topAbout">
            <div class="p-topAbout">
                <div class="p-topAbout__inner l-inner">
                    <div class="p-topAbout__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_icon.png" alt="アイコン">
                    </div>
                    <h2 class="p-topAbout__title">生活の中のこんなところでも<br class="u-mobile">活躍しています</h2>
                    <div class="p-topAbout__lists js-about-slider">
                        <div class="p-topAbout__list">
                            <div class="p-topAbout__text">
                                <h3 class="p-topAbout__listTitle">衣類</h3>
                                <p class="p-topAbout__listText"> 様々な衣類向けで快適性を付与します。抗菌・冷感・撥水撥油・防汚・ストレッチバック性など。 </p>
                            </div>
                            <picture class="p-topAbout__img">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_01.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_01.png" alt="衣類">
                            </picture>
                        </div>
                        <div class="p-topAbout__list">
                            <div class="p-topAbout__text">
                                <h3 class="p-topAbout__listTitle">寝装・リビング関連</h3>
                                <p class="p-topAbout__listText"> 睡眠の質向上や住空間の快適性向上に向け、生地加工で健康づくりに貢献します。 </p>
                            </div>
                            <picture class="p-topAbout__img">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_02.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_02.png" alt="寝装・リビング関連">
                            </picture>
                        </div>
                        <div class="p-topAbout__list">
                            <div class="p-topAbout__text">
                                <h3 class="p-topAbout__listTitle">空調</h3>
                                <p class="p-topAbout__listText"> 日本人の4人に1人はアレルギー症状を持っていると言われており、空調の衛生維持は重要です。フィルターを介して快適を演出します。 </p>
                            </div>
                            <picture class="p-topAbout__img">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_03.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_03.png" alt="空調">
                            </picture>
                        </div>
                        <div class="p-topAbout__list">
                            <div class="p-topAbout__text">
                                <h3 class="p-topAbout__listTitle">消毒・防虫</h3>
                                <p class="p-topAbout__listText"> 街中からレジャーシーンまで、様々な場所でのウイルス・害虫対策が重要視されます。化学の力で快適・安全を創出します。 </p>
                            </div>
                            <picture class="p-topAbout__img">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_04.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_04.png" alt="消毒・防虫">
                            </picture>
                        </div>
                        <div class="p-topAbout__list">
                            <div class="p-topAbout__text">
                                <h3 class="p-topAbout__listTitle">臭気・有害ガス問題</h3>
                                <p class="p-topAbout__listText"> 工場臭気や排せつ臭などの脱臭に加え有害ガス吸着まで、PCP/MOF応用品で対応します。常識外な吸着能力。 </p>
                            </div>
                            <picture class="p-topAbout__img u-mt-zero">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_05.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_05.png" alt="臭気・有害ガス問題">
                            </picture>
                        </div>
                        <div class="p-topAbout__list">
                            <div class="p-topAbout__text">
                                <h3 class="p-topAbout__listTitle">宇宙産業</h3>
                                <p class="p-topAbout__listText"> 今後拡大していく宇宙産業において、特殊空間ならではの課題が多く在ると考えます。機能性付与にて宇宙産業の発展に貢献します。 </p>
                            </div>
                            <picture class="p-topAbout__img u-mt-zero">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_06.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/about_06.png" alt="宇宙産業">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-topNews">
            <div class="p-topNews">
                <div class="p-topNews__inner l-inner">
                    <div class="p-topNews__title">
                        <hgroup class="c-title">
                            <p class="c-title__sub --green ">NEWS</p>
                            <h2 class="c-title__main --black --small">最新情報</h2>
                        </hgroup>
                    </div>
                    <?php
                        $args = array(
                            'post_type' => 'news', 
                            'posts_per_page' => 3 
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
        <section class="l-topColumn">
            <div class="p-topColumn">
                <div class="p-topColumn__inner l-inner">
                    <div class="p-topColumn__wrap">
                        <div class="p-topColumn__content">
                            <div class="p-topColumn__title">
                                <hgroup class="c-title">
                                    <p class="c-title__sub --white ">COLUMN</p>
                                    <h2 class="c-title__main --white ">コラム</h2>
                                </hgroup>
                            </div>
                            <p class="p-topColumn__text c-text"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
                            <div class="p-topColumn__more">
                                <a href="<?php echo $column; ?>" class="c-more"> もっとみる <div class="c-more__link">
                                        <div class="c-link "><span></span></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="p-topColumn__slider js-column-slider">
                            <div class="p-topColumn__card">
                                <a href="#" class="c-card">
                                    <picture class="c-card__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/thumbnail.jpg" alt="アイキャッチ画像">
                                    </picture>
                                    <div class="c-card__info">
                                        <time class="c-card__time">2020.02.14</time>
                                        <ul class="c-card__tags">
                                            <li class="c-card__tag c-tag">カテゴリが入ります</li>
                                        </ul>
                                    </div>
                                    <p class="c-card__title">タイトルが入ります。ダミーテキストダミーテキスト</p>
                                </a>
                            </div>
                            <div class="p-topColumn__card">
                                <a href="#" class="c-card">
                                    <picture class="c-card__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/thumbnail.jpg" alt="アイキャッチ画像">
                                    </picture>
                                    <div class="c-card__info">
                                        <time class="c-card__time">2020.02.14</time>
                                        <ul class="c-card__tags">
                                            <li class="c-card__tag c-tag">カテゴリが入ります</li>
                                        </ul>
                                    </div>
                                    <p class="c-card__title">タイトルが入ります。ダミーテキストダミーテキスト</p>
                                </a>
                            </div>
                            <div class="p-topColumn__card">
                                <a href="#" class="c-card">
                                    <picture class="c-card__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/thumbnail.jpg" alt="アイキャッチ画像">
                                    </picture>
                                    <div class="c-card__info">
                                        <time class="c-card__time">2020.02.14</time>
                                        <ul class="c-card__tags">
                                            <li class="c-card__tag c-tag">カテゴリが入ります</li>
                                        </ul>
                                    </div>
                                    <p class="c-card__title">タイトルが入ります。ダミーテキストダミーテキスト</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-topCompany">
            <div class="p-topCompany">
                <div class="p-topCompany__inner l-inner">
                    <div class="p-topCompany__wrap">
                        <div class="p-copCompany__content">
                            <div class="p-topCompany__title">
                                <hgroup class="c-title">
                                    <p class="c-title__sub --green --column">COMPANY</p>
                                    <h2 class="c-title__main --black --mt-zero">快適環境を<br>自然に優しく創出する</h2>
                                </hgroup>
                            </div>
                            <p class="p-topCompany__text c-text"> 大原パラヂウム化学は1926年に京都の地で創業して以来、新たなる『快適環境』を提案すべく日本発信、京都発信型の独自の技術確立を行い、激化する他国との競争に勝てる魅力を創出し続けています。 今後も自然に優しく調和しながらニーズを新たに創出し、ファインケミカルの分野でオンリーワンを目指していきます。 また独創的な創造型チャレンジ企業として、中国・青島大原化学有限公司との連携を生かしたグローバルな展開を軸とし、更なる大きな躍進を続けています。 </p>
                            <div class="p-topCompany__btn">
                                <a href="<?php echo $company; ?>" class="c-btn "> 企業情報トップ <div class="c-btn__link">
                                        <div class="c-link "><span></span></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <picture class="p-topCompany__img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/company.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/company.png" alt="企業情報のイラスト">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-topService">
            <div class="p-topService">
                <div class="p-topService__inner l-inner">
                    <div class="p-topService__head">
                        <div class="p-topService__title">
                            <hgroup class="c-title">
                                <p class="c-title__sub --green ">SERVICE</p>
                                <h2 class="c-title__main --black ">事業紹介</h2>
                            </hgroup>
                        </div>
                        <p class="p-topService__text c-text"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
                    </div>
                    <div class="p-topService__btn">
                        <a href="<?php echo $service; ?>" class="c-btn "> 事業紹介トップ <div class="c-btn__link">
                                <div class="c-link "><span></span></div>
                            </div>
                        </a>
                    </div>
                    <div class="p-topService__wrap">
                        <ul class="p-topService__links">
                            <li class="p-topService__link">
                                <a href="<?php echo $textile; ?>">
                                    <span>Service 01</span>繊維加工剤 <div class="p-topService__circle">
                                        <div class="c-link "><span></span></div>
                                    </div>
                                </a>
                            </li>
                            <li class="p-topService__link">
                                <a href="<?php echo $pcp; ?>">
                                    <span>Service 02</span>PCP/MOF <div class="p-topService__circle">
                                        <div class="c-link "><span></span></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <picture class="p-topService__img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/service.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/service.jpg" alt="事業紹介">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-topSustainability">
            <div class="p-topSustainability">
                <div class="p-topSustainability__inner l-inner">
                    <div class="p-topSustainability__block">
                        <div class="p-block">
                            <div class="p-block__content">
                                <div class="p-block__title">
                                    <hgroup class="c-title">
                                        <p class="c-title__sub --green ">sustainability</p>
                                        <h2 class="c-title__main --black ">サステナビリティ</h2>
                                    </hgroup>
                                </div>
                                <p class="p-block__text c-text"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
                                <div class="p-block__btn">
                                    <a href="<?php echo $sustainability; ?>" class="c-btn "> サステナビリティ <div class="c-btn__link">
                                            <div class="c-link "><span></span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <picture class="p-block__img">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/sustain.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/sustain.jpg" alt="研究の画像">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-topResearch">
            <div class="p-topResearch">
                <div class="p-topResearch__inner l-inner">
                    <div class="p-topResearch__block">
                        <div class="p-block --rowreverse">
                            <div class="p-block__content">
                                <div class="p-block__title">
                                    <hgroup class="c-title">
                                        <p class="c-title__sub --green ">RESEARCH</p>
                                        <h2 class="c-title__main --black ">研究</h2>
                                    </hgroup>
                                </div>
                                <p class="p-block__text c-text"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
                                <div class="p-block__btn">
                                    <a href="<?php echo $study; ?>" class="c-btn "> 研究 <div class="c-btn__link">
                                            <div class="c-link "><span></span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <picture class="p-block__img --left">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/research.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/research.jpg" alt="研究の画像">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-topRecruit">
            <div class="p-topRecruit">
                <div class="p-topRecruit__inner l-inner">
                    <div class="p-topRecruit__block">
                        <div class="p-block">
                            <div class="p-block__content">
                                <div class="p-block__title">
                                    <hgroup class="c-title">
                                        <p class="c-title__sub --green ">RECRUIT</p>
                                        <h2 class="c-title__main --black ">快適を創造し、<br>豊かな人生を</h2>
                                    </hgroup>
                                </div>
                                <p class="p-block__text c-text"> 私たちは、身の回りから世界情勢にまで目を向けて様々な「不快」にアンテナをはります。<br> その不快を1つでも「快適」に変えていくのが私たちのミッションです。<br> 発想や想いに文系・理系は関係ありません。あくまでも化学はツールです。<br> あなたの「快適創造力」を当社で発揮しましょう。<br> 「これからのワクワクする100年」を共に創り、成長していける仲間を募集します。 </p>
                                <div class="p-block__btn">
                                    <a href="<?php echo $recruit; ?>" class="c-btn "> 採用情報トップ <div class="c-btn__link">
                                            <div class="c-link "><span></span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <picture class="p-block__img --small">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit.webp" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/recruit.png" alt="採用情報のイラスト">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact') ?>
    </main>
<?php get_footer(); ?>