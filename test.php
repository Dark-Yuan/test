<?php
//echo "oo";exit;
//$arr1=array(array('id'=>1,'1'=>2,'key'=>3),array('id'=>6,'name'=>27,'key'=>8),array('id'=>11,'name'=>212,'key'=>13),array('id'=>16,'name'=>217,'key'=>18));
//$arr1=array('1'=>2,'id'=>1,'key'=>3);
$arr1=array(
    array (
      '返回' => 723.3,
      '管理' => 15.24,
      '点击个人中心' => 1.76,
      1061686 =>  1.39,
      1061665 =>  1.33,
      1061691 =>  0.97,
      1061558 =>  0.56,
      '右滑素材商店' =>  0.5,
      '拍照按钮' =>  0.4,
      '分享' =>  0.3,
      '上拉打开相册' =>  0.26,
      1061514 =>  0.26,
      1060810 =>  0.19,
      '点击素材商店' =>  0.19,
      '点击打开相册' =>  0.18,
      '素材美化' =>  0.16,
      1061513 =>  0.15,
      1061611 =>  0.15,
      '左滑个人中心' =>  0.15,
      '选文件夹' =>  0.12,
      1060907 =>  0.11,
      1061511 =>  0.11,
      1060587 =>  0.11,
      1060570 =>  0.09,
      1060298 =>  0.08,
      1061756 =>  0.08,
      1061661 =>  0.07,
      1060378 =>  0.07,
      '美颜美形' =>  0.07,
      '点击运营中心' =>  0.05,
      '×取消' =>  0.05,
      1060513 =>  0.05,
      1061540 =>  0.05,
      1061510 =>  0.05,
      '下拉运营中心' =>  0.05,
      'Furry家族' =>  0.05,
      1060680 =>  0.04,
      1060138 =>  0.04,
      1060048 =>  0.04,
      1060056 =>  0.04,
      '编辑' =>  0.04,
      '粉底03' =>  0.04,
      'DT数绘店' =>  0.02,
      '风尚画报' =>  0.02,
      '简笔相框01' =>  0.02,
      1060020 =>  0.02,
      '剪贴日志' =>  0.02,
      1061664 =>  0.02,
      1060877 =>  0.02,
      1060525 =>  0.02,
      1060413 =>  0.02,
      1060326 =>  0.02,
      1061662 =>  0.02,
      1061293 =>  0.02,
      1060137 =>  0.02,
      1060122 =>  0.02,
      1060112 =>  0.02,
      '波普艺术' =>  0.01,
      '烘焙生活' =>  0.01,
      '浪漫分子' =>  0.01,
      '花开初夏' =>  0.01,
      '恋爱花季' =>  0.01,
      '雨林奇幻' =>  0.01,
      '霓虹party' =>  0.01,
      '薄荷植物馆' =>  0.01,
      '浪漫时刻' =>  0.01,
      1061772 =>  0.01,
      1060711 =>  0.01,
      1060873 =>  0.01,
      1061657 =>  0.01,
      1061787 =>  0.01,
      1060275 =>  0.01,
      1060236 =>  0.01,
      1060032 =>  0.01,
      1060059 =>  0.01,
      1060218 =>  0.01,
      '201608-单身狗独白-TA单身' =>  0.01,
      '201608-进击西瓜君-振奋西瓜' =>  0.01,
      '像素联萌II' =>  0.01,
      '原宿风暴' =>  0.01,
      '变妆魔镜' =>  0.01,
      '吃货萝莉' =>  0.01,
      '小呆逋' =>  0.01,
      '保存并分享' =>  0.01,
      'Coffee Pet' =>  0.01,
      'zhouxx2' =>  0.01,
      'Let’s Travel' =>  0.01,
      'Q版小精灵' => 0.01,
      'prefix' =>  '点击素材商店'));
//var_dump($arr2);exit;

$arr2 = json_encode($arr1);
var_dump($arr2);echo'</br>'; 
$app_array = json_decode($arr2, true);

var_dump($app_array);
