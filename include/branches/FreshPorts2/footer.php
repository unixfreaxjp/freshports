<?
	# $Id: footer.php,v 1.5.2.3 2002-02-16 23:52:53 dan Exp $
	#
	# Copyright (c) 1998-2001 DVL Software Limited
?>
<hr>
<table width="100%" border="0">
<?

if ($ShowPoweredBy) {
?>
<tr>

<td align="center">

<a href="http://www.freebsd.org/"><img src="/images/pbfbsd2.gif"
alt="powered by FreeBSD" border="0" width="171" height="64"></a>

<a href="http://www.mysql.com/"><img src="/images/mysql.gif"
alt="powered by mysql" border="0" width="88" height="46"></a>

<a href="http://www.php.net/"><img src="/images/php3.gif"
alt="powered by php" border="0" width="88" height="31"></a>

</td></tr>
<tr><td align="center">

<a href="http://www.apache.org/"><img src="/images/apache_pb.gif"
alt="powered by apache" border="0" width="259" height="32"></a>

<a href="http://www.phorum.org/"><img src="/phorum/images/phorum.gif"
alt="powered by phorum" border="0" width="88" height="31"></a>

</tr>
<?
}
?>
<tr><td align="right">
<small><a href="/legal.php" target="_top">Copyright</a> 2000,2001 <a href="http://www.dvl-software.com/">DVL Software Limited</a>.
All rights reserved.</small></p>
</td></tr>
</table>

<?
	diary_ads_Random();
?>
