<?

class httpRequest {
    var $response;

    //
    //	Do a HTTP POST request to $url, put the arguments in $arguments
    //
    //	E.g.
    //
    //	$http = new httpRequest();
    //	$http->httpRequest ("http://www.yoururl.nl", array("a" => $a, "b" => $b));
    //	echo $http->response;
    //

    function httpRequest ($url, $arguments) {
        if (substr($url,0,7)=="http://") {
            $url = substr($url,7);
            }

        list ($host,$uri) = explode("/",$url,2);
        $uri = "/$uri";

        $querystr = "";
        foreach ($arguments as $k => $v) {
        	$querystr .= "&$k=".urlencode($v);
            }
        $querystr = substr($querystr, 1);
		$qlength = strlen($querystr);

	    $remote = fsockopen($host, 80, $errno, $errstr, 30);

		$post =
	        "POST $uri HTTP/1.0\r\n".
	        "Host: $host\r\n".
            "Content-type: application/x-www-form-urlencoded\r\n".
		    "Content-length: $qlength\r\n\r\n".
		    "$querystr\r\n\r\n";

		if ($remote) {
  			fputs($remote, $post);
  			$response = "";
  			while(!feof($remote)) {
    			$a = fgets($remote,4096);
    			$response .= $a;
    			}
  			} else {
            $this->errorHandler ("Connection failed $errno $errstr");
            }

        list ($header, $response) = explode("\r\n\r\n", $response, 2);
        list ($temp, $statuscode) = explode(" ", $header, 2);
        list ($statuscode) = explode("\r\n", $statuscode);

        if (substr($statuscode,0,3)=="200") {
        	$this->response = $response;
            } else {
			$this->errorHandler ($statuscode);
            }
        }

    function errorHandler ($errorMessage) {
    	die ($errorMessage);
    	}

	}
?>