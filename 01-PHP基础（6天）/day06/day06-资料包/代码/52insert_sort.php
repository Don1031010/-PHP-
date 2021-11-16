<?php

	//PHP数组排序：插入排序

	$arr = array(4,2,6,8,9,5);

	//1、	确定要插入多少回（假设一个数组一次性插入到对的位置，同时第一个位置是假设对的）
	for($i = 1,$len = count($arr);$i < $len;$i++){
		//2、	取出当前要插入的元素的值
		$temp = $arr[$i];

		//标记：默认说明当前要插入的数组的位置是对的
		$change = false;
		//3、	让该数据与前面已经排好序的数组元素重复比较（挨个比较），直到的位置（交换）
		for($j = $i - 1;$j >= 0;$j--){
			//4、	比较
			if($arr[$j] > $temp){
				//说明当前要插入的元素，比前面的已经排好序的元素的值要小：交换位置
				$arr[$j+1] = $arr[$j];
				//说明前面顺序的数组元素有不合适的位置
				$change = true;
			}else{
				//说明当前待插入元素，比前面的元素要大：说明位置正确
				break;
			}
		}
		//判断位置需要变动
		if($change){
			//有数据移动：占错位置了
			$arr[$j+1] = $temp;
		}
	}

	echo '<pre>';
	print_r($arr);