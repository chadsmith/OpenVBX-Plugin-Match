<?php
$defaultNumberOfChoices = 2;
$keys = (array) AppletInstance::getValue('keys[]', array('1' => '', '2' => '') );
$responses = (array) AppletInstance::getValue('responses[]');
?>

<div class="vbx-applet regex-applet">

		<h2>RegEx Options</h2>
		<table class="vbx-menu-grid options-table">
			<thead>
				<tr>
					<td>RegEx</td>
					<td>&nbsp;</td>
					<td>Applet</td>
					<td>Add &amp; Remove</td>
				</tr>
			</thead>
			<tfoot>
				<tr class="hide">
					<td>
						<fieldset class="vbx-input-container">
							<input class="keypress small" type="text" name="new-keys[]" value="" autocomplete="off" />
						</fieldset>
					</td>
					<td>then</td>
					<td>
						<?php echo AppletUI::dropZone('new-responses[]', 'Drop applet here'); ?>
					</td>
					<td>
						<a href="" class="add action"><span class="replace">Add</span></a> <a href="" class="remove action"><span class="replace">Remove</span></a>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<?php foreach($keys as $id => $key): ?>
				<tr>
					<td>
						<fieldset class="vbx-input-container">
							<input class="keypress small" type="text" name="keys[]" value="<?php echo $key ?>" autocomplete="off" />
						</fieldset>
					</td>
					<td>then</td>
					<td>
						<?php echo AppletUI::dropZone('responses['.($id).']', 'Drop applet here'); ?>
					</td>
					<td>
						<a href="" class="add action"><span class="replace">Add</span></a> <a href="" class="remove action"><span class="replace">Remove</span></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table><!-- .vbx-menu-grid -->
		<h3>Oops! The message text didn't match any of our choices.</h3>
		<p>What should we do?</p>
		<?php echo AppletUI::dropZone('invalid-option'); ?>
    	<br />
</div><!-- .vbx-applet -->


	
