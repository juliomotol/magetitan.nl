# Magetitans

## Setup

```sh
composer install
npm install
composer dev
```

## Contents

All of the contents are placed on `/resources/contents`

There are 2 types of contents

### Collections

For the collections, we're using AloiaCMS. At the moment we have `Agenda`, `Speaker`, and `Sponsor`.

### Globals

Globals are `.yml` data which are always loaded in all the views through the use of `ViewComposers`.

When using in the views, all you need is to call the file name in `camelCase`. 

```php
// social-link.yml

$socialLink[0]->title;
```

## Assets

Static assets for styling and contents are placed on `/resources/images` and are called in using `Vite::asset()`.

## Sender Integration

To integrate Sender, you'll need to provide an access token in the `SENDER_TOKEN` env variable.

To generate one:

- Go to your sender dashboard
- Settings > API Access Toekn
- Click on the "Create API TOKEN" > select "Forever"
