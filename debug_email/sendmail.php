<?php

	/**
	 * ע�����ʼ��඼�Ǿ����Ҳ��Գɹ��˵ģ������ҷ����ʼ���ʱ��������ʧ�ܵ����⣬������¼����Ų飺
	 * 1. �û����������Ƿ���ȷ��
	 * 2. ������������Ƿ�������smtp����
	 * 3. �Ƿ���php���������⵼�£�
	 * 4. ��26�е�$smtp->debug = false��Ϊtrue��������ʾ������Ϣ��Ȼ����Ը��Ʊ�����Ϣ��������һ�´����ԭ��
	 * 5. ������ǲ��ܽ�������Է��ʣ�http://www.daixiaorui.com/read/16.html#viewpl 
	 *    ����������У���������Ҫ�ҵĴ𰸡�
	 */

	require_once "email.class.php";
	//******************** ������Ϣ ********************************
	$smtpserver = "smtp.blskye.com";//SMTP������
	$smtpserverport =25;//SMTP�������˿�
	$smtpusermail = "wht@blskye.com";//SMTP���������û�����
	$smtpemailto = 'echowht@qq.com';//���͸�˭
	$smtpuser = "wht@blskye.com";//SMTP���������û��ʺ�
	$smtppass = "shinecho1234.";//SMTP���������û�����
	$mailtitle ='Debug';//�ʼ�����
	$mailcontent = "<h1>".$_GET['content']."</h1>";//�ʼ�����
	$mailtype = "HTML";//�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ�
	//************************ ������Ϣ ****************************
if ($_GET['content']!=''){
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤.
//	$smtp->debug = true;//�Ƿ���ʾ���͵ĵ�����Ϣ
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
	echo $state;
	if($state==""){
//		shibai
		echo"error";
		exit();
	}else if ($state==1){
		echo"success";
		exit();
	}
}