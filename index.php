<?php
/**
 * Created by PhpStorm.
 * User: cxd
 * Date: 2017/11/2
 * Time: 10:38
 */

// function addHttp($url)
// {

//     $url = trim($url);

//     $result = strstr($url, 'http');

//     if ($result && $url != '') {

//         return $url;

//     } else {

//         return 'http://' . $url;

//     }

// }

// $url = 'http:/www.baidu.com';


// $res = addHttp($url);

// var_dump($res);


// function countArrayDeep($data)
// {
// 	if (!is_array($data)) {
// 		return 0;
// 	} else {
// 		$count = 0;
// 		foreach ($data as $key => $value) {
// 			$count1 = countArrayDeep($value);
// 		}
// 		if ($count1 > $count) {
// 			$count = $count1;
// 		}
// 		return $count + 1;
// 	}
// }




// $arr=array('yiyi'=>1212,'haha'=>array('heihei'=>array(array("a")),"b"));

// echo countArrayDeep($arr);
