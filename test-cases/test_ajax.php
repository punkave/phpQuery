<?php
//error_reporting(E_ALL);
set_include_path(
	get_include_path()
	.':/home/bob/Sources/PHP/zend-framework/'
);

require_once('../phpQuery/phpQuery.php');
phpQuery::$debug = true;
phpQuery::$ajaxAllowedHosts[] = 'wikipedia.org';
phpQuery::$ajaxAllowedHosts[] = 'google.com';
phpQuery::$ajaxAllowedHosts[] = 'code.google.com';
phpQuery::$ajaxAllowedHosts[] = 'www.google.com';

//$pq = phpQuery::ajax(array(
//	'url' => 'http://wikipedia.org/',
//	'success' => 'v87shs79d8fhs9d'
//));
//function v87shs79d8fhs9d($html) {
//	$title = phpQuery::newDocument($html)->find('title');
//	$testName = 'Simple AJAX';
//	if ( strpos(strtolower($title->html()), 'wikipedia') !== false )
//		print "Test '$testName' PASSED :)";
//	else {
//		print "Test '$testName' <strong>FAILED</strong> !!! ";
//		print "<pre>";
//		print_r($title->whois());
//		print "</pre>\n";
//	}
//	print "\n";
//}


$testName = 'Load';
$test = phpQuery::newDocumentFile('test.html')
	->find('div:first')
	->load('http://wikipedia.org/ div[lang]');
if (pq('div[lang]')->size())
	print "Test '$testName' PASSED :)";
else {
	print "Test '$testName' <strong>FAILED</strong> !!! ";
	print "<pre>";
	print "</pre>\n";
}
print "\n";


//$testName = 'gdata plugin';
//phpQuery::extend('gdata');
//$xhr = phpQuery::$plugins->gdata('tobiasz.cudnik@gmail.com', 'XXX');
//$url = 'http://code.google.com/p/phpquery/w/edit/Callbacks';
//phpQuery::ajax(array('url' => $url, 'success' => 'ksjsdgh892jh23'), $xhr);
//function ksjsdgh892jh23($html) {
//	print $html;
//	print pq($html)->find('script')->remove()->end();
//	if (pq('div[lang]')->size())
//		print "Test '$testName' PASSED :)";
//	else {
//		print "Test '$testName' <strong>FAILED</strong> !!! ";
//		print "<pre>";
//		print "</pre>\n";
//	}
//	print "\n";
//}