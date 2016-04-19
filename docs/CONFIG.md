# Config

## Panel indicator

In the panel, a colored line is displayed to clearly show the page status, if the field exist in the blueprint.

If you don't like it you can turn it off by changing it to `false`.

```php
c::set( 'status.panel.indicator', true ); // `true` is default
```

## Field key

If you want to use another field name than `status`, you need to add an option for it.

```php
c::set( 'status.field.key', 'status' ); // `status` is default
```