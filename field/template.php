<?php if( c::get('plugin.status.panel.indicator', true) ) : ?>
	<div class="status-line status-<?= $value; ?>"></div>
<?php endif; ?>

<div class="input input-with-selectbox" data-focus="true">
	<div class="selectbox-wrapper">
		<select class="selectbox" name="<?= $field->name(); ?>" id="<?= $field->id(); ?>">
			<?php foreach( $options as $key => $option ) : ?>
				<?php $selected = ( $key === $value ) ? ' selected="selected"' : '' ; ?>
				<option value="<?= $key; ?>"<?= $selected; ?>><?= $field->translate($key); ?></option>
			<?php endforeach; ?>
		</select>
	</div>
</div>
