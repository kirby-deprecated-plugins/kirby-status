# Controller

You don't need to use the controller helper function. It's just a help function.

On top of your `header.php` or any other global top snippet, add this:

```php
<?php echo status::redirect(); ?>
```

The redirect function will do a redirect to the error page if the current page is `unpublished`.

If the page is `private` it will also redirect to the error page, but only if the user is not logged in. Logged in users will still see the page.

## Alternatives

The above may not seem so nice to everyone. If you want you can put the helper function inside a controller.

In the future the `site.php` controller may be more powerful and when that happends I will change this documentation a little bit.