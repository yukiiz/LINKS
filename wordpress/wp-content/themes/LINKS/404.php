<?php get_header() //header.phpを取得 
?>

<div class="404-Content">
    <section>
        <article>
            <div style="
							max-width: 600px;
							margin: 0 auto;
							padding: 0 0 100px  0;
							text-align: center;
						">
                <h1 class="title03">ページが見つかりません。</h1>
                <div style="
								max-width: 580px;
								margin: 0 auto;
								padding: 80px 15px 0 15px;
								text-align: left;
							">
                    <p>
                        指定されたウェブページが存在しない、またはファイルが存在しませんでした。
                    </p>
                    <p>他の場所に移動、もしくは削除された可能性があります。</p>
                    <p>アドレスを再度ご確認ください。</p>
                    <div style="
									max-width: 600px;
									margin: 0 auto;
									padding: 50px 0 0;
									text-align: center;
								">
                        <p>
                            <a href="<?php echo home_url('/'); ?>">TOPページに戻る ></a>
                        </p>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <!-- /#mainContent -->
</div>

<?php get_footer();