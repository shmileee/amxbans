{if $msg}
	<div class="notice">
		{foreach from=$msg item=msg}
			{$msg|lang}
			<br />
		{/foreach}
	</div>
{/if}
		<td id="main" valign="top" >
		{if $smarty.session.amxadmins_view == "yes"}
			<span class="title">{"_AMXADMINSETTINGS"|lang}</span>
			<table width="95%" align="center"><tr><td>
				<table border="1" width="100%">
					<tr class="htabletop"><td colspan="7"><b>{"_MANAGEAMXADMINS"|lang}</b></td></tr>
					<tr class="htablebottom">
						<td align="center">{"_STEAMIDIPNAME"|lang}</td>
						<td align="center">{"_PASSWORD"|lang}</td>
						<td align="center">{"_ACCESS"|lang}</td>
						<td align="center">{"_FLAGS"|lang}</td>
						<td width="10%">SteamID</td>
						<td align="center">{"_NICKNAME"|lang}</td>
						<td>&nbsp;</td>
					</tr>
					{foreach from=$admins item=admins}
						<form method="POST">
							<input type="hidden" name="aid" value="{$admins.aid}" />
							<input type="hidden" name="created" value="{$admins.created}" />
							<tr class="settings_line">
								<td align="center" width="10%"><input type="text" name="steamid" value="{$admins.steamid}" /></td>
								<td align="center" width="10%"><input size="15" type="password" name="password" /></td>
								<td align="center" width="10%" nowrap>
									<input type="text" id="acc{$admins.aid}" name="access" size="25" value="{$admins.access}" />
									<img src="images/server_key.png" style="cursor:pointer;" 
										onClick="window.open('include/amxxhelper.php?id=acc'+{$admins.aid},'Link','width=500,height=530,dependent=yes,resizable=yes');return false;" />
								</td>
								<td align="center" width="5%"><input size="6" type="text" name="flags" value="{$admins.flags}" /></td>
								<td align="center" width="10%"><input size="15" type="text" name="username" value="{$admins.username}" /></td>
								<td align="center" width="10%"><input size="15" type="text" name="nickname" value="{$admins.nickname}" /></td>
									<td align="center"><nobr>
												<img src="images/{if $admins.expired<>0 && $admins.expired<=$smarty.now}warning{else}success{/if}.gif" />
												<input type="button" class="button" name="settings" value="{"_SETTINGS"|lang}" onClick="NewToggleLayer('layer_{$admins.aid}');" />
												<input type="submit" class="button" name="save" value="{"_SAVE"|lang}" {if $smarty.session.amxadmins_edit !== "yes"}disabled{/if} />
												<input type="submit" class="button" name="del" value="{"_DELETE"|lang}" onclick="return confirm('{"_DELADMIN"|lang}{"_DATALOSS"|lang}');" {if $smarty.session.amxadmins_edit !== "yes"}disabled{/if} />
									</nobr></td>
							</tr>
							<tr id="layer_{$admins.aid}" style="display: none">
								<td class="admin_list" colspan="7"><div style="display: none">
										<table class="admin_list" width="70%">
												<tr class="htable">
													<td colspan="3"><b>{"_SETTINGS"|lang}</b></td>
												</tr>
												<tr class="settings_line">
													<td>ICQ:</td>
													<td><nobr><input size="20" type="text" name="icq" value="{$admins.icq}" /></nobr></td>
												</tr>
												<tr class="settings_line">
													<td width="40%">{"_SHOWINADMINLIST"|lang}:</td>
													<td>{html_options name=ashow values=$ashow output=$ashow_output|lang selected=$admins.ashow}</td>
												</tr>
												<tr class="settings_line">
													<td>{"_ADMINVALIDITY"|lang}:</td>
													<td><nobr><input size="5" type="text" name="days" value="{$admins.days}" /> {"_DAYS"|lang}</nobr></td>
												</tr>
												<tr class="settings_line">
													<td valign="top">{"_ADMINEXPIRATION"|lang}:</td>
													<td>{if $admins.expired == 0}<i>{"_EVER"|lang}</i>
														{else}{$admins.expired|date_format:"%d.%m.%Y - %T"}<br>{"_EXTENDWITH"|lang} 
															<input size="5" type="text" name="moredays" value="{$input.moredays}" /> {"_DAYS"|lang} {"_OR"|lang} 
															<input type="checkbox" name="noend" value="" /> {"_EVER"|lang}
														{/if}
													</td>
												</tr>
												<tr class="settings_line">
													<td>{"_CREATED"|lang}:</td>
													<td>{$admins.created|date_format:"%d.%m.%Y - %T"}</td>
													<td rowspan="5" width="1%" valign="bottom">
														<input type="submit" class="button" name="save" value="{"_SAVE"|lang}" {if $smarty.session.amxadmins_edit !== "yes"}disabled{/if} />
													</td>
												</tr>
										</table>
								</div></td>
							</tr>
						</form>
					{/foreach}
					
				</table>
				{if $smarty.session.amxadmins_edit == "yes"}
					<form method="POST">
						<br>
						<table border="1" width="50%" align="center">
							<tr class="htable">
								<td colspan="3"><b>{"_ADDAMXADMINS"|lang}</b></td>
							</tr>
							<tr>
								<tr class="settings_line"><td><b>{"_STEAMIDIPNAME"|lang}:</b></td><td><input type="text" name="steamid" value="{$input.steamid}" /></td></tr>
								<tr class="settings_line"><td><b>{"_PASSWORD"|lang}:</b></td><td><input type="text" name="password" value="" /></td></tr>
								<tr class="settings_line"><td><b>{"_ACCESS"|lang}:</b></td><td>
									<input type="text" name="access" id="addacc" value="{$input.access}" />
									<img src="images/server_key.png" style="cursor:pointer;" 
										onClick="window.open('include/amxxhelper.php?id=addacc','Link','width=500,height=530,dependent=yes,resizable=yes');return false;" />
								</td></tr>
								<tr class="settings_line"><td><b>{"_FLAGS"|lang}:</b></td><td><input size="8" type="text" name="flags" value="{$input.flags}" /></td></tr>
								<tr class="settings_line"><td width="40%"><b>SteamID:</b></td><td><input type="text" name="username" value="{$input.username}" /></td></tr>
								<tr class="settings_line"><td><b>{"_NICKNAME"|lang}:</b></td><td><input type="text" name="nickname" value="{$input.nickname}" /></td></tr>
								<tr class="settings_line"><td><b>ICQ:</b></td><td><input type="text" name="icq" value="{$input.icq}" /></td></tr>
								<tr class="settings_line"><td><b>{"_SHOWINADMINLIST"|lang}:</b></td><td>{html_options name=ashow values=$ashow output=$ashow_output|lang selected=$input.ashow}</td></tr>
								<tr class="settings_line"><td valign="top"><b>{"_ADMINVALIDITY"|lang}:</b></td><td><nobr><input size="5" type="text" name="days" value="{$input.days|default:"30"}" /> {"_DAYS"|lang} {"_OR"|lang} <input type="checkbox" name="noend" value="yes" {if $input.noend==1}checked{/if} /> {"_EVER"|lang} </nobr></td></tr>
								<tr><td valign="top"><b>{"_ADDADMINTOSERVERS"|lang}:</b></td>
									<td>
										<select name="addtoserver[]" size="3" multiple>
											{html_options values=$svalues output=$soutput}
										</select>
									</td>
								</tr>
								<tr class="settings_line">
									<td>
										<b>{"_WITHSTATICBANTIME"|lang}:</b>
									</td>
									<td>
										<select name="staticbantime">
											{html_options values=$yesno_choose output=$yesno_output|lang}
										</select>
									</td>
									<td align="right">
										<input type="submit" class="button" name="new" value="{"_ADD"|lang}" >
									</td>
								</tr>
							</tr>
						</table>
					</form>
				{/if}
				<br />
					{include file="info_amxaccess.tpl"}
			{else}
				{"_NOACCESS"|lang} !!
			{/if}
			</td></tr></table>
		</td>
	</tr>
</table>