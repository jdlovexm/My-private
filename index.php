<?php
	header('content-type:text/html;charset=utf-8');
	class MyClass{
		$name = '波多野结衣';
		public function demo(){
			return $this->name.'美丽动人';
		}
	}
	$ob = new MyClass();
	echo $ob->demo();

