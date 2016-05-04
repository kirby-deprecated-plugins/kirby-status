<?php if( c::get('plugin.status.panel.indicator', true) ) : ?>
	<div class="status-line status-<?php echo $value; ?>"></div>
<?php endif; ?>

<div class="input input-with-selectbox" data-focus="true">
	<div class="selectbox-wrapper">
		<select class="selectbox" name="<?php echo $field->name(); ?>" id="<?php echo $field->id(); ?>">
			<?php foreach( $options as $key => $option ) : ?>
				<?php $selected = ( $key === $value ) ? ' selected="selected"' : '' ; ?>
				<option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $option; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
</div>