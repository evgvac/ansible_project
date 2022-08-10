<html>
<head>
	<title>Command execution</title>
</head>
<body>
<pre>
<?php
	$CMD = '/usr/bin/ansible-playbook -l {IPADDR} /etc/ansible/playbooks/cisco/clear_port-security.yml --user portsec --key-file "/etc/ansible/.ssh/port_security.ppk"';
	if (! array_key_exists('ipaddr', $_POST)) {
		echo 'IP-address for using in command is not received';
		exit;
	}
	$ipaddr = $_POST[ 'ipaddr' ];

	$exe = str_replace('{IPADDR}', $ipaddr, $CMD);

	print('Executing command: \'' . command . '\'');
	$result = 0;
	$out = '';
	exec($exe, $out, $result);

	if ($result === 0)
		echo ' - OK!' . "\n\n";
	else {
		echo ' - Error';
		exit;
	}
	foreach ($out as $l)
		print $l . "\n";
?>
</pre>
</body>
</html>
