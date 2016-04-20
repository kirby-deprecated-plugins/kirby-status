# Page Methods

You don't need to use the page methods. They are pure helper functions.

## $page->isPublished()

Return `true` if the page is `published`, else `false`.

```php
if( $page->isPublished() ) {
  echo 'This page is published';
}
```

## $page->isUnpublished()

Return `true` if the page is `unpublished`, else `false`.

```php
if( $page->isUnpublished() ) {
  echo 'This page is unpublished';
}
```

## $page->isPrivate()

Return `true` if the page is `private`, else `false`.

```php
if( $page->isPrivate() ) {
  echo 'This page is private';
}
```

## $page->getStatus()

Return the status as string.

```php
echo 'Status: ' . $page->getStatus();
```