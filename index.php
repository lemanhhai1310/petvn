<?php $title = 'Trang chủ'; ?>
<?php include 'header.php'; ?>
<div class="uk-container uk-margin-large-bottom">
    <div class="uk-grid-medium" uk-grid>
        <div class="uk-width-expand">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-cover-container">
                        <img src="imgs/home1.jpg" alt="" uk-cover>
                        <canvas width="443" height="322"></canvas>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-flex-first@m">
                    <h2 class="home_title1"><a href="#">Hành động của cún cưng nói lên điều gì</a></h2>
                    <p class="home_desc1">Bruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation, said Ms. Stewart would have an advisory role and assist with the development and brand positioning of a new line of offerings for humans and</p>
                </div>
            </div>
        </div>
        <div class="uk-width-1-4@m">
            <?php for ($i=1; $i<=4; $i++) { ?>
                <div class="item2">
                    <h3 class="title_list1 uk-margin-remove uk-text-truncate"><a href="#">Điều gì thú vị giữa</a></h3>
                    <p class="home_desc1 uk-margin-remove uk-text-truncate">Bruce Linton, chief executive of</p>
                </div>
            <?php } ?>
        </div>
    </div>
    <hr class="line1">
    <div class="uk-grid-medium uk-child-width-1-4@m" uk-grid>
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
</div>
<div class="uk-section-xsmall block_media">
    <div class="uk-container">
        <div class="uk-position-relative">
            <div class="box1">
                <img src="imgs/vector-dog-and-cat-01.png" alt="">
                <span class="uk-text-middle uk-margin-small-left">multimedia</span>
            </div>
            <div class="uk-position-center box2">
                <ul class="uk-margin-remove tab1 uk-flex-center" uk-tab="connect: #tab1">
                    <li class="uk-active"><a href="">television</a></li>
                    <li><a href="">e-magazine</a></li>
                </ul>
            </div>
        </div>
        <div id="tab1" class="uk-switcher uk-margin">
            <div>
                <div class="uk-grid-medium uk-child-width-1-4@m" uk-grid>
                    <div class="uk-width-3-4@m">
                        <div class="uk-cover-container">
                            <img src="imgs/media1.jpg" alt="" uk-cover>
                            <canvas width="677" height="402"></canvas>
                            <a class="uk-position-center" href="#"><img src="imgs/btn-play-yt.png" alt=""></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-cover-container">
                            <img src="imgs/bvdv6.jpg" alt="" uk-cover>
                            <canvas width="209" height="210"></canvas>
                        </div>
                        <h3 class="title1 uk-margin-small uk-margin-remove-bottom"><a href="#">Bí mật từ ánh nhìn của</a></h3>
                        <small class="time1">20/05/2019</small>
                        <p class="desc1 uk-margin-small">Bruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
                    </div>
                    <?php
                    $cars = array
                    (
                        'imgs/kd5.jpg',
                        'imgs/tintuc3.jpg',
                        'imgs/kd4.jpg',
                        'imgs/media2.jpg',
                    );
                    foreach ($cars as $k => $v) { ?>
                        <div>
                            <div class="uk-cover-container">
                                <img src="<?= $v ?>" alt="" uk-cover>
                                <canvas width="212" height="229"></canvas>
                                <a href="#" class="uk-position-center btn1"><img src="imgs/btn-play-yt.png" alt=""></a>
                                <div class="uk-position-bottom uk-padding-small uk-overlay uk-overlay-primary">
                                    <h3 class="title1 uk-margin-small uk-margin-remove-bottom uk-text-truncate"><a href="#">Bí mật từ ánh nhìn của</a></h3>
                                    <small class="time1">20/05/2019</small>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div>Hello again!</div>
        </div>
    </div>
</div>
<div class="uk-container uk-section-small">
    <div class="uk-grid-medium" uk-grid>
        <div class="uk-width-expand">
            <div class="home_header uk-margin" style="background-color: #c1272d">
                <img src="imgs/home_icon_tintuc.png" alt="">
                <span class="uk-text-middle uk-margin-small-left">tin tức</span>
            </div>
            <div class="uk-grid-divider uk-grid-small uk-child-width-1-3@m" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-child-width-1-3@m uk-grid-small" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-cover-container">
                                <img src="imgs/tintuc3.jpg" alt="" uk-cover>
                                <canvas width="284" height="240"></canvas>
                            </div>
                        </div>
                        <div class="uk-flex-first@m">
                            <h2 class="home_title1 uk-margin-remove"><a href="#">Bí mật từ ánh nhìn của chú</a></h2>
                            <p class="home_desc1 uk-margin-remove">Bruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-cover-container">
                        <img src="imgs/tintuc4.jpg" alt="" uk-cover>
                        <canvas width="211" height="128"></canvas>
                    </div>
                    <h3 class="title_list1 uk-margin-small uk-margin-remove-bottom"><a href="#">Điều thú vị giữa mèo và chó</a></h3>
                    <p class="home_desc1 uk-margin-remove">Bruce Linton, chief executive of the Ontario-based company, Canopy</p>
                </div>
            </div>
            <hr>
            <div class="uk-grid-divider uk-margin-large-bottom uk-grid-small uk-child-width-1-3@m" uk-grid>
                <div>
                    <div class="uk-cover-container">
                        <img src="imgs/tintuc1.jpg" alt="" uk-cover>
                        <canvas width="212" height="134"></canvas>
                    </div>
                    <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật ánh nhìn của</a></h3>
                </div>
                <div>
                    <h3 class="title_list1 uk-margin-remove"><a href="#">Não bộ của chó và người có điểm gì tương đồng</a></h3>
                    <p class="home_desc1 uk-margin-remove">Bruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation, said Ms.</p>
                </div>
                <div>
                    <div class="uk-cover-container">
                        <img src="imgs/tintuc2.jpg" alt="" uk-cover>
                        <canvas width="212" height="134"></canvas>
                    </div>
                    <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật ánh nhìn của</a></h3>
                </div>
            </div>
            <div class="uk-text-center">
                <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
            </div>
            <div class="home_header uk-margin" style="background-color: #00a99d">
                <img src="imgs/home_icon_baovedongvat.png" alt="">
                <span class="uk-text-middle uk-margin-small-left">bảo vệ động vật</span>
            </div>
            <div class="uk-grid-medium uk-child-width-1-3@m" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-card home_card1">
                        <div class="uk-cover-container">
                            <img src="imgs/bvdv5.jpg" alt="" uk-cover>
                            <canvas width="450" height="295"></canvas>
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title"><a href="#" title="">Hành động của cún cưng nói lên điều gì?</a></h3>
                            <p>Bruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation, said Ms. Stewart would have an advisory role and assist with the development and brand positioning of a new line of offerings for humans and</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-margin">
                        <div class="uk-cover-container">
                            <img src="imgs/bvdv6.jpg" alt="" uk-cover>
                            <canvas width="209" height="210"></canvas>
                        </div>
                        <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của</a></h3>
                    </div>
                    <div class="uk-margin">
                        <div class="uk-cover-container">
                            <img src="imgs/bvdv7.jpg" alt="" uk-cover>
                            <canvas width="209" height="210"></canvas>
                        </div>
                        <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-4@m uk-flex-first@m">
            <?php
            $cars = array
            (
                'imgs/banner2.jpg',
                'imgs/banner3.jpg',
                'imgs/banner2.jpg',
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
    <div class="uk-margin-large-bottom uk-grid-medium uk-child-width-1-4@m" uk-grid>
        <?php
        $cars = array
        (
            'imgs/bvdv1.jpg',
            'imgs/bvdv2.jpg',
            'imgs/bvdv3.jpg',
            'imgs/bvdv4.jpg',
        );
        foreach ($cars as $k => $v) { ?>
            <div>
                <div class="uk-cover-container">
                    <img src="<?= $v ?>" alt="" uk-cover>
                    <canvas width="212" height="187"></canvas>
                </div>
                <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của</a></h3>
            </div>
        <?php } ?>
    </div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
    <div class="home_header uk-margin" style="background-color: #F15A24">
        <img src="imgs/home_icon_khoanhkhac.png" alt="">
        <span class="uk-text-middle uk-margin-small-left">khoảnh khắc</span>
    </div>
    <div class="uk-margin-large-bottom uk-grid-medium uk-child-width-1-3@m" uk-grid>
        <div class="uk-width-1-1">
            <div class="uk-grid-medium" uk-grid>
                <div class="uk-width-expand@m">
                    <div class="uk-cover-container">
                        <img src="imgs/sleep-inside.jpg" alt="" uk-cover>
                        <canvas width="604" height="361"></canvas>
                        <a class="uk-position-center" href="#"><img src="imgs/btn-play-yt.png" alt=""></a>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-flex-first@m">
                    <h2 class="home_title1"><a href="#">Não bộ của chó và người có điểm gì tương đồng</a></h2>
                    <p class="home_desc1">Bruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation, said Ms. Stewart would have an advisory role</p>
                </div>
            </div>
        </div>
        <?php
        $cars = array
        (
            'imgs/khoanhkhac1.jpg',
            'imgs/khoanhkhac2.jpg',
            'imgs/khoanhkhac3.jpg',
        );
        foreach ($cars as $k => $v) { ?>
            <div>
                <div class="uk-cover-container">
                    <img src="<?= $v ?>" alt="" uk-cover>
                    <canvas width="287" height="226"></canvas>
                </div>
                <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của con vật nuôi của bạn</a></h3>
            </div>
        <?php } ?>
    </div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
</div>
<div class="uk-section-small home_block1 uk-margin-medium uk-text-center">
    <div class="uk-container uk-container-small">
        <img src="imgs/weather.jpg" alt="">
    </div>
</div>
<div class="uk-container">
    <div class="home_header uk-margin" style="background-color: #FBB03B">
        <img src="imgs/home_icon_nhatky.png" alt="">
        <span class="uk-text-middle uk-margin-small-left">nhật ký</span>
    </div>
    <div class="uk-margin-large-bottom">
        <div class="uk-grid-small uk-grid-divider" uk-grid>
            <div class="uk-width-expand">
                <div uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-cover-container">
                            <img src="imgs/nk4.jpg" alt="" uk-cover>
                            <canvas width="456" height="291"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m uk-flex-first@m">
                        <h2 class="home_title1"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h2>
                        <p class="home_desc1">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-cover-container">
                    <img src="imgs/nk3.jpg" alt="" uk-cover>
                    <canvas width="211" height="124"></canvas>
                </div>
                <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h3>
                <p class="home_desc1 uk-margin-small">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
            </div>
        </div>
        <hr>
        <div class="uk-grid-divider uk-grid-medium uk-child-width-1-4@m" uk-grid>
            <div>
                <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h3>
                <p class="home_desc1 uk-margin-small">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
            </div>
            <div>
                <div class="uk-cover-container uk-border-circle">
                    <img src="imgs/nk1.jpg" alt="" uk-cover>
                    <canvas width="519" height="519"></canvas>
                </div>
                <h3 class="title_list1 uk-margin-small uk-text-center"><a href="#">Chim sợ hãi điều gì</a></h3>
            </div>
            <div>
                <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h3>
                <p class="home_desc1 uk-margin-small">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
            </div>
            <div>
                <div class="uk-cover-container uk-border-circle">
                    <img src="imgs/nk2.jpg" alt="" uk-cover>
                    <canvas width="519" height="519"></canvas>
                </div>
                <h3 class="title_list1 uk-margin-small uk-text-center"><a href="#">Chỉ số iq của chó</a></h3>
            </div>
        </div>
    </div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
    <div class="home_header uk-margin" style="background-color: #39B54A">
        <img src="imgs/home_icon_khoedep.png" alt="">
        <span class="uk-text-middle uk-margin-small-left">khỏe - đẹp</span>
    </div>
    <div class="uk-child-width-1-4@m uk-grid-medium uk-margin-large-bottom" uk-grid>
        <div class="uk-width-3-4@m">
            <div uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-cover-container">
                        <img src="imgs/img2.jpg" alt="" uk-cover>
                        <canvas width="519" height="346"></canvas>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-flex-first@m">
                    <h2 class="home_title1"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h2>
                    <p class="home_desc1">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-cover-container">
                <img src="imgs/kd1.jpg" alt="" uk-cover>
                <canvas width="209" height="143"></canvas>
            </div>
            <h3 class="title_list1 uk-margin-small"><a href="#">Bí mật từ ánh nhìn của chú cún yêu</a></h3>
            <p class="home_desc1 uk-margin-small">ruce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation</p>
        </div>
        <?php
        $cars = array
        (
            'imgs/kd2.jpg',
            'imgs/kd3.jpg',
            'imgs/kd4.jpg',
            'imgs/kd5.jpg',
        );
        foreach ($cars as $key => $value) { ?>
        <div>
            <div class="uk-cover-container">
                <img src="<?= $value; ?>" alt="" uk-cover>
                <canvas width="210" height="161"></canvas>
            </div>
            <h3 class="title_list1 uk-margin-small"><a href="#">Mặc gì cho cún yêu</a></h3>
        </div>
        <?php } ?>
    </div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
    <div class="banner uk-margin-medium">
        <a href="#"><img src="imgs/banner1.jpg" alt=""></a>
    </div>
    <div class="home_header uk-margin" style="background-color: #0071BC">
        <img src="imgs/home_icon_khampha.png" alt="">
        <span class="uk-text-middle uk-margin-small-left">khám phá</span>
    </div>
	<div class="uk-grid-medium uk-child-width-1-2@m uk-margin-large-bottom" uk-grid>
		<div>
			<div class="uk-card home_card1 uk-height-1-1">
				<div class="uk-cover-container">
					<img src="imgs/img1.jpg" alt="" uk-cover>
					<canvas width="459" height="306"></canvas>
				</div>
				<div class="uk-card-body">
					<h3 class="uk-card-title"><a href="#" title="">Bí mật từ ánh nhìn của chú cún</a></h3>
					<p>Uce Linton, chief executive of the Ontario-based company, Canopy Growth Corporation, said Ms. Stewart would have an advisory role and assist with the development and brand positioning of a new line of offerings for humans and animals. He said they hoped to</p>
				</div>
			</div>	
		</div>
		<div>
            <?php
            $cars = array
            (
                'imgs/list1.jpg',
                'imgs/list2.jpg',
                'imgs/list3.jpg',
                'imgs/list4.jpg',
            );
            foreach ($cars as $key => $value) { ?>
            <div class="item_home">
                <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
                    <div>
                        <div class="uk-cover-container">
                            <img src="<?= $value; ?>" alt="" uk-cover>
                            <canvas width="223" height="149"></canvas>
                        </div>
                    </div>
                    <div>
                        <h3 class="title_list1"><a href="#">Em ấy thích ngủ vào ban ngày và chỉ chơi</a></h3>
                    </div>
                </div>
            </div>
            <?php } ?>
		</div>
	</div>
    <div class="uk-text-center">
        <a href="#" class="uk-button uk-button-default btn_readmore">xem thêm</a>
    </div>
</div>		
<?php include 'footer.php'; ?>