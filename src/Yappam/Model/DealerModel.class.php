<?php
namespace Yappam\Model;
use Think\Model;
class DealerModel extends Model {
	
	public function findOpend(){
		echo "只是开通的经销商11111<br/>";
		$dealerList = $this->select();
		foreach($dealerList as $k =>$v){ 
		 echo $v['dealername'];
		 }
	}
}