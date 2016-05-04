# Redirect

To help you there is a redirect function for you.

- It will redirect to the error page, if the current page is `unpublished`.
- It will redirect to the error page, if the current page is `private`, but only if the user is not logged in.

**Function call:**

```php
<?php echo status::redirect(); ?>
```

## 1. In header.php

The function call has to be the very first thing in your header file.

## 2. In a controller

You can use it inside a controller but if you have many you need to place it in all your controllers.

## 3. In a init controller (recommended)

I recommend you to use the [Init controller](https://github.com/jenstornell/kirby-init-controller). Then the code will run on every page and you have access to the `$page` object.