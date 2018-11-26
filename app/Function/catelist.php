<?php 

	function lists($pid)
	{
		if($pid == '0'){

			return '顶级分类';
		} else{

			//根据pid查询
			$rs = DB::table('type')->where('id',$pid)->first();

			return $rs->tname;
		}
	}
