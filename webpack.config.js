const dotenv = require('dotenv')
const Encore = require('@symfony/webpack-encore')

const envPath = './.env';
var env = dotenv.config({path: envPath}).parsed;

Encore
  .setOutputPath('public/build/')
  .setPublicPath('/build')
  .addEntry('app', './assets/app.js')
  .cleanupOutputBeforeBuild()
  .enableBuildNotifications()
  .enableSourceMaps(!Encore.isProduction())
  .splitEntryChunks()
  .disableSingleRuntimeChunk()
  .enableVersioning(Encore.isProduction())
  .enableVueLoader()
  .configureDefinePlugin(
    options => {
      for (const property in env) {
        options['process.env'][property] = JSON.stringify(env[property]);
      }
    }
  )


module.exports = Encore.getWebpackConfig();
