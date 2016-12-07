<?php

$a = 
    ["46934042762", null, 6, 0, 1, "2016-07-15", 1, "\u5f90\u8fdb", null, null, "13501938553", null, null, "\u8be2\u95ee\u8fc7\u5b59\u7426\u53ef\u4ee5\u66f4\u6362\u4e09\u6ee4 [\u9093\u4e3d\u6885 2016-07-14 14:03:16]\n", null, null, 1, null, "2016-07-15 16:42:22", null, "\u70b9\u8bc4\u56e2\u8d2d 7837326286 \u8bf7\u6280\u5e08\u5728\u7ed3\u7b97\u65f6\uff0c\u8bf7\u52a1\u5fc5\u5148\u62ff\u5230\u7528\u6237\u7684\u56e2\u8d2d\u5238\u7801\uff0c\n\u8054\u7cfb\u5b59\u5947\u8fdb\u884c\u6838\u9500\u3002\u6838\u9500\u5b8c\u6210\u540e\u518d\u70b9\u51fb\u6536\u6b3e\u5b8c\u6210\u540e\u518d\u79bb\u5f00\u3002\n\u5982\u679c\u6709\u7591\u95ee\uff0c\u8bf7\u54a8\u8be2\u5b59\u594713818509331 [\u9093\u4e3d\u6885 2016-07-14 13:27:22]\n\u8be2\u95ee\u8fc7\u5b59\u7426\u53ef\u4ee5\u66f4\u6362\u4e09\u6ee4 [\u9093\u4e3d\u6885 2016-07-14 14:03:16]\n", "2016-07-14 13:27:22", "2016-09-17 23:20:45", 1222, 11, 2554, 206705, 107134, 53402, 632, 11095, 32, null, 7];


//var_export($a);exit;
$pa = array (
  '46934042762',
  null,
  6,
  0,
  1,
  '2016-07-15',
  1,
  '\\u5f90\\u8fdb',
  null,
  null,
   '13501938553',
   null,
   null,
   '\\u8be2\\u95ee\\u8fc7\\u5b59\\u7426\\u53ef\\u4ee5\\u66f4\\u6362\\u4e09\\u6ee4 [\\u9093\\u4e3d\\u6885 2016-07-14 14:03:16]
',
   null,
   null,
   1,
   null,
   '2016-07-15 16:42:22',
   null,
   '\\u70b9\\u8bc4\\u56e2\\u8d2d 7837326286 \\u8bf7\\u6280\\u5e08\\u5728\\u7ed3\\u7b97\\u65f6\\uff0c\\u8bf7\\u52a1\\u5fc5\\u5148\\u62ff\\u5230\\u7528\\u6237\\u7684\\u56e2\\u8d2d\\u5238\\u7801\\uff0c
\\\\u7cfb\\u5b59\\u5947\\u8fdb\\u884c\\u6838\\u9500\\u3002\\u6838\\u9500\\u5b8c\\u6210\\u540e\\u518d\\u70b9\\u51fb\\u6536\\u6b3e\\u5b8c\\u6210\\u540e\\u518d\\u79bb\\u5f00\\u3002
\\\\u679c\\u6709\\u7591\\u95ee\\uff0c\\u8bf7\\u54a8\\u8be2\\u5b59\\u594713818509331 [\\u9093\\u4e3d\\u6885 2016-07-14 13:27:22]
\\\\u95ee\\u8fc7\\u5b59\\u7426\\u53ef\\u4ee5\\u66f4\\u6362\\u4e09\\u6ee4 [\\u9093\\u4e3d\\u6885 2016-07-14 14:03:16]
',
   '2016-07-14 13:27:22',
   '2016-09-17 23:20:45',
   1222,
   11,
   2554,
   206705,
   107134,
   53402,
   632,
   11095,
   32,
   null,
   7,
)
;

$sql = 'INSERT INTO reservation (reservation_no, exception_status, status, is_deleted, warehouse_checked, book_day, cost_hours, contacts, recommend_user, recommend_entrance, mobile, note_of_price, note_by_user, note_by_service, confirm_option, old_user_address, video_count, autograph, completed_at, technician_remark, note_by_technician, created_at, updated_at, purchase_id, book_hour, auto_model_id, user_auto_model_id, user_address_id, user_id, admin_id, city_id, major_technician_id, vice_technician_id, technician_group_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'
    ;


function str_replace_first($from, $to, $subject)
{
    $from = '/'.preg_quote($from, '/').'/';

    return preg_replace($from, $to, $subject, 1);
}

foreach ($pa as $k => $replacement) {
    $sql = str_replace_first('?', "'$replacement'", $sql);
}


$str = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
    return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
}, $sql);

echo $str;
