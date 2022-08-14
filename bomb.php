<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        set_time_limit(500); 

        function sendmail($mail) {
            $url = 'https://pvv.nl/nieuwsbrief.html';

            $header = array(
                'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36',
            );
    
            $data = array(
                'user[voornaam]'=> 'Ron',
                // ^ you can change the name of the user here

                'user[tussenvoegsel]'=> '',
                'user[name]'=> 'devries',
                // ^ you can change the name of the user here

                'user[email]'=> $mail,
                'user[geslacht]'=> 'man',
                'ajax'=> '0',
                'acy_source'=> 'module_201',
                'ctrl'=> 'sub',
                'task'=> 'optin',
                'redirect'=> 'https%3A%2F%2Fpvv.nl%2Fnieuwsbrief.html',
                'redirectunsub'=> 'https%3A%2F%2Fpvv.nl%2Fnieuwsbrief.html',
                'option'=> 'com_acymailing',
                'hiddenlists'=> '1',
                'acyformname'=> 'formAcymailing56701'
            );

            $proxy = 'resi.infiniteproxies.com:1111';
            $proxyauth = 'infproxy_rover1337:yfE1y7phb3e4meAS';
    
            // create a curl post request
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PROXY, $proxy);
            curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            $result = curl_exec($ch);
            curl_close($ch);
        }
    
        $amount = $_POST['amount'];

        foreach(range(1, $amount) as $i) {
            sendmail($_POST['email']);
        }   
        
    }
?>