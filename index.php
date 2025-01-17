<!DOCTYPE html>
<html lang="ja">
	<head>
		<!-- サイト情報 -->
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
		<title>あいおいニッセイ同和損保｜採用サイト</title>
		<meta name="description" content="あいおいニッセイ同和損保の採用サイトです。" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="format-detection" content="telephone=no" />

		<!-- OG -->
		<meta property="og:type" content="website" />
		<meta property="og:title" content="あいおいニッセイ同和損保｜採用サイト" />
		<meta
			property="og:description"
			content="あいおいニッセイ同和損保の採用サイトです。"
		/>
		<meta 
			property="og:image"
			content="http://eishin-develop.sakura.ne.jp/aioi/assets/images/favicons/ogp.jpg"
		/>

		<!-- favicon -->
		<link rel="icon" href="assets/images/favicons/favicon.ico" />

		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="assets/images/favicons/apple-touch-icon.webp"
		/>

		<!-- font -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@0;1&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

		<!-- css -->
		<link rel="stylesheet" href="./assets/css/style.min.css">

	</head>
	<body>

		<!-- ローディング画面 -->
		<div class="l-loader" id="loader">
      <div class="l-loader__content" id="loader-spiner"></div>
    </div>

		<!-- header -->
		<header class="l-header" id="header">
			<div class="l-header-container">
				<h1 class="l-header__logo">
					<a class="l-header__logo__link" href="./index.php">
						<img src="./assets/images/logo.webp" alt="">
					</a>
				</h1>
				<nav class="l-header-right page-link">
					<ul class="l-header-right-list">
						<li class="l-header-right-list__item">
							<a class="l-header-right-list__item__link" href="#industory">
								保険業界について
							</a>
						</li>
						<li class="l-header-right-list__item">
							<a class="l-header-right-list__item__link" href="#consultant">
								保険コンサルタントとは
							</a>
						</li>
						<li class="l-header-right-list__item">
							<a class="l-header-right-list__item__link" href="#support">
								独立支援制度
							</a>
						</li>
						<li class="l-header-right-list__item">
							<a class="l-header-right-list__item__link" href="#people">
								働く人
							</a>
						</li>
						<li class="l-header-right-list__item">
							<a class="l-header-right-list__item__link" href="#question">
								よくある質問
							</a>
						</li>
					</ul>
					<a class="c-btn --contact" href="#contact">
						<img class="mail-icon" src="./assets/images/mailIcon.svg" alt="">
						<span>お問い合わせ</span>
					</a>
				</nav>
				<button class="l-header-hamburger" id="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
			<nav class="l-header-modal page-link" id="navigation">
				<div class="l-header-modal-container">
					<ul class="l-header-modal-list">
						<li class="l-header-modal-list-item">
							<a href="#industory" class="l-header-modal-list-item__link">
								保険業界について
							</a>
						</li>
						<li class="l-header-modal-list-item">
							<a href="#consultant" class="l-header-modal-list-item__link">
								保険コンサルタントとは
							</a>
						</li>
						<li class="l-header-modal-list-item">
							<a href="#support" class="l-header-modal-list-item__link">
								独立支援制度
							</a>
						</li>
						<li class="l-header-modal-list-item">
							<a href="#people" class="l-header-modal-list-item__link">
								働く人
							</a>
						</li>
						<li class="l-header-modal-list-item">
							<a href="#question" class="l-header-modal-list-item__link">
								よくある質問
							</a>
						</li>
					</ul>
					<a class="c-btn --contact" href="#contact">
						<img class="mail-icon" src="./assets/images/mailIcon.svg" alt="">
						<span>お問い合わせ</span>
					</a>
					<ul class="l-header-modal-ex">
						<li class="l-header-modal-ex-item">
							<a class="l-header-modal-ex-item__link" href="https://www.aioinissaydowa.co.jp/" target="_blank" rel="noopener noreferrer">
								<img class="l-header-modal-ex-item__link__icon" src="./assets/images/exLink.webp" alt="">
								<span class="l-header-modal-ex-item__link__txt">
									あいおいニッセイ同和損保
								</span>
							</a>
						</li>
						<li class="l-header-modal-ex-item">
							<a class="l-header-modal-ex-item__link" href="https://www.aioinissaydowa.co.jp/corporate/policy/privacy.html" target="_blank" rel="noopener noreferrer">
								<img class="l-header-modal-ex-item__link__icon" src="./assets/images/exLink.webp" alt="">
								<span class="l-header-modal-ex-item__link__txt">
									個人情報保護方針
								</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- 画面下固定ボタン -->
		<div class="c-bottom-btn page-link" id="bottom-fixed-btn">
			<a class="c-bottom-btn__content" href="#contact">
				<span class="c-bottom-btn__content__triangle"></span>
				まずは話を聞いてみる
			</a>
		</div>

		<!-- main -->
		<main style="overflow: hidden;">
			<section class="p-mv" id="mv">
				<h1 class="p-mv__title js-split" id="main-title">
					未経験から、<br class="u-for-sm">保険のプロへ。<br>
					あいおいで保険コンサルタントになろう。
				</h1>
				<div class="p-mv-bottom">
					<div class="p-mv-bottom-left page-link" id="main-appeal">
						<img class="p-mv-bottom-left__badge" src="./assets/images/mvBadge.webp" alt="">
						<a class="c-btn --hear" href="#contact">
							<span class="triangle"></span>
							<span>まずは話を聞いてみる</span>
						</a>
					</div>
					<div class="p-mv-bottom-right" id="main-img">
						<img class="p-mv-bottom-right__content" src="./assets/images/mv.webp" alt="">
					</div>
				</div>
			</section>
			<section class="p-industory" id="industory">
				<div class="c-bg"></div>
				<div class="p-industory-container container">
					<h2 class="c-section-title c-fade-in js-animate-content">
						<span class="en">
							Insurance industry
						</span><br>
						<span class="ja">
							保険業界について
						</span>
					</h2>
					<ul class="p-industory-list">
						<li class="p-industory-item c-fade-in js-animate-content">
							<span class="c-number">
								01
							</span>
							<picture class="p-industory-item__img">
								<source srcset="./assets/images/sm/industory01.webp" media="(max-width: 520px)" />
								<img src="./assets/images/industory01.webp" alt="">
							</picture>
							<div class="p-industory-item-bottom">
								<div class="p-industory-item-bottom-container">
									<h3 class="p-industory-item__title">
										圧倒的なやりがい
									</h3>
									<p class="p-industory-item__txt">
										一人ひとりの「人生」に寄り添う提案ができるので、直接「ありがとう」をもらえる機会も多く、やりがいは他業種と比べても圧倒的に高いのが特徴です。
									</p>
								</div>
							</div>
						</li>
						<li class="p-industory-item c-fade-in js-animate-content">
							<span class="c-number">
								02
							</span>
							<picture class="p-industory-item__img">
								<source srcset="./assets/images/sm/industory02.webp" media="(max-width: 520px)" />
								<img src="./assets/images/industory02.webp" alt="">
							</picture>
							<div class="p-industory-item-bottom">
								<div class="p-industory-item-bottom-container">
									<h3 class="p-industory-item__title">
										知識・経験が生活に活きる
									</h3>
									<p class="p-industory-item__txt">
										保険に関する知識や経験は普段のあなたの生活でも役に立つことばかりなので、仕事を頑張ることで、実生活がより充実すること間違いなし、です。
									</p>
								</div>
							</div>
						</li>
						<li class="p-industory-item c-fade-in js-animate-content">
							<span class="c-number">
								03
							</span>
							<picture class="p-industory-item__img">
								<source srcset="./assets/images/sm/industory03.webp" media="(max-width: 520px)" />
								<img src="./assets/images/industory03.webp" alt="">
							</picture>
							<div class="p-industory-item-bottom">
								<div class="p-industory-item-bottom-container">
									<h3 class="p-industory-item__title">
										世の中に必要な業界
									</h3>
									<p class="p-industory-item__txt">
										将来の予測が困難なVUCAの時代ではあらゆるリスクに備える必要があり、『保険』の価値は今後ますます高まってくると想定されます。
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<section class="p-consultant" id="consultant">
				<div class="p-consultant-container container">
					<h2 class="c-section-title c-fade-in js-animate-content">
						<span class="en">
							Insurance consultant
						</span><br>
						<span class="ja">
							保険コンサルタントとは
						</span>
					</h2>
					<a class="p-consultant-video js-modal-open c-fade-in js-animate-content" data-target="modal01">
						<img class="" src="./assets/images/video.webp" alt="">
					</a>
					<!-- モーダル -->
					<div class="p-consultant-modal js-modal is-close" id="modal01">
						<button class="c-modal-btn js-modal-close js-modal-close">
						</button>
						<div class="c-modal-cover js-modal-close"></div>
						<div class="p-consultant-modal__content">
							<iframe class="js-youtube" data-youtube="https://player.vimeo.com/video/475738270" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" src="https://player.vimeo.com/video/475738270"></iframe>
						</div>
					</div>
					<!-- モーダル終了 -->
				</div>
			</section>
			<section class="p-support" id="support">
				<picture class="p-support__bg">
					<source srcset="./assets/images/sm/supportBg.webp" media="(max-width: 520px)" />
					<img src="./assets/images/supportBg.webp" alt="">
				</picture>
				<div class="p-support-container container">
					<div class="p-support__lines --long js-animate-content js-action-every"></div>
					<div class="p-support__lines --short js-animate-content js-action-every"></div>
					<h2 class="c-section-title c-fade-in js-animate-content">
						<span class="en">
							Support system
						</span><br>
						<span class="ja">
							独立支援制度のご紹介
						</span>
					</h2>
					<div class="p-support-middle">
						<div class="p-support-middle__img c-fade-in js-animate-content">
							<img src="./assets/images/supportWomen.webp" alt="">
						</div>
						<div class="p-support-middle-right">
							<h3 class="p-support-middle__title c-fade-in js-animate-content">
								〜 IPA社員制度（独立型）〜
							</h3>
							<p class="p-support-middle__txt c-fade-in js-animate-content">
								業界未経験からプロフェッショナルな保険コンサルタントを養成するための最長５年間の研修プログラムをご用意。<br>
								（研修期間も給与は支給）プログラム修了後は代理店として独立することも可能です。
							</p>
						</div>
					</div>
					<picture class="p-support-bottom c-fade-in js-animate-content">
						<source srcset="./assets/images/sm/supportFlow.webp" media="(max-width: 520px)" />
						<img src="./assets/images/supportFlow.webp" alt="">
					</picture>
				</div>
			</section>
			<section class="p-people" id="people">
				<div class="c-bg --people"></div>
				<div class="p-people-container container">
					<h2 class="c-section-title c-fade-in js-animate-content">
						<span class="en">
							People
						</span><br>
						<span class="ja">
							働く人
						</span>
					</h2>
					<ul class="p-people-list">
						<li class="p-people-item c-fade-in js-animate-content">
							<a class="p-people-item__link js-modal-open" data-target="modal02">
								<span class="c-number">
									01
								</span>
								<picture class="p-people-item-top">
									<source srcset="./assets/images/sm/people01.webp" media="(max-width: 520px)" />
									<img src="./assets/images/people01.webp" alt="">
									<span class="p-people-item-top__arrow">
										<span class="p-people-item-top__arrow__content">
											<img src="./assets/images/lines.svg" alt="">
										</span>
									</span>
								</picture>
								<div class="p-people-item-bottom">
									<div>
										<h3 class="p-people-item__name">
											<span class="p-people-item__name__ja">
												平野 毅
											</span>
											<span class="p-people-item__name__en">
												Takeshi Hirano
											</span>
										</h3>
										<p class="p-people-item__belong">
											東京中央支店 営業開発課　(取材当時)
										</p>
									</div>
								</div>
							</a>
						</li>
						<li class="p-people-item c-fade-in js-animate-content">
							<a class="p-people-item__link js-modal-open" data-target="modal03">
								<span class="c-number">
									02
								</span>
								<picture class="p-people-item-top">
									<source srcset="./assets/images/sm/people02.webp" media="(max-width: 520px)" />
									<img src="./assets/images/people02.webp" alt="">
									<span class="p-people-item-top__arrow">
										<span class="p-people-item-top__arrow__content">
											<img src="./assets/images/lines.svg" alt="">
										</span>
									</span>
								</picture>
								<div class="p-people-item-bottom">
									<div>
										<h3 class="p-people-item__name">
											<span class="p-people-item__name__ja">
												後藤 真結
											</span>
											<span class="p-people-item__name__en">
												Mayu Goto
											</span>
										</h3>
										<p class="p-people-item__belong">
											金沢支店 金沢第一支社　(取材当時)
										</p>
									</div>
								</div>
							</a>
						</li>
					</ul>
					<ul class="p-people-modal">
						<li class="p-people-modal-item js-modal is-close" id="modal02">
							<button class="c-modal-btn --people js-modal-close">
							</button>
							<div class="c-modal-cover js-modal-close"></div>
							<div class="p-people-modal-item-container">
								<button class="p-people-modal-item__btn js-modal-close">
								</button>
								<div class="p-people-modal-item-top">
									<div class="p-people-modal-item-top-profile">
										<picture class="p-people-modal-item-top-profile-left">
											<img class="p-people-modal-item-top-profile-left__txt" src="./assets/images/modalHiranoTopTxt.webp" alt="">
											<img src="./assets/images/modalHiranoTop.webp" alt="">
										</picture>
										<div class="p-people-modal-item-top-profile-right">
											<div class="p-people-modal-item-top-profile-right-top">
												<span class="p-people-modal-item-top-profile-right-top__profile">Profile</span>
												<h2 class="p-people-modal-item-top-profile-right-top__name">
													<span class="p-people-modal-item-top-profile-right-top__name__ja">平野 毅</span>
													<span class="p-people-modal-item-top-profile-right-top__name__en">Takeshi Hirano</span>
												</h2>
												<p class="p-people-modal-item-top-profile-right-top__belong">
													東京中央支店 営業開発課　(取材当時)
												</p>
											</div>
											<div class="p-people-modal-item-top-profile-right-bottom">
												<p class="p-people-modal-item-top-profile-right-bottom__txt">
													生命保険代理店の営業職を経て、2015年6月に入社。<br class="u-for-md">
													独立を目標に、常にお客さまの成長にプラスになるような 保険サービスの提案を心掛けている。
												</p>
											</div>
										</div>
									</div>
									<h3 class="p-people-modal-item-top__title">
										変化の激しい時代だからこそ<br>
										お客さまをあらゆるリスクから守る取り組みを
									</h3>
									<p class="p-people-modal-item-top__txt">
										私は生命保険の代理店へ就職したのをきっかけに、保険業界に携わるようになりました。当時は先輩と一緒にお客さまの対応をすることが多かったのですが、先輩がお客さまととても良好な関係を築いていて「私もこんな関係性を作っていきたい」「そのためには損害保険や法律・税務を改めて勉強することが必要」と感じるようになりました。また独立する先輩も多く、「自分もいずれはお客さまにあらゆる提案のできる代理店を経営したい」と考え、転職を決意しました。<br>
										<br>
										転職をする上で選択肢はいくつかありましたが、一番の決め手となったのは「人」でした。前職時代に付き合いのあったあいおいニッセイ同和損保の営業社員の方が、仕事面はもちろん、人間的にもとても尊敬でき、ぜひその方と一緒に仕事をしたいと思ったのが入社の大きな理由です。<br>
										<br>
										「保険コンサルタント」の役割は、保険サービスでリスクをカバーすることによって、お客さまが何かにチャレンジするきっかけを作ることだと思っています。実際に、課題を抱えているお客さまに対して、成長にプラスになるような保険サービスを提供できたときはやりがいを感じます。お客さまから「保険があるからチャレンジできた」「保険があるから安心できた」という言葉を掛けていただけると、保険で守れるものがあるのだと誇りを持てます。激しく環境が変化するこの時代に、お客さまをすべてのリスクから守ることは難しいかもしれません。でも、ほかの業種の方、専門家の方とも密に連携し、協力しながら、お客さまをあらゆるリスクから守っていけるよう、これからも取り組んでいきたいと思います。
									</p>
								</div>
								<div class="p-people-modal-item-bottom">
									<div class="p-people-modal-item-bottom__left">
										<img class="p-people-modal-item-bottom__left__txt" src="./assets/images/modalHiranoBottomTxt.webp" alt="">
										<img src="./assets/images/modalHiranoBottom.webp" alt="">
										<span class="p-people-modal-item-bottom__left__desc">
											平野社員の奥さま
										</span>
									</div>
									<div class="p-people-modal-item-bottom__right">
										<h3 class="p-people-modal-item-bottom__right__title">
											不安を解消したのは、<br class="u-for-md">
										「夫を応援したい」という想いでした。
										</h3>
										<p class="p-people-modal-item-bottom__right__txt">
											私自身も転職経験があったので、夫から転職の話を聞いたときにネガティブな印象は持ちませんでした。しかし、収入への不安と、果たして在籍基準を達成し5年間働けるのだろうか、という漠然とした不安は感じました。ただ、転勤がないことは家族として安心ですし、何より本人の希望をかなえてあげたいという思いが強かったです。前職で営業をしていたときも楽しそうに働いていましたし、転職で営業職としてさらに上を目指せるなら、全面的にサポートしたいと思いました。転職後は、本人のペースで仕事配分ができるようになり、自由に使える時間も増えました。それで子育てに積極的に参加してくれるようになったのは、家族としてうれしいことで、本人も無理なく働けているのだと感じています。<br>
											<br>
											今後独立した際には、モチベーションや目標の置き方を自分自身で組み立てる必要があります。大変だと思いますが、コンサルティング営業として学んだ経験を活かし、これからも社会における重要な役割を担っていってほしいです。
										</p>
									</div>
								</div>
							</div>
						</li>
						<li class="p-people-modal-item js-modal is-close" id="modal03">
							<button class="c-modal-btn --people js-modal-close">
							</button>
							<div class="c-modal-cover js-modal-close"></div>
							<div class="p-people-modal-item-container">
								<button class="p-people-modal-item__btn js-modal-close">
								</button>
								<div class="p-people-modal-item-top">
									<div class="p-people-modal-item-top-profile">
										<picture class="p-people-modal-item-top-profile-left">
											<img class="p-people-modal-item-top-profile-left__txt --goto" src="./assets/images/modalGotoTopTxt.webp" alt="">
											<img src="./assets/images/modalGotoTop.webp" alt="">
										</picture>
										<div class="p-people-modal-item-top-profile-right">
											<div class="p-people-modal-item-top-profile-right-top">
												<span class="p-people-modal-item-top-profile-right-top__profile">Profile</span>
												<h2 class="p-people-modal-item-top-profile-right-top__name">
													<span class="p-people-modal-item-top-profile-right-top__name__ja">後藤 真結</span>
													<span class="p-people-modal-item-top-profile-right-top__name__en">Mayu Goto</span>
												</h2>
												<p class="p-people-modal-item-top-profile-right-top__belong">
													金沢支店 金沢第一支社　(取材当時)
												</p>
											</div>
											<div class="p-people-modal-item-top-profile-right-bottom">
												<p class="p-people-modal-item-top-profile-right-bottom__txt">
													営業未経験ながら保険業界へ転身。代理店から、あいおいニッセイ同和損保へ出向して、提携する自動車販売店顧客への自動車保険、火災保険の提案に励んでいる。
												</p>
											</div>
										</div>
									</div>
									<h3 class="p-people-modal-item-top__title">
										保険料以上に価値のある「安心」を届ける<br>
										それが私の使命です
									</h3>
									<p class="p-people-modal-item-top__txt">
										前職ではバトントワリングのインストラクターという、保険とは全くかけ離れた仕事をしていました。地元に戻って働ける仕事を探していたところ、父の保険を担当している代理店を紹介され、この業界に入りました。現在は代理店からの出向者として、保険商品や営業手法を学んでいます。入社直後は初めてのことばかりで難しいと感じることが多かったですね。本当に人前で保険の提案ができるか不安でしたが、トレーニングセンターで商品学習とロープレを繰り返すうちに、お客さまから「分かりやすい説明だった」と言ってもらえるまでになりました。<br>
										<br>
										私は自動車保険を扱うことが多いのですが、万一事故が起きてしまった際に「この保険に入っていてよかった」と言っていただいた際には、きちんとした補償内容の保険を提案できてよかった、保険で守れるものがあるのだ、と強く感じます。現在は、比較的安価なネット型保険に加入しているお客さまも多く、切り替えの提案は大変ですが、テレマティクス自動車保険や24時間365日事故対応など先進性と充実したサービスを訴求して、保険料だけではなく補償内容に興味を持ってもらえるようにしています。<br>
										<br>
										今後は自動車保険でお付き合いの始まったお客さまに対して、火災保険を主とした自然災害への備え提案を進めていきます。出向期間はもうすぐ終わりますが、研修で学んだことを活かして、代理店でさらに活躍していきたいと思います。
									</p>
								</div>
								<div class="p-people-modal-item-bottom">
									<div class="p-people-modal-item-bottom__left">
										<img class="p-people-modal-item-bottom__left__txt --goto" src="./assets/images/modalGotoBottomTxt.webp" alt="">
										<img src="./assets/images/modalGotoBottom.webp" alt="">
										<span class="p-people-modal-item-bottom__left__desc">
											提携する自動車販売会社社長
										</span>
									</div>
									<div class="p-people-modal-item-bottom__right">
										<h3 class="p-people-modal-item-bottom__right__title">
											いつも明るく誠実に<br>
											お客さまに接してもらっています。
										</h3>
										<p class="p-people-modal-item-bottom__right__txt">
											ご来店されるお客さま一人ひとり丁寧に挨拶し、しっかりと保険証券診断、加入提案をしてもらっているので、私どもも安心して彼女に任せることができます。また、当社のスタッフにも気さくに声を掛けたり、自ら無料相談をアピールする店舗装飾を作成する姿は、とても前向きで感心させられます。<br>
											<br>
											おかげさまで後藤さんに担当していただいて以降、保険の取り扱いも多くなりました。お客さまの評価も高く、わずかなことでも連絡を欠かさず進めてくれるので、これからも後藤さんと一緒に保険募集をしていく予定です。
										</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<section class="p-pitch" id="pitch">
				<div class="p-pitch-container container">
					<h2 class="p-pitch__title c-fade-in js-animate-content">
						Get to Know us.
					</h2>
					<p class="p-pitch__txt c-fade-in js-animate-content">
						下記のスライドにて、当社についてより詳しく確認していただけます。
					</p>
					<div class="p-pitch__content c-fade-in js-animate-content">
						<img src="./assets/images/pitch.webp" alt="">
					</div>
				</div>
			</section>
			<section class="p-question" id="question">
				<picture class="p-question__bg">
					<source srcset="./assets/images/sm/questionBg.webp" media="(max-width: 520px)" />
					<img src="./assets/images/questionBg.webp" alt="">
				</picture>
				<div class="p-question-container container">
					<h2 class="c-section-title c-fade-in js-animate-content">
						<span class="en">
							Q＆A
						</span><br>
						<span class="ja">
							よくある質問
						</span>
					</h2>
					<dl class="p-question-item js-accordion c-fade-in js-animate-content">
						<dt class="p-question-item__head js-accordion-head">
							<img class="p-question-item__head__icon" class="" src="./assets/images/questionIcon.webp" alt="">
							<span class="p-question-item__head__txt">
								業界未経験ですが、すぐに活躍できますか？
							</span>
							<button class="p-question-item__head__batu js-head-btn"></button>
						</dt>
						<dd class="p-question-item__content js-accordion-content">
							<p>
								大丈夫です！マーケット開拓の先任者から様々な研修を受けることができるので、全くの業界未経験者であっても高い提案力を養うことが可能です。
							</p>
						</dd>
					</dl>
					<dl class="p-question-item js-accordion c-fade-in js-animate-content">
						<dt class="p-question-item__head js-accordion-head">
							<img class="p-question-item__head__icon" class="" src="./assets/images/questionIcon.webp" alt="">
							<span class="p-question-item__head__txt">
								飛び込み営業はありますか？
							</span>
							<button class="p-question-item__head__batu js-head-btn"></button>
						</dt>
						<dd class="p-question-item__content js-accordion-content">
							<p>
								ないです。マーケット開拓の手法としてはダイレクトメール郵送後に、電話によるアポイントの取り付けを行っており、その後に訪問して営業活動を実施していただいています。
							</p>
						</dd>
					</dl>
					<dl class="p-question-item js-accordion c-fade-in js-animate-content">
						<dt class="p-question-item__head js-accordion-head">
							<img class="p-question-item__head__icon" class="" src="./assets/images/questionIcon.webp" alt="">
							<span class="p-question-item__head__txt">
								ノルマはありますか？
							</span>
							<button class="p-question-item__head__batu js-head-btn"></button>
						</dt>
						<dd class="p-question-item__content js-accordion-content">
							<p>
								3ヶ月毎の在籍基準を設けています。決してハードルは高くないですが、基準の詳細については面接時にしっかりとお伝えしますのでご安心ください。
							</p>
						</dd>
					</dl>
				</div>
			</section>
			<section class="l-contact" id="contact">
				<div class="l-contact-container container">
					<h2 class="c-section-title c-fade-in js-animate-content">
						<span class="en">
							Contact
						</span><br>
						<span class="ja">
							お問い合わせ
						</span>
					</h2>
					<p class="l-contact__caution c-fade-in js-animate-content">
						お気軽にお問い合わせくださいませ。<br class="u-for-sm">下記の項目は、全て入力必須です。
					</p>
					<picture class="c-progress c-fade-in js-animate-content">
						<source srcset="./assets/images/sm/progress.webp" media="(max-width: 520px)" />
						<img src="./assets/images/progress.webp" alt="">
					</picture>
					<div class="l-contact-form">
						<form action="./confirm.php" method="post">
							<ul class="l-contact-form-list">
								<li class="l-contact-form-item c-fade-in js-animate-content">
									<p class="l-contact-form-item__head">
										お名前
									</p>
									<div class="l-contact-form-item__body">
										<input name="name" class="l-contact-form-item__body__input" type="text" placeholder="山田 太郎" required>
									</div>
								</li>
								<li class="l-contact-form-item c-fade-in js-animate-content">
									<p class="l-contact-form-item__head">
										フリガナ
									</p>
									<div class="l-contact-form-item__body">
										<input name="kana" class="l-contact-form-item__body__input" type="text" placeholder="ヤマダ タロウ" required>
									</div>
								</li>
								<li class="l-contact-form-item c-fade-in js-animate-content">
									<p class="l-contact-form-item__head">
										電話番号
									</p>
									<div class="l-contact-form-item__body">
										<input name="tel" class="l-contact-form-item__body__input" type="tel" placeholder="012-3456-7891" required>
									</div>
								</li>
								<li class="l-contact-form-item c-fade-in js-animate-content">
									<p class="l-contact-form-item__head">
										メールアドレス
									</p>
									<div class="l-contact-form-item__body">
										<input name="email" class="l-contact-form-item__body__input" type="email" required>
									</div>
								</li>
								<li class="l-contact-form-item c-fade-in js-animate-content">
									<p class="l-contact-form-item__head">
										メールアドレス(確認用)
									</p>
									<div class="l-contact-form-item__body">
										<input name="email_confirm" class="l-contact-form-item__body__input" type="email" required>
									</div>
								</li>
								<li class="l-contact-form-item c-fade-in js-animate-content">
									<p class="l-contact-form-item__head">
										年齢
									</p>
									<div class="l-contact-form-item__body">
										<input name="age" class="l-contact-form-item__body__input --age" type="text" placeholder="20" required>
										<span class="l-contact-form-item__body__unit">歳</span>
									</div>
								</li>
							</ul>
							<label class="l-contact-form-agree c-fade-in js-animate-content">
								<input class="l-contact-form-agree__checkbox" type="checkbox" required>
								<span class="l-contact-form-agree__txt">
									<a class="l-contact-form-agree__txt__link" href="https://www.aioinissaydowa.co.jp/corporate/policy/privacy.html" target="_blank" rel="noopener noreferrer">
										個人情報保護方針
									</a>
									に同意する
								</span>
							</label>
							<button class="l-contact-form__btn c-fade-in js-animate-content" type="submit">
								<span>
									確認する
								</span>
							</button>
						</form>
					</div>
				</div>
			</section>
		</main>

		<!-- footer -->
		<footer class="l-footer js-footer" id="footer">
			<div class="l-footer-container container">
				<div class="l-footer-top">
					<h1 class="l-footer__logo">
						<a class="l-footer__logo__link" href="./index.php">
							<img src="./assets/images/logo.webp" alt="">
						</a>
					</h1>
					<ul class="l-footer-links page-link">
						<div class="l-footer-links-line">
							<li class="l-footer-links-item">
								<a class="l-footer-links-item__link" href="#industory">
									保険業界について
								</a>
							</li>
							<li class="l-footer-links-item">
								<a class="l-footer-links-item__link" href="#consultant">
									保険コンサルタントとは
								</a>
							</li>
						</div>
						<div class="l-footer-links-line">
							<li class="l-footer-links-item">
								<a class="l-footer-links-item__link" href="#support">
									独立支援制度
								</a>
							</li>
							<li class="l-footer-links-item">
								<a class="l-footer-links-item__link" href="#people">
									働く人
								</a>
							</li>
						</div>
						<div class="l-footer-links-line">
							<li class="l-footer-links-item">
								<a class="l-footer-links-item__link" href="#question">
									よくある質問
								</a>
							</li>
							<li class="l-footer-links-item">
								<a class="l-footer-links-item__link" href="#contact">
									お問い合わせ
								</a>
							</li>
						</div>
					</ul>
				</div>
				<ul class="l-footer-ex">
					<li class="l-footer-ex-item">
						<a class="l-footer-ex-item__link" href="https://www.aioinissaydowa.co.jp/" target="_blank" rel="noopener noreferrer">
							<img class="l-footer-ex-item__link__icon" src="./assets/images/exLink.webp" alt="">
							<span class="l-footer-ex-item__link__txt">
								あいおいニッセイ同和損保
							</span>
						</a>
					</li>
					<li class="l-footer-ex-item">
						<a class="l-footer-ex-item__link" href="https://www.aioinissaydowa.co.jp/corporate/policy/privacy.html" target="_blank" rel="noopener noreferrer">
							<img class="l-footer-ex-item__link__icon" src="./assets/images/exLink.webp" alt="">
							<span class="l-footer-ex-item__link__txt">
								個人情報保護方針
							</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="l-footer-copyright">
				<div class="l-footer-copyright-container">
					<small class="l-footer-copyright__txt">
						&copy; Aioi Nissay Dowa Insurance Co., Ltd. All rights reserved.
					</small>
				</div>
			</div>
		</footer>
	</body>

	<!-- script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="module" src="./assets/js/index.js"></script>

</html>
