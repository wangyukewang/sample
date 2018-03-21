<?php
/*
获取文件后缀
function get_ext1($file_name){
    return strrchr($file_name, '.');
}
function get_ext2($file_name){
    return substr($file_name, strrpos($file_name, '.'));
}



function get_ext3($file_name){
    return array_pop(explode('.', $file_name));
}
function get_ext4($file_name){
    return pathinfo($file_name, PATHINFO_EXTENSION);
}
function get_ext5($file_name){
    return strrev(substr(strrev($file_name), 0, strpos(strrev($file_name), '.')));
}
$file_name = "dir/upload.image.jpg";
$data = get_ext1($file_name);
var_dump($data);
$data = get_ext2($file_name);
var_dump($data);
$data = get_ext3($file_name);
var_dump($data);
$data = get_ext4($file_name);
var_dump($data);
$data = get_ext5($file_name);
var_dump($data);
exit;

//冒泡排序

$b=array('4','3','8','9','2','1');
$len=count($b);//6
for($k=0;$k<=$len;$k++)
{
    for($j=$len-1;$j>$k;$j--){
        if($b[$j]<$b[$j-1]){
            $temp = $b[$j];
            $b[$j] = $b[$j-1];
            $b[$j-1] = $temp;
        }
    }
}
for($k=1;$k<$len;$k++)
{
    for($j=0;$j<$len-$k;$j++){
        if($b[$j]>$b[$j+1]){
            $temp =$b[$j+1];
            $b[$j+1] =$b[$j] ;
            $b[$j] = $temp;
        }
    }
}
//var_dump($b);exit;
//冒泡排序
function bubble_sort($b){
  $len = count($b);
  for($k=1;$k<$len;$k++)
  {
      for($j=0;$j<$len-$k;$j++){
          if($b[$j]>$b[$j+1]){
              $temp =$b[$j+1];
              $b[$j+1] =$b[$j] ;
              $b[$j] = $temp;
          }
      }
  }
  return $b;
}
//快速查找
function quick_sort($array) {
    if (count($array) <= 1) return $array;
    $key = $array[0];
    $left_arr = array();
    $right_arr = array();
    for ($i=1; $i<count($array); $i++){
        if ($array[$i] <= $key)
            $left_arr[] = $array[$i];
        else
            $right_arr[] = $array[$i];
    }
    $left_arr = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);
    return array_merge($left_arr, array($key), $right_arr);
}
//二分查找
function bin_sch($array, $low, $high, $k){
    if ($low <= $high){
    $mid = intval(($low+$high)/2);
    if ($array[$mid] == $k){
    return $mid;
    }elseif ($k < $array[$mid]){
    return bin_sch($array, $low, $mid-1, $k);
    }else{
    return bin_sch($array, $mid+1, $high, $k);
    }
    }
    return -1;
}
//var_dump(bin_sch([1,6,5,7,8,5,4,3],1,8,5));exit;
*/
/*
function getExt($url){
　　$arr = parse_url($url);
   var_dump($arr,$url);exit;
　　$file = basename($arr['path']);
　　$ext = explode('.',$file);
　　return $ext[1];
}

$url = 'http://www.sina.com.cn/abc/de/fg.php?id=1';
$arr = parse_url($url);
$file = basename($arr['path']);
$ext = explode('.',$file);
var_dump($arr,$file,$ext);exit;
*/
//setcookie("a","value");
//print $_COOKIE['a'];
// var_dump($_SERVER);exit;
/*
$a = ['a'=>1,'b'=>2,'c'=>3];
$b = ['a'=>2,'b'=>3,'d'=>4];
$c =  array_count_values($a);
var_dump($c);exit;
*/
function bubble_sort($b){
  $len = count($b);
  for($k=1;$k<$len;$k++)
  {
      for($j=0;$j<$len-$k;$j++){
          if($b[$j]>$b[$j+1]){
              $temp =$b[$j+1];
              $b[$j+1] =$b[$j] ;
              $b[$j] = $temp;
          }
      }
  }
  return $b;
}
function quick_sort($array) {
    if (count($array) <= 1) return $array;
    $key = $array[0];
    $left_arr = array();
    $right_arr = array();
    for ($i=1; $i<count($array); $i++){
        if ($array[$i] <= $key)
            $left_arr[] = $array[$i];
        else
            $right_arr[] = $array[$i];
    }
    $left_arr = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);
    return array_merge($left_arr, array($key), $right_arr);
}

var_dump(quick_sort([1,3,4,6,2,5]));exit;
