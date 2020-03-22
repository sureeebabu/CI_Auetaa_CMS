<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class commonFun {

        public function chkIsActive($isActive)
        {
        	if($isActive==1) {
        		//echo "<b>Yes</b>";
        		return "Yes";
        	} elseif ($isActive == 0)
        	{
        		return "No";
        		//echo "<b>No</b>";
        	}
        }
}