    <?php
    	// Textlocal account details
    	$username = 'commonbazinga@gmail.com';
    	$hash = 'a1b2933f348e1364d1181df90530426dcd5b210c';
    	
    	// Message details
        $mobnum = $_POST['phnum'];
    
    	$numbers = array();
        array_push($numbers,$mobnum);
    	$sender = urlencode('Rangde');
    	$message = rawurlencode('This is your message');
     
    	$numbers = implode(',', $numbers);
     
    	// Prepare data for POST request
    	$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    	// Send the POST request with cURL
    	$ch = curl_init('http://api.txtlocal.com/send/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	curl_close($ch);
    	
    	// Process your response here
    	echo $response;
    ?>
