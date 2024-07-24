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
                            <p class="p-subMv__en">INTERVIEW</p>
                            <h1 class="p-subMv__ja">先輩の声</h1>
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
                            <a itemprop="item" href="<?php echo $recruit; ?>">
                                <span itemprop="name">採用情報</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <span itemprop="name">先輩の声</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-interview">
            <div class="p-interview">
                <div class="p-interview__inner l-inner">
                    <div class="p-interview__blocks">
                        <div class="p-interview__block">
                            <div class="p-interviewBlock">
                                <h2 class="p-interviewBlock__title">InTERVIEW #01</h2>
                                <div class="p-interviewBlock__wrap">
                                    <picture class="p-interviewBlock__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/interview_01.webp" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/interview_01.jpg" alt="">
                                    </picture>
                                    <div class="p-interviewBlock__prof">
                                        <p class="p-interviewBlock__name">井谷 研（イタニ　ケン）</p>
                                        <div class="p-interviewBlock__info">
                                            <p><span>【入社年】</span>2008年入社16年目/キャリア採用</p>
                                            <p><span>【所属】</span>製造部</p>
                                            <p><span>【担当】</span>繊維加工剤の生産、在庫管理、発送</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-interviewBlock__units">
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>01</span>会社に入社した経緯を教えてください。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 前職は通信関係の営業をしており、転職する時に、今まで全く知らなかった化学の会社に入り、少しでも知識を増やしたいと思い入社を決意しました。 その際に研修も兼ねて様々な部署を経験させてもらい、現在は製造現場での業務にあたっています。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>02</span>現在の業務内容について教えてください。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 製造業務をしています。 製造業務というと、単調な作業と思われやすいですが、製造、出荷、製品の在庫管理や原料の発注、原料管理まで幅広くやらせてもらっています。研究職の方とコミュニケーションを取りながら製造していきます。トレンドや製品の発注変化にも対応しながら、原料の発注・在庫管理と自身でスケジュールを立てながら業務にあたっています。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>03</span>今の仕事でやりがいを感じるポイントを教えてください。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 一つ一つの製品が、他部署の方と連携し調整を繰り返しながら、より良い製品を目指して手をかけて造っています。 新たな製品の製造など、自分に新しいことが出来るようになった時にやりがいを感じます。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>04</span>この会社への入社を志望している方へ一言お願いします。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 僕は先輩社員の方に相談してみたり、上司に相談してみたりして壁を乗り越えてきました。<br>そこから自分の成長に繋がることもありました。 人からもらった言葉や知識は大事にするようにしています。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>05</span>どんな人が会社に向いていると思いますか。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 何かを造り生み出すのが好きな人。 黙々と真剣に作業したい人。 基本的に残業がないので、自分のプライベートの時間をしっかりと充実させたい人。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>06</span>休日の過ごし方は？
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 僕は家族と出掛ける事が多いです。公園に行ったり他府県の観光しに行ったりするのが好きなので休日も充実してます。 たまに先輩社員と食事に行くこともありますので、日頃ゆっくり話せないことでも向き合って相談を聞いてもらってます。 カレンダー通りの休みなので計画を建てられやすいと思います。 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-interview__block">
                            <div class="p-interviewBlock">
                                <h2 class="p-interviewBlock__title --left">InTERVIEW #02</h2>
                                <div class="p-interviewBlock__wrap --row">
                                    <picture class="p-interviewBlock__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/interview_02.webp" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/interview_02.jpg" alt="">
                                    </picture>
                                    <div class="p-interviewBlock__prof">
                                        <p class="p-interviewBlock__name">山田 瑞穂（ヤマダ　ミズホ）</p>
                                        <div class="p-interviewBlock__info">
                                            <p><span>【入社年】</span>2017年 入社7年目/キャリア採用</p>
                                            <p><span>【所属】</span>技術開発部</p>
                                            <p><span>【担当】</span>ウレタン樹脂開発補佐、品質管理、依頼試験​</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-interviewBlock__units">
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>01</span>文系or理系と、前職内容を教えて頂けますか。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 文系で、前職は会計事務です。採用では、技術開発部に配属となりました。<br>化学に対する知識は一切なかったため不安はあったものの、先輩たちが一から丁寧に教えてくださり、問題なく業務にあたることができました。現在では、各種製品の試験や品質管理も担当し知識を増やしています。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>02</span>入社後に担当したプロジェクトで印象に残っているものを教えてください。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 開発担当者とともに試作と試験を繰り返し、数年かけて開発したウレタン樹脂の性能がお客様に好評で、売り上げに繋がったこと。補佐という立場ではありますが、自分の日頃の試験が開発の役に立っているのだと実感しました。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>03</span>仕事で壁にぶつかったときどのように解決していますか。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 試験の結果があまり良くない場合、生地の種類や測定環境の変化など、様々な要因が考えられます。そういったときは、改めて過去のデータを見直し、原因を考えます。上司や先輩方とも逐一相談し、アドバイスをもらいながら進めています。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>04</span>チャレンジしてみたい業務やプロジェクトはありますか。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 開発補佐から開発担当者になられた方も大勢いらっしゃいます。私も日々知識を吸収し、いつか先輩方のように開発担当者として業務にあたりたいです。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>05</span>休日の過ごし方は？
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> ありがたいことに仲の良い同期や先輩がいて、休日にもお会いすることがあります。また、私はライブに行くのが好きなので、平日のときは有休を取得し、会場へ行くこともあります。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>06</span>この会社へ入社を希望している人へ一言
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 化学の知識がないと難しそうと思われるかもしれませんが、少しずつ学んでいける環境が整っているので問題ありません。私もまだまだ勉強中の身です。一緒に学んでいきましょう。 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-interview__block">
                            <div class="p-interviewBlock">
                                <h2 class="p-interviewBlock__title">InTERVIEW #03</h2>
                                <div class="p-interviewBlock__wrap">
                                    <picture class="p-interviewBlock__img">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/interview_03.webp" type="image/webp" />
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/interview_03.jpg" alt="">
                                    </picture>
                                    <div class="p-interviewBlock__prof">
                                        <p class="p-interviewBlock__name">竹内 勇人（タケウチ　ハヤト）</p>
                                        <div class="p-interviewBlock__info">
                                            <p><span>【入社年】</span>2021年 入社3年目/キャリア採用</p>
                                            <p><span>【所属】</span>営業課</p>
                                            <p><span>【担当】</span>繊維加工剤の営業ならびに新規事業開拓</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-interviewBlock__units">
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>01</span>会社に入社した経緯を教えてください。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> もともと販売職を10年しており、これからの人生を考えた時に漠然と「転職」を考えました。そんななか「化学薬剤メーカ―」ってなんだかカッコイイ！というのと、土日が休みであるという単純な理由で会社に興味を持ちました。そんな理由ではありましたが、大原パラヂウムの事を調べると、自分の生活に身近な製品に使われている事、生活を豊かにしてくれている事を知り、必ず今後も世の中で必要とされる仕事だと思い入社を志しました。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>02</span>現在の業務内容について教えてください。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 主に繊維系の商社様に対するBtoBの営業です。<br>世の中のブームにアンテナを張り、それらから予想されるニーズに対して薬剤を提案します。後は事業開拓チームとして、新たなビジネスの種を探す事も行っています。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>03</span>入社後に担当したプロジェクトで印象に残っているものを教えてください。
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 現在も携わっている『サンチシル』という繊維を通じて地方創生を担うプロジェクトに一番思い入れがあります。各地の生産者様に話を聞き、その思いを最終商品につなげていく。難しい事も多いですが、やりがいのあるプロジェクトです。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>04</span>休日の過ごし方は？
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 私は営業課にいますが、営業課の方はアウトドアが好きな方が多いですね。<br>私もアウトドアは大好きで、休みの日には家族でデイキャンプによく行きます。<br>後はここ数年サウナにはまって、会社の方と仕事終わりにサウナにいく事もあります。 </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>05</span>社内の雰囲気は？
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> やる時はやる！でも時にはしっかりゆるみます(笑)<br>それこそ最近の注目キャンプギアの話で盛り上がったりする事もありますね！ </p>
                                    </div>
                                    <div class="p-interviewBlock__unit">
                                        <p class="p-interviewBlock__q">
                                            <span>06</span>この会社へ入社を志望している方へ一言
                                        </p>
                                        <p class="p-interviewBlock__a c-text"> 私自身は全くの別業種から転職した人間ですので、不安な気持ちを持ちながら入社しました。ですが、質問しやすい先輩も多く、知識や技術は必ず後からついてきます。『化学薬剤のメーカー』というと難いイメージがありますが、先入観を持ちすぎずに挑戦をして頂きたいです！ </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/cv') ?>
    </main>
<?php get_footer(); ?>