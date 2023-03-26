<?
$cate_num = 5;
$cate_title = '서비스센터';
$page_num = 2;
$page_title = '홍보영상';

include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>

                        <div class="text">
                            <h2>MEDIA</h2>
                            <p>AGMG을 알리기 위해 노력하겠습니다.</p>
                        </div>
                        <div class="content_product_yotube">
                            <div class="iframe_wrap">
                                <div class="iframe_case">
                                    <iframe id="video" width="100%" height="315"
                                        src="https://www.youtube.com/embed/wOHwGc33ZUY" frameborder="0"
                                        allow="encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        </div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>