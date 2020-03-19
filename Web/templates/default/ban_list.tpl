<div class="main">

	<div class="post">
	<span>
		{if isset($check_id)}
			<div class='error'>{"_IP"|lang} &mdash; {$your_ip}. <span style='color:red;font-weight:bold;'><a href="http://{$smarty.server.HTTP_HOST}{$smarty.server.PHP_SELF}?bid={$check_id}">{"_YOUAREBANNED"|lang}</a></span></div>
		{else}
			<div class='success'>{"_IP"|lang} &mdash; {$your_ip}. <span style='color:green;font-weight:bold;'>{"_YOUNOTBANNED"|lang}</span></div>
		{/if}
	</span>
		<table frame="box" rules="groups" summary="">

			<thead>
				<tr>
					<th style="width:18px;">&nbsp;</th>
					<th style="width:80px;">{"_DATE"|lang}</th>
					<th>{"_PLAYER"|lang}</th>
					<th>{"_ADMIN"|lang}</th>
					<th>{"_REASON"|lang}</th>
					<th style="width:80px;">{"_LENGHT"|lang}</th>
					{if $ban_page.show_comments == 1 && $vars.use_comment == 1}<th style="width:80px;">{"_BL_COMMENTS"|lang}</th>{/if}
					{if $ban_page.show_demos == 1 && $vars.use_demo == 1}<th style="width:45px;">{"_BL_FILES"|lang}</th>{/if}
					{if $ban_page.show_kicks == 1}<th style="width:45px;">{"_BL_KICKS"|lang}</th>{/if}
				</tr>
			</thead>

			<tbody>
				<!-- No Bans -->
				{if $error}
					<tr>
						<td class="_center" colspan="9">{"_NO_BANS"|lang}</td>
					</tr>
				{else}
				<!-- No Bans -->

				<!-- Banlist -->
					{foreach from=$ban_list item=ban_list}
					<form name="details" method="POST">
						{if $ban_list.ban_length>0 && $ban_list.ban_end < $smarty.now}
							<tr onclick="NewToggleLayer('layer_{$ban_list.bid}')" style="background: #DBF4D7" class='list'>
						{else}
							<tr onclick="NewToggleLayer('layer_{$ban_list.bid}')" class="list">
						{/if}
						<td class="_center"><img alt="{if $ban_list.mod == "html"}{"_WEB"|lang}{else}{$ban_list.mod|lang}{/if}" title="{if $ban_list.mod == "html"}{"_WEB"|lang}{else}{$ban_list.mod|lang}{/if}" src="images/games/{$ban_list.mod}.gif" /></td>
						<td>{$ban_list.ban_created|date_format:"%Y-%m-%d"}</td>
						<td><img alt="" src="images/country/{if $ban_list.cc}{$ban_list.cc|lower}{else}clear{/if}.png" /> {$ban_list.player_nick}</td>
						<td>{$ban_list.admin_nick}</td>
						<td>{$ban_list.ban_reason}</td>
						<td>
							{if $ban_list.ban_length>0}
								{$ban_list.ban_length*60|date2word:true}
							{else}
								{"_PERMANENT"|lang}
							{/if}
						</td>
						{if $ban_page.show_comments == 1 && $vars.use_comment == 1}<td class="_center">{$ban_list.comment_count}</td>{/if}
						{if $ban_page.show_demos == 1 && $vars.use_demo == 1}<td class="_center">{$ban_list.demo_count}</td>{/if}
						{if $ban_page.show_kicks == 1}<td class="_center">{$ban_list.kick_count}</td>{/if}
					</tr>

					<tr id="layer_{$ban_list.bid}" style="display:none;">

						<td class="server-info" colspan="9"><div style="display:none;">
							<input type="hidden" name="bid" value="{$ban_list.bid}" />
							<table frame="box" rules="groups" summary="">
								<thead>
									<tr>
										<th style="width:150px;">{"_BANDETAILS"|lang}</th>

										<th class="_right">
											<a href="ban_list.php?bid={$ban_list.bid}">
												<img src="images/page.png" border="0" title="{"_DETAILS"|lang}"/>
											</a>
											{if $smarty.session.bans_delete=="yes" || ($smarty.session.bans_delete=="own" && $smarty.session.uname == $ban_detail.username)}
											<img src="images/page_edit.png" border="0" onclick="NewToggleLayer('banedit_{$ban_list.bid}')" title="{"_TIP_EDIT"|lang}" style="cursor:pointer;border:0;" />
											<form method="POST" style="display:inline;">
												<input class="img_input" name="del_ban" type="image" src="images/page_delete.png" onclick="return confirm('{"_DELBAN"|lang}{"_DATALOSS"|lang}');" border="0" title="{"_TIP_DEL"|lang}" />
												<input type="hidden" name="site" value="{$site}" />
												<input type="hidden" name="bid" value="{$ban_list.bid}" />
												<input type="hidden" name="details_x" value="1" />
											</form>
											{/if}
										</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="fat">{"_NICKNAME"|lang}</td>
										<td>{$ban_list.player_nick}</td>
									</tr>
									{if !in_array($ban_list.player_id,  array('STEAM_ID_LAN', 'VALVE_ID_LAN', ''))}
										<tr>
											<td class="fat">{"_STEAMID"|lang}</td>
											<td>{$ban_list.player_id}</td>
										</tr>
										<tr>
											<td class="fat">{"_STEAMCOMID"|lang}</td>
											<td>
												<a target="_blank" href="http://steamcommunity.com/profiles/{$ban_list.player_comid}">{$ban_list.player_comid}</a>
											</td>
										</tr>
									{/if}
									<tr>
										<td class="fat">{"_IP"|lang}</td>
										<td>
											{if $smarty.session.ip_view=="yes"}
												{if $ban_list.player_ip}
													{$ban_list.player_ip}
												{else}
													<i>{"_NOTAVAILABLE"|lang}</i>
												{/if}
											{else}
												<span style='font-style:italic;font-weight:bold'>{"_HIDDEN"|lang}</span>
											{/if}
										</td>
									</tr>
									<tr>
										<td class="fat">{"_BANTYPE"|lang}</td>
										<td>
											{if $ban_list.ban_type=="S"}
												{"_STEAMID"|lang}
											{elseif $ban_list.ban_type=="SI"}
												{"_STEAMID&IP"|lang}
											{else}
												{"_NOTAVAILABLE"|lang}
											{/if}
										</td>
									</tr>
									<tr>
										<td class="fat">{"_REASON"|lang}</td>
										<td>{$ban_list.ban_reason}</td>
									</tr>
									<tr>
										<td class="fat">{"_INVOKED"|lang}</td>
										<td>{$ban_list.ban_created|date_format:"%d.%m.%Y - %T"}</td>
									</tr>
									<tr>
										<td class="fat">{"_EXPIRES"|lang}</td>
										<td>
											{if $ban_list.ban_length==0}
												<span style='font-style:italic;font-weight:bold;color:red'>{"_NOTAPPLICABLE"|lang}</span>
											{else}
												{$ban_list.ban_end|date_format:"%d %m %Y - %T"}
												{if $ban_list.ban_end < $smarty.now}
													({"_ALREADYEXP"|lang})
												{else}
													<i>({$ban_list.ban_end-$smarty.now|date2word} {"_REMAINING"|lang})</i>
												{/if}
											{/if}
										</td>
									</tr>
									<tr>
										<td class="fat">{"_BANBY"|lang}</td>
										<td>{$ban_list.admin_nick}{if $ban_list.nickname} <i>({$ban_list.nickname})</i>{/if}</td>
									</tr>
									<tr>
										<td class="fat">{"_BANON"|lang}</td>
										<td>{if $ban_list.server_name == "website"}{"_WEB"|lang}{else}{$ban_list.server_name}{/if}</td>
									</tr>
									<tr>
										<td class="fat">{"_TOTALEXPBANS"|lang}</td>
										<td>{$ban_list.bancount}</td>
									</tr>
								</tbody>
							</table> </div>
						</td>
					</tr>
					<tr id="banedit_{$ban_list.bid}" style="display:none;">
						{include file="layer_banedit_banlist.tpl"}
					</tr>
					</form>
					{/foreach}
				{/if}
				<!-- Banlist -->
			</tbody>
		</table>

		<div class="clearer">&nbsp;</div>

	</div>
	<div class="clearer">&nbsp;</div>
	<div class="paginator" id="paginator"></div>
	<script type="text/javascript">
		paginator = new Paginator(
			"paginator",
			{$ban_page.max_page},
			20,
			{$ban_page.current},
			"?site="
		);
	</script>

</div>