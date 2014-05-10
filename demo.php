<?
session_start();
require_once('Captcha.class.php');

$obj = new Captcha($sname);     // 創建Captcha類對象
                                // $sname為保存captcha的session name,可留空,留空則為'm_captcha'

$obj->create($length,$param);   // 創建Captcha并輸出圖片
                                // $length為Captcha長度，可留空，默認為4
                                /* $param = array(
                                        'width' => 13   captcha 字符寬度
                                        'height' => 18  captcha 字符高度
                                        'pnum' => 100   干擾點個數
                                        'lnum' => 2     干擾線條數
                                )
                                可留空
                                */

$obj->check($captcha,$flag);    // 檢查用戶輸入的驗證碼是否正確，true or false
                                // $captcha為用戶輸入的驗證碼,必填
                                // $flag 可留空，默認為1 
                                // 1:當驗證成功后自動清除captcha session
                                // 0:當驗證成功后不清除captcha session,用於ajax檢查
?>