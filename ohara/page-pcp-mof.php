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
                            <p class="p-subMv__en">porous material</p>
                            <h1 class="p-subMv__ja">気体制御技術</h1>
                            <p class="p-subMv__text c-text">
                                PCP/MOFを使用した製品群『b.cave&reg;&reg;』を主に、様々な気体制御技術を展開します。
                            </p>
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
                            <span itemprop="name">PCP/MOF</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-pcpAbout l-section">
            <div class="p-pcpAbout">
                <div class="p-pcpAbout__inner l-inner">
                    <div class="p-pcpAbout__wrap">
                        <div class="p-pcpAbout__content">
                            <div class="p-pcpAbout__title">
                                <hgroup class="c-title">
                                    <p class="c-title__sub --green --column --sp-none">ABOUT</p>
                                    <h2 class="c-title__main --black --mt-zero --small">PCP/MOFとは</h2>
                                </hgroup>
                            </div>
                            <p class="p-pcpAbout__smallText"> PCP: Porous Coordination Polymer ／ MOF: Metal OrganicFramework </p>
                            <p class="p-pcpAbout__text c-text"> PCP/MOF とは「多孔性配位高分子 / 金属有機構造体」の略称で、金属イオンと有機配位子がジャングルジムのように組み合わさった、無数の孔がある構造体です。<br>PCP/MOF は、配位子の種類により孔の大きさや性質をデザインすることができ､金属イオンの持つ機能も活用できる「多孔性材料」の新素材 として材料科学の分野にブレイクスルーをもたらしました。多孔性を活かした優れた吸着能力により、活性炭の何倍も多くの分子を取り込むことができます。<br>近年ノーベル化学賞の候補にも挙がっている、世界が注目する素材です。 </p>
                        </div>
                        <picture class="p-pcpAbout__img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/pcpAbout_01.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/pcpAbout_01.jpg" alt="PCP/MOF">
                        </picture>
                    </div>
                    <div class="p-pcpAbout__movie">
                        <lite-youtube videoid="CjpyFYIgiCA" playlabel="Play"></lite-youtube>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-bcave">
            <div class="p-bcave">
                <div class="p-bcave__inner l-inner">
                    <div class="p-bcave__title">
                        <hgroup class="c-singleTitle">
                            <p class="c-singleTitle__sub "> b.cave&reg;</p>
                            <h2 class="c-singleTitle__main "> b.cave&reg;</h2>
                        </hgroup>
                    </div>
                    <p class="p-bcave__text c-text"> PCP/MOFを使用した応用製品シリーズがb.cave&reg;です。<br> PCP/MOF は、高い吸着性や触媒性を持つ新しいナノポーラス材料ですが、<br> そのままでは超微細な粉末状であり、実用化には困難が伴います。<br> そこで当社では、PCP/MOF の性能を損なわずにペレット状・シート状・塗料等の様々な形態に加工できる技術を確立しました。<br> これによりPCP/MOF 製品の応用範囲が広がり、より多くの分野での活用が期待できます。<br> 驚異的な瞬間吸着能力を持つb.cave&reg;は、臭気・有害ガス等の様々な課題を解決する製品として社会に貢献していきます。 </p>
                    <div class="p-bcave__btn">
                        <a href="#" class="c-documentBtn">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pdf.svg" alt="pdf"> 資料で詳しく見る </a>
                    </div>
                    <h3 class="p-bcave__subtitle">
                        <h3 class="c-subTitle">b.cave&reg; materials</h3>
                    </h3>
                    <div class="p-bcave__items">
                        <div class="p-bcave__item">
                            <div class="p-bcave__left">
                                <p class="p-bcave__lead">表面点接着造粒品</p>
                                <p class="p-bcave__itemTitle">ZRシリーズ</p>
                                <picture class="p-bcave__img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/zr.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/zr.jpg" alt="ZRシリーズ">
                                </picture>
                            </div>
                            <div class="p-bcave__right">
                                <ul class="p-bcave__lists">
                                    <li class="p-bcave__list">粒子状の為、比表面積が大きく処理効率が高いです。</li>
                                    <li class="p-bcave__list">担持させる物質の大きさを調整可能です。（例：活性炭4㎜など）</li>
                                    <li class="p-bcave__list">用途に応じて最適な粒径を選択できる為、様々な分野での活用が期待できます。</li>
                                </ul>
                                <dl class="p-bcave__info">
                                    <dt>＜応用例＞ </dt>
                                    <dd>車のキャビンフィルター、脱臭機、脱臭プラントなど（いずれも挟着フイルター用の充填剤として）</dd>
                                    <dt>＜性状＞ </dt>
                                    <dd>硬度：90％以上　粒度：30～60メッシュ　嵩密度：0.35～0.55g/L </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="p-bcave__item">
                            <div class="p-bcave__left">
                                <p class="p-bcave__lead">押出成形品</p>
                                <p class="p-bcave__itemTitle">OSシリーズ</p>
                                <picture class="p-bcave__img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/os.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/os.jpg" alt="OSシリーズ">
                                </picture>
                            </div>
                            <div class="p-bcave__right">
                                <ul class="p-bcave__lists">
                                    <li class="p-bcave__list">中空や多孔質構造にすることで、ガス吸着能力を高めることが可能です。 </li>
                                    <li class="p-bcave__list">PCP/MOFの配合量をコントロールすることができ、これにより消臭性能を最適化することができます。</li>
                                    <li class="p-bcave__list">耐久性のある消臭効果が期待できます。 </li>
                                    <li class="p-bcave__list">他の消臭成分との配合も可能で、それにより様々なガスに対応できます。 </li>
                                </ul>
                                <dl class="p-bcave__info">
                                    <dt>＜応用例＞ </dt>
                                    <dd>ハニカムフィルターへの充填、脱臭機への充填、置き型消臭剤など（そのままの状態で使用） </dd>
                                    <dt>＜性状＞ </dt>
                                    <dd>硬度：90％以上　粒度5～10メッシュ　嵩密度：0.35～0.55g/L </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="p-bcave__item">
                            <div class="p-bcave__left">
                                <p class="p-bcave__lead">打錠成形品</p>
                                <p class="p-bcave__itemTitle">DJシリーズ</p>
                                <picture class="p-bcave__img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/dj.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/dj.jpg" alt="DJシリーズ">
                                </picture>
                            </div>
                            <div class="p-bcave__right">
                                <ul class="p-bcave__lists">
                                    <li class="p-bcave__list">高密度な製剤が可能で、それにより非常に高い耐久性を発現できます。</li>
                                    <li class="p-bcave__list">PCP/MOF配合量の高い高性能品が容易に製造可能です。 </li>
                                    <li class="p-bcave__list">PCP/MOF以外の成分も配合可能で、更なる機能も付与出来ます。 </li>
                                </ul>
                                <dl class="p-bcave__info">
                                    <dt>＜応用例＞ </dt>
                                    <dd>脱臭機への充填、置き型消臭剤、家電用途など </dd>
                                    <dt>＜性状＞ </dt>
                                    <dd>硬度：10N以上 </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="p-bcave__item">
                            <div class="p-bcave__left">
                                <p class="p-bcave__lead">シート品</p>
                                <p class="p-bcave__itemTitle">Sシリーズ</p>
                                <picture class="p-bcave__img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/s.webp" type="image/webp" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/s.jpg" alt="Sシリーズ">
                                </picture>
                            </div>
                            <div class="p-bcave__right">
                                <ul class="p-bcave__lists">
                                    <li class="p-bcave__list">不織布にPCP/MOFを含侵させた製品で、塗布量の調整も可能です。</li>
                                    <li class="p-bcave__list">不織布の目付けや厚さ等、用途に応じて対応出来ます。また、基材の持ち込みも可能です。 </li>
                                    <li class="p-bcave__list">PCP/MOF分散塗料（溶剤系）としても販売可能です。</li>
                                </ul>
                                <dl class="p-bcave__info">
                                    <dt>＜応用例＞ </dt>
                                    <dd>各種フィルタ、パーテーション、梱包資材など </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-business">
            <div class="p-business">
                <div class="p-business__inner l-inner">
                    <div class="p-business__title">
                        <hgroup class="c-singleTitle">
                            <p class="c-singleTitle__sub --left --sp-left">Business development</p>
                            <h2 class="c-singleTitle__main --left --sp-left">事業展開</h2>
                        </hgroup>
                    </div>
                    <div class="p-business__target">
                        <div class="p-target">
                            <div class="p-target__title">
                                <h3 class="c-subTitle">ターゲット</h3>
                            </div>
                            <ul class="p-target__lists">
                                <li class="p-target__list">
                                    <p class="p-target__number">01</p>
                                    <picture class="p-target__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/business_01.webp" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/business_01.png" alt="職場環境の臭気問題解決">
                                    </picture>
                                    <p class="p-target__text">職場環境の臭気問題解決</p>
                                </li>
                                <li class="p-target__list">
                                    <p class="p-target__number">02</p>
                                    <picture class="p-target__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/business_02.webp" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/business_02.png" alt="臭気による周辺クレーム対応">
                                    </picture>
                                    <p class="p-target__text">臭気による<br>周辺クレーム対応</p>
                                </li>
                                <li class="p-target__list">
                                    <p class="p-target__number">03</p>
                                    <picture class="p-target__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/business_03.webp" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/business_03.png" alt="畜産・酪農業の臭気対策">
                                    </picture>
                                    <p class="p-target__text">畜産・酪農業の臭気対策</p>
                                </li>
                                <li class="p-target__list">
                                    <p class="p-target__number">04</p>
                                    <picture class="p-target__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/business_04.webp" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/business_04.png" alt="介護看護・育児の快適創出">
                                    </picture>
                                    <p class="p-target__text">介護看護・育児の快適創出</p>
                                </li>
                                <li class="p-target__list">
                                    <p class="p-target__number">05</p>
                                    <picture class="p-target__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/business_05.webp" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/business_05.png" alt="有毒ガス吸着">
                                    </picture>
                                    <p class="p-target__text">有毒ガス吸着</p>
                                </li>
                            </ul>
                            <p class="p-target__bottom c-text">その他働きやすさや街づくり改革など様々な社会課題をb.cave&reg;で解決していきます。​</p>
                        </div>
                    </div>
                    <div class="p-business__material">
                        <div class="p-material">
                            <div class="p-material__title">
                                <h3 class="c-subTitle">納品形態</h3>
                            </div>
                            <ul class="p-material__items">
                                <li class="p-material__item">
                                    <p class="p-material__itemTitle">b.cave&reg; materials</p>
                                    <p class="p-material__text c-text"> 粉体・粒状・シート状をそのままの状態で提供。お客様は、目的や用途に応じて、自由に加工・利用することが可能です。 </p>
                                </li>
                                <li class="p-material__item">
                                    <p class="p-material__itemTitle">b.cave&reg; materials &</p>
                                    <p class="p-material__text c-text"> materialsをフィルターなどの形にした上で提供。 </p>
                                </li>
                                <li class="p-material__item">
                                    <p class="p-material__itemTitle">b.cave&reg; equipments</p>
                                    <p class="p-material__text c-text"> materialsを搭載した機器（脱臭機など）として提供。materialsを搭載した機器は、家庭用や業務用など、さまざまな用途に応じた設計が可能です。 </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-business__totalsolution">
                        <div class="p-totalsolution">
                            <div class="p-totalsolution__title">
                                <h3 class="c-subTitle">PCP/MOF<br class="u-mobile">トータルソリューション</h3>
                            </div>
                            <div class="p-totalsolution__wrap">
                                <div class="p-totalsolution__content">
                                    <p class="p-totalsolution__text c-text"> PCP/MOFを成形させる技術は、多くの産業分野で重要な役割を担うと考えています。当社は、PCP/MOFの配合量調整や異素材との共存など、PCP/MOFの成形に対応できる技術を持っています。各種PCPの成形に関して、お気軽にご相談ください。お客様のニーズに合わせた最適なPCP/MOFの成形ソリューションを提供します。 </p>
                                    <div class="p-totalsolution__example">
                                        <span>応用例</span><br class="u-mobile"> CO2 回収、CCS、CCUS、脱炭素、ガスタンクの小型化、 etc...
                                    </div>
                                </div>
                                <picture class="p-totalsolution__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/business_img.jpg" alt="PCP/MOFトータルソリューション">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-viewCase">
            <div class="p-viewCase">
                <div class="p-viewCase__inner l-inner">
                    <div class="p-viewCase__title">
                        <hgroup class="c-singleTitle">
                            <p class="c-singleTitle__sub --left --sp-left">CASE</p>
                            <h2 class="c-singleTitle__main --left --sp-left">事例を見る</h2>
                        </hgroup>
                    </div>
                    <div class="p-viewCase__cards js-case-slider">
                        <div class="p-viewCase__card">
                            <div class="c-caseCard">
                                <div class="c-caseCard__wrap">
                                    <div class="c-caseCard__content">
                                        <h3 class="c-caseCard__title">製品名</h3>
                                        <p class="c-caseCard__text c-text"> 製品の説明が入ります。ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミー </p>
                                    </div>
                                    <picture class="c-caseCard__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/dummy.jpg" alt="アイキャッチ画像">
                                    </picture>
                                </div>
                                <div class="c-caseCard__comment">
                                    <strong>開発者コメント</strong> ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                                </div>
                            </div>
                        </div>
                        <div class="p-viewCase__card">
                            <div class="c-caseCard">
                                <div class="c-caseCard__wrap">
                                    <div class="c-caseCard__content">
                                        <h3 class="c-caseCard__title">製品名</h3>
                                        <p class="c-caseCard__text c-text"> 製品の説明が入ります。ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミー </p>
                                    </div>
                                    <picture class="c-caseCard__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/dummy.jpg" alt="アイキャッチ画像">
                                    </picture>
                                </div>
                                <div class="c-caseCard__comment">
                                    <strong>開発者コメント</strong> ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                                </div>
                            </div>
                        </div>
                        <div class="p-viewCase__card">
                            <div class="c-caseCard">
                                <div class="c-caseCard__wrap">
                                    <div class="c-caseCard__content">
                                        <h3 class="c-caseCard__title">製品名</h3>
                                        <p class="c-caseCard__text c-text"> 製品の説明が入ります。ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミー </p>
                                    </div>
                                    <picture class="c-caseCard__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/dummy.jpg" alt="アイキャッチ画像">
                                    </picture>
                                </div>
                                <div class="c-caseCard__comment">
                                    <strong>開発者コメント</strong> ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                                </div>
                            </div>
                        </div>
                        <div class="p-viewCase__card">
                            <div class="c-caseCard">
                                <div class="c-caseCard__wrap">
                                    <div class="c-caseCard__content">
                                        <h3 class="c-caseCard__title">製品名</h3>
                                        <p class="c-caseCard__text c-text"> 製品の説明が入ります。ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミー </p>
                                    </div>
                                    <picture class="c-caseCard__img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/dummy.jpg" alt="アイキャッチ画像">
                                    </picture>
                                </div>
                                <div class="c-caseCard__comment">
                                    <strong>開発者コメント</strong> ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
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