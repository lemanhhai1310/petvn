<?php $title = 'Televitiom'; ?>
<?php include 'header.php'; ?>
<div class="uk-container uk-margin-large-bottom">
    <div class="uk-flex uk-flex-middle uk-flex-between box4 uk-margin">
        <span class="uk-text-uppercase">multimedia</span>
        <ul class="uk-subnav uk-subnav-divider uk-margin-remove uk-flex-1 uk-flex-right">
            <li class="uk-active"><a href="#">Television</a></li>
            <li><a href="#">E - Mgazine</a></li>
        </ul>
    </div>
    <div class="uk-grid-collapse" uk-grid>
        <div class="uk-width-expand@s">
            <div class="uk-cover-container">
                <img src="imgs/maxresdefault.jpg" alt="" uk-cover>
                <canvas width="642" height="508"></canvas>
                <a href="#" class="uk-position-center"><img src="imgs/btn-play-yt.png" alt=""></a>
            </div>
        </div>
        <div class="uk-width-1-3@s">
            <div class="uk-card card1 uk-overlay uk-padding-remove uk-overlay-primary uk-height-1-1">
                <div class="uk-card-body">
                    <h4 class="uk-text-uppercase uk-margin-small">televition</h4>
                    <h3 class="uk-margin-small">Làm thế nào để cún nhà bạn nghe theo lời bạn</h3>
                    <div class="time3">Đăng lúc 12:00 - Thứ Bảy, ngày 25/3/2019</div>
                    <p class="desc">29 năm chờ đợi, hàng vạn lời dè bỉu, hàng triệu nỗi thất vọng…, tất cả vẫn chưa kết thúc. Liverpool chỉ là kẻ về nhì tại Premier League 2018/19.</p>
                    <p class="author">Minh Giang</p>
                    <div class="uk-margin">
                        <input class="uk-input" type="text" placeholder="Bạn nghĩ gì về tin này?">
                    </div>
                    <button type="submit" class="uk-button uk-button-primary">Gửi bình luận</button>
                </div>
                <div class="uk-card-footer">
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-grid-medium uk-margin-medium-bottom uk-child-width-1-4@m" uk-grid>
        <?php
        $cars = array
        (
            'imgs/kd5.jpg',
            'imgs/tintuc3.jpg',
            'imgs/kd4.jpg',
            'imgs/media2.jpg',
            'imgs/kd5.jpg',
            'imgs/tintuc3.jpg',
            'imgs/kd4.jpg',
            'imgs/media2.jpg',
            'imgs/kd5.jpg',
            'imgs/tintuc3.jpg',
            'imgs/kd4.jpg',
            'imgs/media2.jpg',
        );
        foreach ($cars as $k => $v) { ?>
            <div>
                <div class="uk-cover-container">
                    <img src="<?= $v ?>" alt="" uk-cover>
                    <canvas width="212" height="172"></canvas>
                    <a href="#" class="uk-position-center btn1"><img src="imgs/btn-play-yt.png" alt=""></a>
                    <div class="uk-position-bottom uk-padding-small uk-overlay uk-overlay-primary">
                        <h3 class="title1 c1 uk-margin-small uk-margin-remove-bottom uk-text-truncate"><a href="#">Bí mật từ ánh nhìn của</a></h3>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
    <div class="banner uk-margin-medium">
        <a href="#"><img src="imgs/banner1.jpg" alt=""></a>
    </div>
    <div class="uk-grid-medium uk-margin-medium-bottom uk-child-width-1-4@m" uk-grid>
        <div class="uk-width-expand">
            <?php
            $cars = array
            (
                'imgs/news1.jpg',
                'imgs/news2.png',
                'imgs/news3.jpg',
                'imgs/news4.jpg',
                'imgs/news1.jpg',
                'imgs/news2.png',
                'imgs/news3.jpg',
                'imgs/news4.jpg',
                'imgs/news5.jpg',
            );
            foreach ($cars as $k => $v) { ?>
                <div class="item1">
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-auto@s">
                            <div class="uk-cover-container">
                                <img src="<?= $v ?>" alt="" uk-cover>
                                <canvas width="242" height="143"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand@s">
                            <h3 class="title_list1 uk-margin-remove"><a href="#">Bí mật từ ánh nhìn của chú cún</a></h3>
                            <p class="home_desc1 uk-margin-remove">Bruce Linton, chief executive of the Ontario-based company Canopy Growth Bruce Linton, chief executive of the Ontario-based company Canopy Growth</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="uk-text-center uk-margin">
                <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
            </div>
        </div>
        <div>
            <?php
            $cars = array
            (
                'imgs/banner2.jpg',
                'imgs/banner4.jpg',
                'imgs/banner2.jpg',
                'imgs/banner4.jpg',
            );
            foreach ($cars as $k => $v) { ?>
                <div class="uk-margin">
                    <a href="#">
                        <div class="uk-cover-container">
                            <img src="<?= $v ?>" alt="" uk-cover>
                            <canvas width="210" height="387"></canvas>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="uk-margin box3">
        <span class="uk-text-uppercase">đọc nhiều trong ngày</span>
    </div>
    <div class="uk-margin-medium-bottom uk-grid-medium uk-child-width-1-3@m" uk-grid>
        <?php
        $cars = array
        (
            'imgs/bvdv1.jpg',
            'imgs/bvdv2.jpg',
            'imgs/bvdv3.jpg',
            'imgs/bvdv4.jpg',
            'imgs/bvdv1.jpg',
            'imgs/bvdv2.jpg',
        );
        foreach ($cars as $k => $v) { ?>
            <div>
                <div class="uk-cover-container">
                    <img src="<?= $v ?>" alt="" uk-cover>
                    <canvas width="291" height="177"></canvas>
                </div>
                <h3 class="title_list1 c1 uk-margin-small"><a href="#">British savers are pulling</a></h3>
            </div>
        <?php } ?>
    </div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
    <div class="uk-margin box3">
        <span class="uk-text-uppercase">cùng chuyên mục</span>
    </div>
    <div class="uk-margin-medium-bottom uk-grid-medium uk-child-width-1-3@m" uk-grid>
        <?php
        $cars = array
        (
            'imgs/bvdv1.jpg',
            'imgs/bvdv2.jpg',
            'imgs/bvdv3.jpg',
            'imgs/bvdv4.jpg',
            'imgs/bvdv1.jpg',
            'imgs/bvdv2.jpg',
        );
        foreach ($cars as $k => $v) { ?>
            <div>
                <div class="uk-cover-container">
                    <img src="<?= $v ?>" alt="" uk-cover>
                    <canvas width="291" height="177"></canvas>
                </div>
                <h3 class="title_list1 c1 uk-margin-small"><a href="#">British savers are pulling</a></h3>
            </div>
        <?php } ?>
    </div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
</div>
<?php include 'footer.php'; ?>