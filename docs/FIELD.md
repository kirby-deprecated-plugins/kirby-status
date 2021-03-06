# Field

No installation of the field is required, only the blueprint setup.

![](https://github.com/jenstornell/kirby-status/blob/master/docs/status0.2.gif)

## Blueprint

Below is the most basic example.

```md
fields:
  status:
    label: Status
    type: status
```

## Default value

If you don't want your page to be `unpublished` when it's created you can set a default value.

```md
fields:
  status:
    label: Status
    default: private
    type: status
```

## Edge cases

There are two edge cases that can be good to know about.

### On existing sites

If you have an existing site, the status value does not exist. The status for all these pages will have the status `published`.

### When creating a new page

When creating a page, an empty status value is created in that page. The status will be `unpublished` until you publish it.

If you have a default value set in your blueprint it will use that instead.