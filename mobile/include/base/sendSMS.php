<?php

$username = '243559568';		//�û��˺�
$password = '137935DD6F982EC645FFEE023A5F5F55';		//MD5��дȡ32λ ����
$gwid ='64';    //��ҵID
$mobile	 = '13989187530';	//����,���������Ӣ�Ķ��ż��
$message = '������ͨ�š�������֤���ǣ�321';		//GB2312��������
$message = iconv("GB2312","GB2312",$message);
$res = sendSMS($username,$password,$gwid,$mobile,$message);
echo $res;

function sendSMS($cusername,$cpassword,$cgwid,$cmobile,$cmessage)
{
	$http = 'http://api.106txt.com/smsGBK.aspx?';
	$data = array
		(
		'action'=>'Send',
		'username'=>$cusername,	//�û��˺�
		'password'=>$cpassword,	
	    'gwid'=>$cgwid,		//��ҵID
		'mobile'=>$cmobile,	//����
		'message'=>$cmessage 	//����
		
		);
	$result= postSMS($http,$data);			//POST��ʽ�ύ
	
	//�ж�$result ����ֵ
}

function postSMS($url,$data='')
{
    $row = parse_url($url);
    $host = $row['host'];
    $port = isset($row['port']) ? $row['port']:80;
    $file = $row['path'];
    $post = "";
    while (list($k,$v) = each($data)) 
    {
        $post .= rawurlencode($k)."=".rawurlencode($v)."&"; 
    }
    $post = substr( $post , 0 , -1 );
    $len = strlen($post);
    $fp = @fsockopen( $host ,$port, $errno, $errstr, 10);
    if (!$fp) {
        return "$errstr ($errno)\n";
    } else {
        $receive = '';
        $out = "POST $file HTTP/1.1\r\n";
        $out .= "Host: $host\r\n";
        $out .= "Content-type: application/x-www-form-urlencoded\r\n";
        $out .= "Connection: Close\r\n";
        $out .= "Content-Length: $len\r\n\r\n";
        $out .= $post;      
        fwrite($fp, $out);
        while (!feof($fp)) {
            $receive .= fgets($fp, 128);
        }
        fclose($fp);
        $receive = explode("\r\n\r\n",$receive);
        unset($receive[0]);
        return implode("",$receive);
    }
}
?>