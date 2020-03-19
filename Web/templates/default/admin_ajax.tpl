<script src="templates/{$design}/js/jquery.js"></script>
<script src="include/steamprofile/steamprofile.js"></script>
<link rel="stylesheet" href="templates/{$design}/css/style.css" />

<table>
	<tr style="border-bottom: 1px solid #D8DFEA;"> 
		<td style="width:150px;"><span style="color:#999999;font-family:Verdana,sans-serif;font-weight: bold;font-size: 170%;">Info</span></td>
	</tr> 
	<tr><td colspan="2"><br /></td></tr>
	<tr> 
		<td class="fat">{"_NICKNAME"|lang}</td>
		<td>{$admin.nickname}</td>
	</tr>
	<tr> 
		<td class="fat">ICQ</td>
		<td>
			{if $admin.icq}
				<img src="http://status.icq.com/online.gif?icq={$admin.icq}&img=27"> {$admin.icq}
			{else}
				{"_NOTAVAILABLE"|lang}
			{/if}
		</td>
	</tr>
<!-- 	<tr>
		<td class="fat">{"_STEAMIDIPNAME"|lang}</td>
		<td>{$admin.steamid}</td>
	</tr> -->
	<tr> 
		<td class="fat">{"_ACCESS"|lang}</td>
		<td>{$admin.access}</td>
	</tr>
	<tr> 
		<td class="fat">{"_ADMINSINCE"|lang}</td>
		<td>{$admin.created|date_format:"%d.%m.%Y - %T"}</td>
	</tr>
	<tr> 
		<td class="fat">{"_ADMINTO"|lang}</td>
		<td>{if $admin.expired=="0"}<i>{"_UNLIMITED"|lang}</i>{else}{$admin.expired|date_format:"%d.%m.%Y - %T"}{/if}</td>
	</tr>
</table>
{if $admin.steamid}
	<table>
		<tr style="border-bottom: 1px solid #D8DFEA;"> 
			<td style="width:150px;"><span style="color:#999999;font-family:Verdana,sans-serif;font-weight: bold;font-size: 170%;">Steam</span></td>
		</tr> 
		<tr> 
			<td>
				<br />
				<div class="steamprofile" title="{$admin.steamid}"></div>
			</td>
		</tr>
	</table>
{/if}
<table>
	<tr style="border-bottom: 1px solid #D8DFEA;"> 
		<td style="width:150px;"><span style="color:#999999;font-family:Verdana,sans-serif;font-weight: bold;font-size: 170%;">Servers</span></td>
	</tr> 
	<tr> 
		<td>
			<br />
			{foreach from=$servers item=server}
				{$server}<br />
			{/foreach}
		</td>
	</tr>
</table>