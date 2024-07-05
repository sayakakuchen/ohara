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
        <section class="l-recruitMv">
            <div class="p-recruitMv">
                <div class="p-recruitMv__inner l-inner">
                    <picture class="p-recruitMv__img">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/mv_pc.webp" media="(min-width:768px)" type="image/webp" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/mv_pc.jpg" media="(min-width:768px)" />
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/mv_sp.webp" type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/mv_sp.jpg" alt="ファーストビュー">
                    </picture>
                    <hgourp class="p-recruitMv__title">
                        <p class="p-recruitMv__sub">Create comfort and make your life fun</p>
                        <h1 class="p-recruitMv__main"> 快適を創造し、<br>豊かな人生を </h1>
                    </hgourp>
                    <div class="p-recruitMv__btn">
                        <a href="<?php echo $entry; ?>" class="c-btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/entry.svg" alt="アイコン"> ENTRY <div class="c-btn__link">
                                <div class="c-link "><span></span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="l-recruitIntro">
            <div class="p-recruitIntro">
                <div class="p-recruitIntro__inner l-inner">
                    <p class="p-recruitIntro__text"> 私たちは、身の回りから世界情勢にまで目を向けて様々な「不快」にアンテナをはります。 <br> その不快を1つでも「快適」に変えていくのが私たちのミッションです。 <br> 発想や想いに文系・理系は関係ありません。あくまでも化学はツールです。 <br> あなたの「快適創造力」を当社で発揮しましょう。 <br> 「これからのワクワクする100年」を共に創り、成長していける仲間を募集します。 </p>
                </div>
            </div>
        </div>
        <section class="l-greeting">
            <div class="p-greeting --bg-green">
                <div class="p-greeting__inner l-inner">
                    <div class="p-greeting__title">
                        <hgroup class="c-recruitTitle2">
                            <p class="c-recruitTitle2__sub">代表挨拶</p>
                            <h2 class="c-recruitTitle2__main">MESSAGE</h2>
                        </hgroup>
                    </div>
                    <div class="p-greeting__wrap">
                        <picture class="p-greeting__img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/message.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/message.jpg" alt="ごあいさつ">
                        </picture>
                        <div class="p-greeting__content">
                            <div class="p-greeting__text c-text">
                                <p> 弊社は『快適住空間の創造』をミッションに掲げ、人の快適、地球の快適等それぞれの テーマに取り組み、考え続けています。創業時よりの特徴である「小回りの利く開発」 「自由なコミュニケーション環境」そして「産学を通じての社外との連携」を更に 進化させ、オンリーワン企業を日々目指しています。 </p>
                                <p> 現在は「Sustainable ECO Finish」を中核ブランドに据え、環境に配慮したサステナブルな 製品の拡充に注力しています。エジプトの砂漠緑化プロジェクトへの参加や、2023年より本格始動したPCP/MOFの実用化による瞬間消臭技術での環境快適化プロジェクトも進み、祖業である繊維加工剤や、ストレス軽減に一役を担う水系ポリウレタン接着剤等に加えこれまでの当社にはない新たなビジネスモデルを創出します。 </p>
                                <p> 未来への大原パラヂウム化学の創造力にご期待下さい。 </p>
                            </div>
                            <div class="p-greeting__name">
                                <span>代表取締役 </span>大原　一浩
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-recruiWorks">
            <div class="p-recruitWorks">
                <div class="p-recruitWorks__inner l-inner">
                    <div class="p-recruitWorks__title">
                        <hgroup class="c-recruitTitle2">
                            <p class="c-recruitTitle2__sub">私たちの働き方</p>
                            <h2 class="c-recruitTitle2__main">Works</h2>
                        </hgroup>
                    </div>
                    <div class="p-recruitWorks__cards">
                        <div class="p-recruitWorks__card">
                            <a href="<?php echo $manufact; ?>">
                                <picture class="p-recruitWorks__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/icon_01.png" alt="アイコン">
                                </picture>
                                <p class="p-recruitWorks__text">製造職</p>
                                <picture class="p-recruitWorks__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/works_01.jpg" alt="製造職">
                                </picture>
                            </a>
                        </div>
                        <div class="p-recruitWorks__card">
                            <a href="<?php echo $technology; ?>">
                                <picture class="p-recruitWorks__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/icon_02.png" alt="アイコン">
                                </picture>
                                <p class="p-recruitWorks__text">技術開発職</p>
                                <picture class="p-recruitWorks__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/works_02.jpg" alt="技術開発職">
                                </picture>
                            </a>
                        </div>
                        <div class="p-recruitWorks__card">
                            <a href="<?php echo $sales; ?>">
                                <picture class="p-recruitWorks__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/icon_03.png" alt="アイコン">
                                </picture>
                                <p class="p-recruitWorks__text">営業職</p>
                                <picture class="p-recruitWorks__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/works_03.jpg" alt="営業職">
                                </picture>
                            </a>
                        </div>
                        <div class="p-recruitWorks__card">
                            <a href="<?php echo $office_work; ?>">
                                <picture class="p-recruitWorks__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/icon_04.png" alt="アイコン">
                                </picture>
                                <p class="p-recruitWorks__text">事務職(本社・工場)</p>
                                <picture class="p-recruitWorks__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/works_04.jpg" alt="事務職(本社・工場)">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-recruitInterview">
            <div class="p-recruitInterview">
                <div class="p-recruitInterview__inner l-inner">
                    <div class="p-recruitInterview__title">
                        <hgroup class="c-recruitTitle2">
                            <p class="c-recruitTitle2__sub">先輩の声</p>
                            <h2 class="c-recruitTitle2__main">INTERVIEW</h2>
                        </hgroup>
                    </div>
                    <div class="p-recruitInterview__cards">
                        <div class="p-recruitInterview__card">
                            <a href="<?php echo $voice; ?>#itani" class="c-interviewCard">
                                <picture class="c-interviewCard__img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/itani.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/itani.jpg" alt="井谷 研">
                                </picture>
                                <div class="c-interviewCard__content">
                                    <p class="c-interviewCard__name">井谷 研（イタニ　ケン）</p>
                                    <div class="c-interviewCard__info">
                                        <p><span>【入社年】</span>2008年入社16年目/キャリア採用</p>
                                        <p><span>【所属】</span>製造部</p>
                                        <p><span>【担当】</span>繊維加工剤の生産、在庫管理、発送</p>
                                    </div>
                                    <div class="c-interviewCard__link">
                                        <div class="c-link "><span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-recruitInterview__card">
                            <a href="<?php echo $voice ?>#yamada" class="c-interviewCard">
                                <picture class="c-interviewCard__img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/yamada.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/yamada.jpg" alt="山田 瑞穂">
                                </picture>
                                <div class="c-interviewCard__content">
                                    <p class="c-interviewCard__name">山田 瑞穂（ヤマダ　ミズホ）</p>
                                    <div class="c-interviewCard__info">
                                        <p><span>【入社年】</span>2017年 入社7年目/キャリア採用</p>
                                        <p><span>【所属】</span>技術開発部</p>
                                        <p><span>【担当】</span>ウレタン樹脂開発補佐、品質管理、依頼試験​</p>
                                    </div>
                                    <div class="c-interviewCard__link">
                                        <div class="c-link "><span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-recruitInterview__card">
                            <a href="<?php echo $voice ?>#takeuchi" class="c-interviewCard">
                                <picture class="c-interviewCard__img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/takeuchi.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/takeuchi.jpg" alt="竹内 勇人">
                                </picture>
                                <div class="c-interviewCard__content">
                                    <p class="c-interviewCard__name">竹内 勇人（タケウチ　ハヤト）</p>
                                    <div class="c-interviewCard__info">
                                        <p><span>【入社年】</span>2021年 入社3年目/キャリア採用</p>
                                        <p><span>【所属】</span>営業課</p>
                                        <p><span>【担当】</span>繊維加工剤の営業ならびに新規事業開拓</p>
                                    </div>
                                    <div class="c-interviewCard__link">
                                        <div class="c-link "><span></span></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="p-recruitInterview__btn">
                        <a href="<?php echo $voice; ?>" class="c-btn "> 詳しくみる <div class="c-btn__link">
                                <div class="c-link "><span></span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-recruitData">
            <div class="p-recruitData">
                <div class="p-recruitData__inner l-inner">
                    <div class="p-recruitData__title">
                        <hgroup class="c-recruitTitle">
                            <p class="c-recruitTitle__en">COMPANY DATA</p>
                            <h2 class="c-recruitTitle__main">数字で見る大原</h2>
                        </hgroup>
                    </div>
                    <div class="p-recruitData__cards">
                        <div class="p-recruitData__card --1">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_01.png" media="(min-width:768px)" />
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_01.png" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_01_sp.png" alt="男女比率">
                            </picture>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_02.png" media="(min-width:768px)" />
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_02.png" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_02_sp.png" alt="年代別割合">
                            </picture>
                        </div>
                        <div class="p-recruitData__card --2">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_03.png" media="(min-width:768px)" />
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_03.png" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_03_sp.png" alt="転職・新卒比">
                            </picture>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_04.png" media="(min-width:768px)" />
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_04.png" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_04_sp.png" alt="創業">
                            </picture>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_05.png" media="(min-width:768px)" />
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_05.png" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_05_sp.png" alt="残業時間">
                            </picture>
                        </div>
                        <div class="p-recruitData__card --3">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_06.png" media="(min-width:768px)" />
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_06.png" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_06_sp.png" alt="職種別割合">
                            </picture>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_07.png" media="(min-width:768px)" />
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_04.png" type="image/webp" />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/number_07_sp.png" alt="社員の住んでる場所">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <secrion class="l-recruitPersonal">
            <div class="p-recruitPersonal">
                <div class="p-recruitPersonal__inner l-inner">
                    <div class="p-recruitPersonal__title">
                        <hgroup class="c-recruitTitle">
                            <p class="c-recruitTitle__en">Personality</p>
                            <h2 class="c-recruitTitle__main">求める人物像</h2>
                        </hgroup>
                    </div>
                    <div class="p-recruitPersonal__box">
                        <h3 class="p-recruitPersonal__subtitle"> 『どんな仕事でも<br class="u-mobile">全力で取り組める』 </h3>
                        <p class="p-recruitPersonal__text c-text"> 市場の変化が激しい昨今、当社としてのビジネススタイルを戦略的に変えていく事もあります。<br>そんな中、どの様な流れになっても「変化を楽しめる人」は強いです。<br>それは、どんな仕事でも全力で取り組めるという事にも繋がります。今の当社には、そういった人財が多く存在します。<br><br>「100点でなくても良い、100％の力で取り組めているなら」と考え、どんな仕事でも100％全力で取り組める人財に期待します。 </p>
                    </div>
                </div>
            </div>
        </secrion>
        <?php get_template_part('./template-part/cv'); ?>
    </main>
<?php get_footer(); ?>