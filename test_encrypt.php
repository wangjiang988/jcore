<?php
	require 'function/lib_func.php';

	$mingwen = '王将';
	
	$miwen = "dd";
	
	echo "要加密的文字：".$mingwen."<br/>密钥:".$miwen;
	echo "<br/>";
	
	$en = Jencrypt($mingwen,$miwen);
	echo "加密后:".$en;
	echo "<br/>";
	$de	= Jdecrypt($en,$miwen);
	echo "解密后:".$de;
	echo "<br/>";
	echo "下一个:<a href='test_getReferer.php'>下一个</a>";
	echo "<br/>";
	echo Jrandom(11,0);
	echo "<br/>";
	// 创建文件目录
	echo Jmkdir('./l1/l2');
	//创建文件
	$arr = array(1=>1,2=>2,3=>3,4=>4,5=>5);
	$json = json_encode($arr);
	echo $json;
	//写入内容文件
	$data = "你好";
	echo "<br/>";
	echo JwriteFile('./l1/l2/temp.txt',$json);
?>