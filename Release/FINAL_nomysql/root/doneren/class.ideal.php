<?

include ("class.httprequest.php");

class iDEAL {
    var $rtlo; 	 	// TargetPay Layoutcode

    var $error; 	// Error....

    var $callduration;	// Callduration in seconds returned by TargetPay;
    var $calltariff;	// Call tariff returned by TargetPay;

    var $trxid; 	// iDEAL Transaction ID
    var $url; 		// iDEAL URL to online banking

    function iDEAL ($rtlo) {
    	$this->rtlo = $rtlo;
    	}

    function GetLink ($bank, $description, $amount, $returnurl, $currency="EUR", $language="nl") {
    	$dataToSend = array(
            "rtlo" => $this->rtlo,
            "bank" => $bank,
			"description" => $description,
            "amount" => $amount,
            "returnurl" => $returnurl,
            "currency" => $currency,
            "language" => $language
        	);

        $api = new httpRequest ("http://www.targetpay.nl/ideal/start", $dataToSend);
        list ($resultcode, $result) = explode(" ", $api->response,2);
        list ($trxid, $url) = explode("|", $result);

        if ($resultcode=="000000") {
        	$this->trxid = $trxid;
            $this->url = $url;
        	return true;
            } else {
            $this->error = $result;
            return false;
            }
    	}

    function CheckPayment ($trxid, $once=1) {
    	$dataToSend = array(
            "rtlo" => $this->rtlo,
            "trxid" => $trxid,
			"once" => $once
        	);

        $api = new httpRequest ("http://www.targetpay.nl/ideal/check", $dataToSend);
        list ($resultcode, $result) = explode(" ", $api->response,2);
        list ($trxid, $url) = explode("|", $result);

        if ($resultcode=="000000") {
        	$this->trxid = $trxid;
            $this->url = $url;
        	return true;
            } else {
            $this->error = $result;
            return false;
            }
    	}


    }


?>