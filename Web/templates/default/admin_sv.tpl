	{if $msg}
		<div class="notice">{$msg|lang}</div>
	{/if}
		<td id="main" valign="top" class="admin_list">
		{if $smarty.session.amxadmins_view == "yes"}
			<span class="title">{"_SERVERSETTINGS"|lang}</span>
			<table>
				<tr>
					<td>
						<table class="admin_list" border="1">
							<tr class="htable">
								<td width="1%">{"_MOD"|lang}</td>
								<td width="15%">{"_IP"|lang}</td>
								<td>{"_HOSTNAME"|lang}</td>
								<td width="20%" align="center">{"_LASTSEEN"|lang}</td>
							</tr>
							{foreach from=$servers item=servers}
								<tr class="list" style="cursor:pointer;"onClick="NewToggleLayer('layer_{$servers.sid}');">
									<td><img src="images/mods/{$servers.gametype}.gif" /></td>
									<td>{$servers.address}</td>
									<td>{$servers.hostname}</td>
									<td>{$servers.timestamp|date_format:"%Y-%m-%d - %T"}</td>
								</tr>
								<tr id="layer_{$servers.sid}" {if $servers.sid != $server_activ}style="display: none"{/if}>
									<td class="admin_list" colspan="5"><div style="display:none">
										<fieldset><legend>{"_SERVERSETTINGS"|lang} {$servers.hostname}</legend>
											<table class="table_details" width="95%">
											<form name="rcon_{$servers.sid}" method="POST">
												<tr class="htable">
													<td colspan="4">{"_SERVERSETTINGS"|lang}</td>
												</tr>
												<tr class="settings_line">
													<td>{"_RCONPW"|lang}:</td>
													<td width="1%">{if $smarty.session.servers_edit == "yes"}
														<input type="password" name="rcon" value="{$servers.rcon}" />
														{else}
														<i>{"_HIDDEN"|lang}</i>
														{/if}
													</td>
													<td>&nbsp;</td>
													<td rowspan="5" width="1%" valign="bottom">
														<input type="hidden" name="sid" value="{$servers.sid}" />
														<input type="hidden" name="sidname" value="{$servers.hostname}" />
														<input type="submit" class="button" name="save" value="{"_SAVE"|lang}" {if $smarty.session.servers_edit !== "yes"}disabled{/if} />
														<input type="submit" class="button" name="del" value="{"_DEL"|lang}" onclick="return confirm('{"_DELSERVER"|lang}{"_DATALOSS"|lang}');" {if $smarty.session.servers_edit !== "yes"}disabled{/if} />
													</td>
												</tr>
												<tr class="settings_line">
													<td>{"_MOTDURL"|lang}:</td>
													<td><input type="text" size="70" name="amxban_motd" id="{$servers.sid}" value="{$servers.amxban_motd}" /></td>
													<td><input type="button" class="button" value="{"_AUTO"|lang}" onclick="document.getElementById('{$servers.sid}').value='{$motd_url}';" /></td>
												</tr>
												<tr class="settings_line">
													<td>{"_MOTDDELAY"|lang}:</td>
													<td>{html_options name=motd_delay values=$delay_choose output=$delay_choose selected=$servers.motd_delay} {"_SECS"|lang}</td>
												</tr>
												<tr class="settings_line">
													<td>{"_REASONSSET"|lang}:</td>
													<td>{html_options name=reasons values=$reasons_values output=$reasons_choose selected=$servers.reasons}</td>
												</tr>
												<tr class="settings_line">
													<td>{"_TIMEZONEFIXX"|lang}:</td>
													<td>{html_options name=timezone_fixx values=$timezone_values output=$timezone_output selected=$servers.timezone_fixx} {"_HOURS"|lang}</td>
												</tr>
												{if $servers.rcon}
													<tr class="settings_line"><td colspan="4">&nbsp;</td></tr>
													<tr class="htable">
														<td colspan="4">{"_SERVERRCON"|lang}</td>
													</tr>
													{if $smarty.session.servers_edit == "yes"}
													<tr class="settings_line">
														<td valign="top">{"_RCON_PREDEFINED"|lang}:</td>
														<td>
															<select name="command" size="1">
																{section name=rcon_cmds loop=$rcon_cmds}
																	<option value="{$rcon_cmds[rcon_cmds]}" {if $smarty.section.rcon_cmds.index == 0}selected{/if}>{$rcon_cmdkeys[rcon_cmds]|lang}</option>
																{/section}
															</select>
														</td>
														<td>
															<input type="submit" class="button" name="rconcommand" value="{"_RCON_SEND"|lang}" />
														</td>
														<td></td>
													</tr>
													<tr class="settings_line">
														<td>{"_RCON_USERDEFINED"|lang}:</td>
														<td><input type="test" size="70" name="rconuser" onkeyup="document.rcon_{$servers.sid}.rconuserstart_{$servers.sid}.disabled=(this.value=='');" /></td>
														<td><input type="submit" class="button" name="rconuserstart_{$servers.sid}" value="{"_RCON_SEND"|lang}" disabled /></td>
													</tr>
													{else}
														<tr class="settings_line"><td class="admin_msg">{"_NOACCESS"|lang} !!</td></tr>
													{/if}	
												{/if}
											</form>
											</table>
										</fieldset></div>
									</td>
								</tr>
							{/foreach}
						</table>
					</td>
				</tr>
			</table>
				{if $smsg}
					<div class="rcon_box">
						<pre>{$smsg}</pre>
					</div>
				{/if}
		{else}
			{"_NOACCESS"|lang} !!
		{/if}
		</td>
	</tr>
</table>