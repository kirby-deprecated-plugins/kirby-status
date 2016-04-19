# Controller

You don't need to use the controller helper function. It's just a help function.

**On top of your `header.php` add this:**

```php
<?php echo status::redirect(); ?>
```

- It will redirect to the error page, if the current page is `unpublished`.
- It will redirect to the error page, if the current page is `private`, but only if the user is not logged in.

## Alternatives

The above solution may not seem so nice to everyone. If you want, you can put the helper function inside a controller.

In the future the `site.php` controller may be more powerful. Then I will update this documentation a little bit.