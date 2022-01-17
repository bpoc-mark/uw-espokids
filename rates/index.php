<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
    <meta charset="UTF-8" />
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="<?php echo CANONICAL ?>">
    <meta name="keywords" content="<?php echo KEY_WORD ?>">
    <meta name="description" content="<?php echo DESCRIPTION ?>">
    <meta property="og:title" content="<?php echo SITE_NAME ?>">
    <meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
    <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
    <meta property="og:url" content="<?php echo CANONICAL ?>" />

    <title><?php echo SITE_NAME ?></title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Rates">
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
    <div id="AllBox">
        <header>
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
        </header>

        <main>
            <section class="sect_1">
                <div class="wrapper">
                    <div class="content">
                    </div>
                </div>
            </section>
            <section class="sect_2">
                <div class="wrapper">
                    <div class="container">
                        <div class="content">
                            <div class="ttl_cont">
                                <picture>
                                    <source srcset="/images/rates/sect_2/sp/header_text_01.svg" media="(max-width: 899px)">
                                    <img src="/images/rates/sect_2/header_text_01.svg" class="ttl" alt="料金について">
                                </picture>
                                <img src="/images/common/header_dot.svg" class="dot" alt="Dot">
                                <p class="text">月額5,500円～ご要望に応じて日数、プランをご選択いただけます。</p>
                            </div>
                        </div>
                        <div class="img_ttl">
                            <img src="/images/rates/sect_2/img_ttl.png" alt="img header">
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_3">
                <div class="wrapper">
                    <div class="container border">
                        <div class="ttl">
                            <p>レギュラー会員 <br class="u-d-o-sp"><span>（毎週固定曜日の定期的なお預かり）</span></p>
                        </div>
                        <div class="content">
                            <div class="amount-setting">
                                <p class="amount-setting__ttl">
                                    レギュラー会員（毎週固定曜日の定期的なお預かり）の月会費は、<br> 基本会費+習い事+小学校へのお迎えの合計金額で決まります。
                                </p>
                                <ul class="amount-setting__row">
                                    <li class="yellow">
                                        <p>基本会費<br class="u-d-o-pc">お預かり代+おやつ代）</p>
                                    </li>
                                    <span class="u-d-o-pc">+</span>
                                    <li class="orange">
                                        <p>習い事 <br class="u-d-o-pc">（選択サービス）</p>
                                    </li>
                                    <span class="u-d-o-pc">+</span>
                                    <li class="green">
                                        <p>小学校へのお迎え<br class="u-d-o-pc">（選択サービス）</p>
                                    </li>
                                </ul>
                                <div class="amount-setting__btnArea">
                                    <a href="#">
                                        <p> 料金シミュレーションはこちら</p>
                                    </a>
                                </div>
                            </div>
                            <div class="amount-table">
                                <div class="frame">
                                    <picture>
                                        <source srcset="/images/rates/sect_3/sp/img_table_01_sp.png" media="(max-width: 899px)">
                                        <img src="/images/rates/sect_3/img_table_01.png" alt="基本料金">
                                    </picture>
                                </div>
                                <div class="frame">
                                    <picture>
                                        <source srcset="/images/rates/sect_3/sp/img_table_02_sp.png" media="(max-width: 899px)">
                                        <img src="/images/rates/sect_3/img_table_02.png" alt="習い事">
                                    </picture>
                                </div>
                                <div class="frame">
                                    <picture>
                                        <source srcset="/images/rates/sect_3/sp/img_table_03_sp.png" media="(max-width: 899px)">
                                        <img src="/images/rates/sect_3/img_table_03.png" alt="お迎え">
                                    </picture>
                                </div>
                            </div>
                            <div class="amount-table__btnArea">
                                <a href="#">
                                    <p> 料金シミュレーションはこちら</p>
                                </a>
                                <p>
                                    ● 初回のみ入会金5,500円、事務手数料5,500円が別途必要になります（レギュラー会員・スポット会員共通）。<br>
                                    ● 基本預かり時間は放課後13:00～19:00とします。<br>
                                    ● 春・夏・冬休み・祝日は朝8:30からお預かりします。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_4">
                <div class="wrapper">
                    <div class="container">
                        <div class="content">
                            <div class="package__row">
                                <div class="package__col">
                                    <div class="ttl">
                                        <p>スポット会員 <br class="u-d-o-pc"><span>（ご都合に合わせて1回1時間から利用OK）</span>
                                        </p>
                                    </div>
                                    <p class="info">
                                        入会金：5,500円　事務手数料：5,500円<br>
                                        <small>※現在、スポット会員新規受付を休止しております。</small>
                                    </p>
                                    <div class="table">
                                        <picture>
                                            <source srcset="/images/rates/sect_4/sp/img_table_01_sp.png" media="(max-width: 899px)">
                                            <img src="/images/rates/sect_4/img_table_01.png" alt="表">
                                        </picture>
                                    </div>
                                    <div class="vector">
                                        <img src="/images/rates/sect_4/img_vector.png" alt="vector">
                                    </div>
                                </div>
                                <div class="package__col">
                                    <div class="ttl">
                                        <p>長期夏休みパック</p>
                                    </div>
                                    <p class="info">
                                        8時30分～19時まで<br>
                                        ● 習い事、お迎え代は別途有料(オプション選択)。
                                    </p>
                                    <div class="table">
                                        <picture>
                                            <source srcset="/images/rates/sect_4/sp/img_table_02_sp.png" media="(max-width: 899px)">
                                            <img src="/images/rates/sect_4/img_table_02.png" alt="表">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="options__row">
                                <div class="options__col">
                                    <picture>
                                        <source srcset="/images/rates/sect_4/sp/img_table_options_01_sp.png" media="(max-width: 899px)">
                                        <img src="/images/rates/sect_4/img_table_options_01.png" alt="延長">
                                    </picture>
                                </div>
                                <img src="/images/rates/sect_4/img_broken_line_vertical.png" alt="line divider" class="divider">
                                <div class="options__col">
                                    <picture>
                                        <source srcset="/images/rates/sect_4/sp/img_table_options_02_sp.png" media="(max-width: 899px)">
                                        <img src="/images/rates/sect_4/img_table_options_02.png" alt="食事料金">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_5">
                <div class="wrapper">
                    <div class="container">
                        <div class="content">
                            <div class="ttl_cont">
                                <picture>
                                    <source srcset="/images/rates/sect_5/header_text_01.svg" media="(max-width: 899px)">
                                    <img src="/images/rates/sect_5/header_text_01.svg" class="ttl" alt="割引制度">
                                </picture>
                                <img src="/images/common/header_dot.svg" class="dot" alt="Dot">
                            </div>
                            <div class="discount">
                                <picture>
                                    <source srcset="/images/rates/sect_5/sp/img_discount_sp.png" media="(max-width: 899px)">
                                    <img src="/images/rates/sect_5/img_discount.png" class="ttl" alt="割引">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect_6">
                <div class="wrapper">
                    <div class="container">
                        <div class="ttl_cont">
                            <img src="/images/rates/sect_6/header_text_01.svg" class="ttl" alt="料金シミュレーション （レギュラー会員）">
                            <img src="/images/common/header_dot.svg" class="dot" alt="Dot">
                            <p class="text">下記を入力して、「計算する」ボタンを押してください。概算の月会費が表示されます。</p>
                        </div>
                        <div class="content" id="calculate">
                            <div class="calculate__row">
                                <div class="calculate__col">
                                    <span>基本会費</span>
                                    <span class="stamp stamp--required">必須</span>
                                </div>
                                <div class="calculate__col">
                                    <select class="c-select01" id="membership_fee" name="membership_fee">
                                        <option value="0" selected>週何回ご利用されますか？</option>
                                        <option value="5500">週1回(5,500円)</option>
                                        <option value="10450">週2回(10,450円)</option>
                                        <option value="14850">週3回(14,850円)</option>
                                        <option value="18700">週4回(18,700円)</option>
                                        <option value="22000">週5回(22,000円)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="calculate__row">
                                <div class="calculate__col">
                                    <span>基本会費</span>
                                    <span class="stamp">必須</span>
                                </div>
                                <div class="calculate__col">
                                    <p>ご興味のある習い事をお選び下さい<span>（複数選択可）</span></p>
                                    <br>
                                    <ul class="checkboxGroup">
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-01" value="3,575">
                                            <label class="c-checkbox03__label" for="checkbox-01">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    スイミング週1回(3,575円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-02" value="3,025">
                                            <label class="c-checkbox03__label" for="checkbox-02">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    スポーツスクール(3,025円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-03" value="2,640">
                                            <label class="c-checkbox03__label" for="checkbox-03">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    ヒップホップ(2,640円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-04" value="9,075">
                                            <label class="c-checkbox03__label" for="checkbox-04">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    プログラミング(9,075円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-05" value="9,075">
                                            <label class="c-checkbox03__label" for="checkbox-05">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    作文教室（9,075円）</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-06" value="9,350">
                                            <label class="c-checkbox03__label" for="checkbox-06">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    英会話(9,350円) のコピー</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-07" value="9,350">
                                            <label class="c-checkbox03__label" for="checkbox-07">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    フォニックス(9,350円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-08" value="14,850">
                                            <label class="c-checkbox03__label" for="checkbox-08">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    英会話・フォニックス(14,850円)</span>
                                            </label>
                                        </li>
                                        <li class="c-checkbox03">
                                            <input class="c-checkbox03__input" type="checkbox" name="lesson_fee[]" id="checkbox-09" value="3,900">
                                            <label class="c-checkbox03__label" for="checkbox-09">
                                                <span class="c-checkbox03__check"></span>
                                                <span class="c-checkbox03__name">
                                                    習字(3,900円)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="calculate__row">
                                <div class="calculate__col">
                                    <span>小学校へのお迎え<br><small>※こちらの金額は目安となります</small></span>
                                    <span class="stamp">必須</span>
                                </div>
                                <div class="calculate__col">
                                    <p class="u-d-o-pc">ご興味のある習い事をお選び下さい（複数選択可）</p>
                                    <br class="u-d-o-pc">
                                    <div class="selectionGroup">
                                        <select class="c-select01" id="pickup_fee" name="pickup_fee">
                                            <option value="0" selected>お迎えは利用しない</option>
                                            <option value="220">曳馬小(1回220円)</option>
                                            <option value="440">上島小(1回440円)</option>
                                            <option value="900">船越小(1回900円)</option>
                                            <option value="1100">佐藤小(1回1,100円)</option>
                                            <option value="1100">東　小(1回1,100円)</option>
                                            <option value="1200">城北小(1回1,200円)</option>
                                            <option value="1300">中部学園(1回1,300円)</option>
                                            <option value="1400">蒲　小(1回1,400円)</option>
                                            <option value="1400">泉　小(1回1,400円)</option>
                                            <option value="1400">追分小(1回1,400円)</option>
                                        </select>
                                        <span>×</span>
                                        <select class="c-select01" id="pickup_fee_by_duration" name="pickup_fee_by_duration">
                                            <option value="0" selected>利用回数を選択</option>
                                            <option value="4">週1回(月4回)</option>
                                            <option value="8">週2回(月8回)</option>
                                            <option value="12">週3回(月12回)</option>
                                            <option value="16">週4回(月16回)</option>
                                            <option value="20">週5回(月20回)</option>
                                        </select>
                                    </div>
                                    <small>※子供2人でタクシーを利用する場合は1人あたりは半額となります</small>
                                </div>
                            </div>
                            <div class="calculate__row calculate__btnArea">
                                <button id="btnCompute">
                                    <p>合計金額を計算</p>
                                </button>
                                <div class="calculate__result">
                                    <span class="label">合計金額</span><span class="total"><span id="totalEditable">0,000</span>円<small>（税込）</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- <footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer> -->
    </div><!-- //AllBox -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            function toNumber(str) {
                return str.replace(/[^0-9.]/g, "") * 1;
            }

            function computeLessonFee(elements) {
                let total = 0;
                elements.forEach(item => {
                    total += toNumber(item.getAttribute('value'));
                });
                return total;
            }
            $('.calculate__btnArea #btnCompute').click(function() {
                let membership_fee = toNumber(document.querySelector('#membership_fee').value);
                let lesson_fee_collection = document.querySelectorAll('input[name="lesson_fee[]"]:checked');
                let pickup_fee = toNumber(document.querySelector('#pickup_fee').value);
                let pickup_fee_by_duration = toNumber(document.querySelector('#pickup_fee_by_duration').value);
                let total = (membership_fee + computeLessonFee(lesson_fee_collection)) + (pickup_fee * pickup_fee_by_duration);
                $('.calculate__result #totalEditable').text(total.toLocaleString());
            });
        });
    </script>
</body>

</html>