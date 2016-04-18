<?php if( c::get('status.panel.indicator', true) ) : ?>
<style>
	.app {
		padding-top: calc( 3em + 5px );
	}
	.status-published {
		top: 3em;
		left: 0;
		position: fixed;
		border-top: 5px solid #8dae28;
		z-index: 1000;
		width: 100%;
	}
	.status-unpublished {
		top: 3em;
		left: 0;
		position: fixed;
		border-top: 5px solid #b3000a;
		z-index: 1000;
		width: 100%;
	}

	.status-private {
		top: 3em;
		left: 0;
		position: fixed;
		border-top: 5px solid #f89406;
		z-index: 1000;
		width: 100%;
	}
</style>
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