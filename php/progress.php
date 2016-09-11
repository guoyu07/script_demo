<?php
//显示进度条
function show_progressbar($current, $total)
{	
	//计算需要回退的字符长度
	$len = strlen($current) + strlen($total) + 1;
	
	// 回退 $len 字符，覆盖上一次 echo 输出
	echo "\033[{$len}D";
	$current .= "/{$total}"; // 15/100 进度显示

	echo str_pad($current, $len, ' ', STR_PAD_LEFT);
}
