<?

include ("class.httprequest.php");

class IVR {
    var $rtlo; 	 	// TargetPay Layoutcode
    var $country;	// Country of customer

    var $payline; 	// Phone number returned by TargetPay
    var $paycode; 	// Paycode returned by TargetPay

    var $error; 	// Error....

    var $callduration;	// Callduration in seconds returned by TargetPay;
    var $calltariff;	// Call tariff returned by TargetPay;

    function IVR ($rtlo, $country) {
    	$this->rtlo = $rtlo;
        $this->country = $country;
    	}

    function PreparePayPerCall ($tariff, $adult) {
    	$dataToSend = array(
            "ct" => "PC",
			"rtlo" => $this->rtlo,
            "co" => $this->country,
            "tb" => $tariff,
            "adult" => $adult,
            "iphash" => $_SERVER["REMOTE_ADDR"]
        	);

        $api = new httpRequest ("http://api.targetpay.nl/payment/startpayment.asp", $dataToSend);
        list ($resultcode, $paycode, $payline) = explode("|", $api->response);

        if ($resultcode=="000 OK") {
        	$this->paycode = $paycode;
            $this->payline = $payline;
        	return true;
            } else {
            $this->error = $resultcode;
            return false;
            }
    	}

    function PreparePayPerMinute ($tariff, $adult, $callduration) {
    	$dataToSend = array(
            "ct" => "PM",
			"rtlo" => $this->rtlo,
            "co" => $this->country,
            "tb" => $tariff,
            "adult" => $adult,
            "cd" => $callduration,
            "iphash" => $_SERVER["REMOTE_ADDR"]
        	);

        $api = new httpRequest ("http://api.targetpay.nl/payment/startpayment.asp", $dataToSend);
        list ($resultcode, $paycode, $payline) = explode("|", $api->response);

        if ($resultcode=="000 OK") {
        	$this->paycode = $paycode;
            $this->payline = $payline;
        	return true;
            } else {
            $this->error = $resultcode;
            return false;
            }
    	}


    function CheckPayment ($paycode, $payline) {
    	$dataToSend = array(
			"rtlo" => $this->rtlo,
            "country" => $this->country,
            "paycode" => $paycode,
            "payline" => $payline,
        	);

        $api = new httpRequest ("http://api.targetpay.nl/payment/checkpayment.asp", $dataToSend);
        list ($resultcode, $this->calltariff, $calltype, $this->callduration) = explode("|", $api->response);

        if ($resultcode=="000 OK") {
        	return true;
            } else {
            return false;
            }
    	}

    function CheckPincode ($code, $payline) {
    	$dataToSend = array(
			"rtlo" => $this->rtlo,
            "country" => $this->country,
            "payline" => $payline,
            "code" => $code,
        	);

        $api = new httpRequest ("http://www.targetpay.nl/api/ivr-pincode", $dataToSend);
        $resultcode = $api->response;

        if ($resultcode=="000 OK") {
        	return true;
            } else {
            $this->error = $resultcode;
            return false;
            }
    	}

    }


?>