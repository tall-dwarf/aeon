<?php 

    function encrypt_password($password)
    {
        $sail = "Wghnm,ryee634jfrtwq1234";
        return md5(md5(trim($password . $sail))) . md5(md5(trim($sail . $password)));
    }

    function generate_rand_str()
    {
        return bin2hex(random_bytes(100));
    }

    function generate_json_response($status, $messages, $data = [])
    {
        print_r(json_encode(['status' => $status, "messages" => $messages, "data" => $data]));
        die();
    }