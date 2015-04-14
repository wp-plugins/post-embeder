<style>
table {
  background-color: transparent;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}

.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.42857143;
  color: #428bca;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: #2a6496;
  background-color: #eee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 2;
  color: #fff;
  cursor: default;
  background-color: #428bca;
  border-color: #428bca;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
  border-color: #ddd;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.notice {
	background: #fff;
	border-left: 4px solid #fff;
	-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
	margin: 5px 15px 2px;
	padding: 1px 12px;
	font-size: 13px;
	font-family: sans-serif;
	line-height: 130%;	
	
	min-width: 600px;
}
.notice {
    padding-right: 70px;
    position: relative;
}
.notice a.dismiss {
    display: block;
    position: absolute;
    right: 10px;
    top: 10px;
    font-size: 20px;
    text-decoration: none;
    color: #666;
}
</style>
<?
	$buttom = $display == 'bottom' ? 'selected' : null;
	$top = $display == 'top' ? 'selected' : null;
	$custom = $display == 'custom' ? 'selected' : null;
	
	$b1 = $button == 'bs' ? 'checked' : "";
	$b2 = $button == 'n' ? 'checked' : "";
	$b3 = $button == 'ns' ? 'checked' : "";
	$b4 = $button == 'c' ? 'checked' : "";
	$b5 = $button == 'nb' ? 'checked' : "";
	$b6 = $button == 'e' ? 'checked' : "";
	
	$s1 = $_socials == '1' ? 'selected' : "";
	$s2 = $_socials == '2' ? 'selected' : "";

	$r1 = $_recommended == 'yes' ? 'selected' : "";
	$r2 = $_recommended == 'no' ? 'selected' : "";
	
	if ($_REQUEST['lock'] == 'no' || empty($pub_value)) {
		$actual_link = "?page=embedarticles&lock=yes";
		$_locker = '<a href="' . $actual_link . '"><img src="http://embedarticles.com/locked.png" border="0"></a>';
		$_islocked = '';
	} else {
		$actual_link = "?page=embedarticles&lock=no";
		$_locker = '<a href="' . $actual_link . '"><img src="http://embedarticles.com/unlocked.png" border="0"></a>';
		$_islocked = 'readonly="true"';
	}
	
	$custom_button = '<textarea style="width: 350px; height: 64px; padding: 6px 12px; font-size: 14px;">&lt;a id="embedarticles_button" href="http://embedarticles.com" data-url="null" data-key="'.$pub_value.'" data-button-type="'.$button.'">Embed Articles&lt;/a>&lt;script type="text/javascript" src="http://embedarticles.com/widget/button.js">&lt;/script></textarea>';
	$page = isset($_GET['_page']) ? ((int) $_GET['_page']) : 1;
	$_start = 10 * ($page - 1);	
?>

<div style="padding-bottom: 10px; margin-bottom: 10px;">   
	<div class="wrap">      
		<div id="message" class="updated" style="margin-right: 20px; border-color: #003ffc;"><p>Please do not forget to <a href="http://wordpress.org/support/view/plugin-reviews/embed-articles" target="_new">review this plugin</a>. We humbly ask for your support and donations for us to continually improve this plugin for new features and tools. Send your donations here [<a href='https://pledgie.com/campaigns/26781' target='_new'>Support and Donate</a>].</p></div>
		<div style="float: right; display: block; margin-right: 20px;"><a href="http://embedarticles.com" target="_new"><img src="http://embedarticles.org/ea-sign.png"></a></div>
		<?php    echo "<h2>" . __( 'Embed Articles Settings', '' ) . " <p class='wp-flattr-button'><a class='FlattrButton' style='display:none;' href='https://wordpress.org/plugins/embed-articles/' title='Embed Articles WordPress Plugin'>Embed Articles WordPress Plugin</a></p></h2>"; ?>	
		<?php if($updated==true) { echo '<div id="message" class="updated" style="margin-right: 20px;"><p>The settings has been <strong>saved</strong>.</p></div>'; }?>
		<div class="wrap postbox" style="padding: 10px;">	  			
			<form name="emba_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
				<input type="hidden" name="embedarticles_hidden" value="Y">			
				<table cellpadding="5" cellspacing="5">				
					<tr valign="top"><td align="right"><b><?php _e("API Key" ); ?></b></td><td><input type="text" name="pub_value" value="<?php echo $pub_value; ?>" size="40" <?=$_islocked?>><?=$_locker?><p>Get your own API Key Free at <a href="http://embedarticles.com/login/" target="_new">http://embedarticles.com/login/</a></p></td></tr>						
					<tr valign="top"><td align="right"><b>Choose Buttons</b></td>
						<td>
							<table cellpadding="0" cellspacing="10" border="0">
								<tr>
									<td><input type="radio" name="button" value="bs" <?=$b1?>></td><td><img src="http://embedarticles.org/button-bubble-right.png" alt="" border="0"></td>
									<td><input type="radio" name="button" value="ns" <?=$b3?>></td><td><img src="http://embedarticles.org/button-bubble-top.png" alt="" border="0"></td>
									<td><input type="radio" name="button" value="n" <?=$b2?>></td><td><img src="http://embedarticles.org/button-compact.png" alt="" border="0"></td>									
									<td><input type="radio" name="button" value="e" <?=$b6?>></td><td><img src="http://embedarticles.org/button-e-compact.png" alt="" border="0"></td>									
								</tr>
							</table>
						</td>
					</tr>
					<tr valign="top"><td align="right"><b>Social Buttons</b></td><td><select name="socials"><option value=""></option><option value="1" <?=$s1?>>YES</option><option value="2" <?=$s2?>>NO</option></select></td></tr>
					<tr valign="top"><td align="right"><b>Button Location</b></td><td><select name="display"><option value="bottom" <?=$buttom?>>bottom of post</option><option value="top" <?=$top?>>top of post</option><option value="custom" <?=$custom?>>custom location</option></select></td></tr>
					<? if ($display == 'custom') { ?>
					<tr valign="top"><td align="right"><b>Button Code</b></td><td><p>Copy and paste this button code anywhere you want it to appear...</p><?=$custom_button?></td></tr>					
					<? } ?>
					<tr valign="top"><td align="right"><b>Recommended Articles</b></td><td><select name="recommended"><option value="yes" <?=$r1?>>YES</option><option value="no" <?=$r2?>>NO</option></select><p>Displays a line of recommended trending articles with images.</p></td></tr>
					<tr><td></td><td><input type="submit" name="Submit" class="button button-primary button-large" value="<?php _e('Update Options', '' ) ?>" /></td></tr>
				</table>		
			</form>
		</div>
	</div>
</div>            

<div style="border-bottom: 1px solid #555; padding-bottom: 10px; margin-bottom: 10px; margin-right: 25px;">
	<div class="wrap">
		<h2>Reports & Community Forums</span></h2>
		<? if (!empty($pub_value) && isset($pub_value)) { ?>
		<p>
			<div id="archives">
				<ul>
					<li class="active"><a href="http://embedarticles.com/api/index.php?p=embeds&k=<?=$pub_value?>&_a=list&_id=<?=$_REQUEST['_id']?>">Embed Reports</a></li>
					<li><a href="#community">The Community</a></li>					
				</ul>
				<div id="community">
					<script type="text/javascript" src="http://embedarticles.org/js/embed.js"></script>
				</div>
			</div>
		</p>
		<? } else { ?>
		<p>
			You must provide a valid API Key for this section to work.
		</p>
		<? } ?>
	</div>
</div>
<div style='font-size: 13px;'>Powered by: <a href="http://embedarticles.com" target="_new">EmbedArticles.com</a> <? echo $version; ?> &mdash; <a href='https://pledgie.com/campaigns/26781' target='_new'>Support and Donate</a> (any amount will greatly and surely help!)</div>