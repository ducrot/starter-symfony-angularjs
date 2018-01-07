# starter-symfony-angularjs

A starter for a project with AngularJS (1.x), Bootstrap (4.x) and Font Awesome (4.x) powered by Symfony (4.x) with Webpack Encore.

* Best practice Symfony installation with Flex and Webpack Encore support.
* ES6, and ES7 support with Babel.
* Add AngularJS DI with annotations (/* @ngInject */).
* Source maps included in development builds.
* Versioning in production builds.
* Stylesheets with Autoprefixer and SASS (not required, regular css is supported too).


## Quick start

> Clone/Download the repo then use `app.js` inside [`assets/app.js`](assets/app.js) as your starting point.

```bash
# clone the repo
$ git clone https://github.com/ducrot/starter-symfony-angularjs.git my-app

# change directory to your app
$ cd my-app

# install the dependencies with composer and yarn
$ composer install
$ yarn install

# Compile assets
$ yarn run encore dev

# start the server
$ php bin/console server:run
```

Go to [http://localhost:8000](http://localhost:8000) in your browser.


## Getting Started

### Dependencies

What you need to run this app:

* `composer`, `node` and `yarn`
* Ensure you're running Node (`v8.0.0`+) and Yarn (`1.3.0`+)

### Installing

* `fork` this repo
* `clone` your fork
* `composer install` and `yarn install` to install all dependencies

### Developing

After you have installed all dependencies you can now start developing with:

* `yarn run encore dev --watch`

Assets are automatically recompiled when files change.

Start a local webserver in a second shell with

* `php bin/console server:run`

and open your browser with `http://localhost:8000`.


### Production

To build your application, run:

* `yarn run encore production`


## Webpack Encore limitations

Webpack Encore has limitation in the area of HMR. See: [Using webpack-dev-server and HMR](https://symfony.com/doc/current/frontend/encore/dev-server.html).


## Credits

- The ACME logo was created by [Acme Logos - Professional Placeholder Logos](http://acmelogos.com/).
- The basis of this readme and some ideas were taken from [preboot/angularjs-webpack](https://github.com/preboot/angularjs-webpack).
- The fundamentals and best practices are taken from [angular-tips.com](http://angular-tips.com/blog/2015/06/using-angular-1-dot-x-with-es6-and-webpack/).


## License

[MIT License](LICENSE)


## Changelog

### Version 1.0.0 (2018-01-07)

Initial release.