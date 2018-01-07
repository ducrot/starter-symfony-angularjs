var Encore = require('@symfony/webpack-encore');

Encore
// the project directory where all compiled assets will be stored
    .setOutputPath('public/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')

    // will create public/build/app.js and public/build/app.css
    .addEntry('app', './assets/app.js')

    // This creates a 'vendor.js' with global used libraries.
    .createSharedEntry('vendor', [
        'angular', 'angular-animate', 'angular-touch', '@uirouter/angularjs'
    ])

    // allow sass/scss files to be processed
    .enableSassLoader()

    .enableSourceMaps(!Encore.isProduction())

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // show OS notifications when builds finish/fail
    .enableBuildNotifications()

    // create hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // Loader to use html template in routes
    .addLoader(
        { test: /\.(html)$/, use: { loader: 'html-loader' } }
    )
;

module.exports = Encore.getWebpackConfig();
