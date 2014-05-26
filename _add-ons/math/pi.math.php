<?php
class Plugin_math extends Plugin
{

	public function index()
	{
		$valid_operators = array('+', '-', '*', '/');

		$operator = $this->fetchParam('operator');
		$num1 = str_replace(',', '', $this->fetchParam('num1'));
		$num2 = str_replace(',', '', $this->fetchParam('num2'));
		$decimals = $this->fetchParam('decimals');

		if (!in_array($operator, $valid_operators)) {
			$this->log->error('Calculation must contain a valid operator.');
			return false;
		}

		$equation = $num1.$operator.$num2;
		$result = eval("return ($equation);");

		if ($decimals) {
			$result = number_format($result, $decimals);
		}

		return $result;
	}
	
}
