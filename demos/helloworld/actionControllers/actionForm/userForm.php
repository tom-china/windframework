<?php
/**
 * @author xiaoxia xu <x_824@sina.com> 2010-11-30
 * @link http://www.phpwind.com
 * @copyright Copyright &copy; 2003-2110 phpwind.com
 * @license 
 */
L::import('WIND:component.form.base.WindActionForm');
class userForm extends WindActionForm {
	protected $_isValidate = true;
	private $username = 'xxx';
	private $password = 'xxx123';
	private $birth = '1987-1-1';
	
	public function namevalidate() {
		if (strlen($this->username) < 5 ) {
			$this->username = 'xxxxxx';
		}
	}
	
	public function __tostring() {
		echo '<br/>';
		echo '您的用户名为：' . $this->username . '<br/>';
		echo '您的密码为：' . $this->password . '<br/>';
		echo '您的生日为：' . $this->birth . '<br/>';
		return '';
	}
}