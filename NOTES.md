# Deploy to Altervista Hosting
## Set /public as the root
```html
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteCond %{REQUEST_URI} !^/public/
RewriteRule ^(.*)$ public/$1 [L]
</IfModule>

# # av:php5-engine
AddHandler av-php8 .php
```
## Run database migrations
Configure the `.env` file in accordance with Altervista mySQL values.

Add a 'migration' route in `web.php` and temporary set `APP_ENV=local` to allow migrations.

## Go to production

Remove `public/hot` file to avoid vite from looking for vite server.

Set `APP_ENV=production` in `.env`.

Run the following to compile the css and js resources listed in `vite.config.js` inside `public/build` directory.

> $ npm run build

Set the root `.htaccess` as follows:

