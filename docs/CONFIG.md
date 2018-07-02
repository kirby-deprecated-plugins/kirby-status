# Config

## Panel indicator

In the panel, a colored line is displayed to clearly show the page status, if the field exist in the blueprint.

If you don't like it you can turn it off by changing it to `false`.

```php
c::set( 'plugin.status.panel.indicator', true ); // `true` is default
```

## Field key

If you want to use another field name than `status`, you need to add an option for it.

```php
c::set( 'plugin.status.field.key', 'status' ); // `status` is default
```

## Custom translations

If your language is mmissing, you can define your own set of translations in the `config.php` file:

```php
c::set( 'plugin.status.custom.translation', [
  'it' => [
      'published'   => 'Publié',
      'private'     => 'Privé',
      'unpublished' => 'Non publié',
  ]
]);
```
