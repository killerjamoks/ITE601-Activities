<?php

class Payroll {

	private string $firstname = "hah";
	private string $lastname = "heh";

	private float $tax = 50;
	private float $salary = 500;

	  public function computeNet(){

	  $net = $this->salary - $this->tax;
	  return $net;
	  }

	  public function getEmployeeName(): string{
	  	return $this->lastname . ", ".$this->firstname;
	  }
}

$Payroll = new Payroll();
echo "Employee Name:".$Payroll->getEmployeeName() . "<br/>";
echo "Net:".$Payroll->computeNet();


?>
