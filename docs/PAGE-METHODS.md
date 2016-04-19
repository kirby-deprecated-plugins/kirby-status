# Page Methods

You don't need to use the page methods. They are pure helper functions.

## $page->isPublished()

Return true if the page is `published`, else false.

```php
if( $page->isPublished() ) {
  echo 'This page is published';
}
```

## $page->isUnpublished()

Return true if the page is `unpublished`, else false.

```php
if( $page->isUnpublished() ) {
  echo 'This page is unpublished';
}
```

## $page->isPrivate()

Return true if the page is `private`, else false.

```php
if( $page->isPrivate() ) {
  echo 'This page is private';
}
```

## $page->getStatus()

Return the status as string.

```php
echo 'This page has status value' . $page->getStatus();
```

### Private argument

You can also use an array with `private` set to true or false (default is false).

If `private` is true, it will only return the status value if the user is logged in.

```php
echo $page->title() . $page->getStatus( array( 'private' => true) );
```

*Don't confuse it with the status option `private`*