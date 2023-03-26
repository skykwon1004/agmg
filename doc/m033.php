<?
$cate_num = 3;
$cate_title = '지속가능경영';
$page_num = 3;
$page_title = '사이버신문고';

include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>

                        <div class="text">
                            <h2>CYBER</h2>
                            <p>'정직'의 기본 정신이며, 오직 ‘정직’만이 생존과 번영의 길이라고 믿습니다.</p>
                        </div>
                        <div class="policy">
                            <div class="policy_tit top">
                                <h3>익명보장을 기본으로 합니다.</h3>
                                <strong>AGMG 임직원의 <b>공정거래법 및 하도급 관련 법령, 기타 법규나 회사 규정에 대한 중대한 위반 행위</b></strong>
                                <ul class="cyber">
                                    <li>제보를 받으며, 제 3자의 비공식 방식으로 철저히 비밀이 보장됩니다.</li>
                                    <li>다만 사실에 근거하지 않은 비방, 개인 사생활과 관련된 사항은 민원으로 처리되지 않습니다.
                                    </li>
                                    <li>제보 내용에 대한 처리 결과는 빠른 시일 내에 전화나 이메일로 회신해 드리겠습니다.
                                    </li>
                                </ul>
                            </div>

                            <div class="policy_tit">
                                <h3>신고자 보상제도 운영안내</h3>
                                <strong>청결한 조직문화가 <b>신뢰받는 플랫폼 기업을 만듭니다.</b></strong>
                                <ul class="cyber_bottom">
                                    <li>당사는 사업의 투명성 제고 및 윤리적인 기업 문화 정착을 위해 거래업체 등 외부 이해관계자와 관련되어</li>
                                    <li>부당한 이득을 취하거나 회사 손실을 초래한 비리 행위에 대해 신고자 보상제도를 운영하고 있습니다.
                                    </li>
                                    <li>AGMG 또는 그 임직원의 위법∙불공정 행위, 비윤리적 행위(금품, 향응수수, 요구 등) 또는 임직원의 직장 내 괴롭힘,
                                    </li>
                                    <li>성희롱 행위를 경험하거나 목격하신 경우 관련 내용을 제보해주시기 바랍니다.
                                    </li>
                                    <li>제보 된 내용은 엄격한 기밀 유지 하에 법률과 회사 규정에 따라 조사 및 처리될 것입니다.</li>
                                    <li>제보나 정보를 제공하신 분께는 최대한 빠른 시일 내에 전화나 이메일을 통하여 처리 결과를 회신해 드리겠습니다.</li>
                                    <li>(익명으로도 제보가 가능하나, 그 경우 추가적인 사실 관계 확인 및 결과 통지가 어려울 수 있습니다.)</li>
                                </ul>
                            </div>

                            <div class="sub_contact_itm">
                                <div class="sub_contact_itm_inner">
                                    <h2>사이버신문고 제보하기</h2>
                                    <p>익명보호 제보를 통해 윤리경영을 실천합니다.
                                    </p>
                                    <div class="sub_contact_text_top">
                                        <input type="text" placeholder="이름">
                                        <input type="text" placeholder="전화번호">
                                        <div class="infor_check">
                                            <label>
                                                <input class="check" type="checkbox" name="" value="">개인 정보 수집 동의
                                            </label>
                                        </div>
                                    </div>
                                    <div class="sub_contact_text_bottom">
                                        <textarea id="message" placeholder="" required></textarea>
                                        <button type="submit">문의 등록하기</button>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>