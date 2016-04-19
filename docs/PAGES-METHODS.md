# Pages Methods

You don't need to use the pages methods. They are pure helper functions.

## $pages->published()

Filter the result to only contain `published` pages.

```php
foreach( $pages->published() as $item ) {
  echo $item->title() . ' ' . $item->getStatus() . '<br>';
}
```

## $pages->unpublished()

Filter the result to only contain `unpublished` pages.

```php
foreach( $pages->unpublished() as $item ) {
  echo $item->title() . ' ' . $item->getStatus() . '<br>';
}
```

## $pages->private()

Filter the result to only contain `private` pages.

```php
foreach( $pages->private() as $item ) {
  echo $item->title() . ' ' . $item->getStatus() . '<br>';
}
```