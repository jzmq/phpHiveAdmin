<?php


include_once 'config.inc.php';
include_once 'templates/style.css';

/*
$transport = new TSocket(HOST, PORT);
$protocol = new TBinaryProtocol($transport);
$client = new ThriftHiveClient($protocol);

$transport->open();

if(!@$_GET['database'])
{
	die($lang['dieDatabaseChoose']);
}
else
{
	$client->execute('use '.$_GET['database']);
	if(!@$_GET['table'])
	{
		die ($lang['dieTableChoose']);
	}
	else
	{
		$date = explode("_",$_GET['table']);
		$date = $date[1];
		$dbDir = $env['hdfsToHiveDir']."/".$_GET['database']."/".$date;
		echo $sql = "dfs -ls ".$dbDir;
		$client->execute($sql);
		$flist = $client->fetchAll();
		var_dump($flist);
		foreach($flist as $k => $v)
		{
			echo $v."<br>";
		}
	}
}

$transport->close();
*/
$sql = "dfs -ls /";
$exec = exec('export HADOOP_HOME='.$env['hadoop_home'].'; export HIVE_HOME='.$env['hive_home'].'; export JAVA_HOME='.$env['java_home'].'; '.$env['hive_home'].'/bin/hive -e '.$sql);
var_dump($exec);
?>
