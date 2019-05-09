<footer id="footer" class="uk-section-small uk-margin-large-top">
    <div class="uk-container">
        <nav class="uk-navbar-container uk-navbar-transparent nav1 uk-margin" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="#"><img src="imgs/logo-trong-suot-01.png" alt=""></a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <?php
                    $cars = array
                    (
                        'trang chủ',
                        'bảo vệ động vật',
                        'tin tức',
                        'khoảnh khắc',
                        'nhật ký',
                        'khỏe - đẹp',
                        'khám phá',
                    );
                    foreach ($cars as $k => $v) { ?>
                        <li><a href="#"><?= $v ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <div class="uk-flex uk-flex-middle uk-flex-between uk-margin-medium-bottom">
            <h4 class="title2 uk-text-uppercase uk-margin-remove">tạp chí điện tử thú cưng</h4>
            <a class="uk-button uk-button-default btn-qc" href="#">bảng giá quảng cáo</a>
        </div>
        <div class="uk-grid-medium uk-child-width-auto" uk-grid>
            <?php
            $cars = array
            (
                array(
                    'title' => 'tổng biên tập',
                    'name' => 'nguyễn đắc trịnh',
                ),
                array(
                    'title' => 'cố vấn chuyên môn',
                    'name' => 'phạm văn thủ',
                ),
                array(
                    'title' => 'chịu trách nhiệm nội dung',
                    'name' => 'phạm tú anh',
                ),
                array(
                    'title' => 'thư ký tòa soạn',
                    'name' => 'lê hiền',
                ),
                array(
                    'title' => 'truyền thông quảng cáo',
                    'name' => 'đông hường',
                ),
            );
            foreach ($cars as $k => $v) { ?>
                <div>
                    <div class="item3 uk-text-uppercase">
                        <h4 class="uk-text-uppercase uk-margin-remove uk-text-truncate"><?= $v['title'] ?></h4>
                        <div class="uk-text-truncate"><?= $v['name'] ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <hr class="uk-margin-medium">
        <div class="uk-margin uk-grid-medium uk-child-width-1-4@m uk-flex-middle uk-flex-center" uk-grid>
            <div>
                <img src="imgs/marker-01-01.png" alt="">
                <span class="uk-text-middle txt1">Tòa soạn</span>
            </div>
            <div>
                <img src="imgs/co%20quan%20chu%20quan-01-01.png" alt="">
                <span class="uk-text-middle txt1">Cơ quan chủ quản</span>
            </div>
            <div>
                <img src="imgs/giay%20phep-01-01.png" alt="">
                <span class="uk-text-middle txt1">Giấy phép số</span>
            </div>
            <div>
                <a href="#"><img src="imgs/fb-t-01.png" alt=""></a>
                <a href="#"><img src="imgs/like%20-t-01.png" alt=""></a>
                <a href="#"><img src="imgs/share%20-t-01.png" alt=""></a>
                <a href="#"><img src="imgs/zalo-01.png" alt=""></a>
                <a href="#"><img src="imgs/istagram%20-t-01.png" alt=""></a>
                <a href="#"><img src="imgs/twist-01.png" alt=""></a>
            </div>
            <div>
                <img src="imgs/hotline%20-%20vang-01.png" alt="">
                <span class="uk-text-middle txt2 uk-margin-small-left">HOTLINE: 0909 090 090</span>
            </div>
        </div>
    </div>
</footer>
</section>
</body>
</html>