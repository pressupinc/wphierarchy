var project = 'wphierarchy';
var projectURL = 'wphierarchy.com';
var productURL = './';


var styleSRC = './assets/scss/app.scss';
var styleDestination = '.';


var jsVendorRC = './assets/js/vendor/*.js'; // Path to JS vendor folder.
var jsVendorDestination = './assets/js/'; // Path to place the compiled JS vendor file.
var jsVendorFile = 'vendor'; // Compiled JS vendor file name.
// Default set to vendor i.e. vendor.js.


var jsCustomSRC = './assets/js/partials/*.js'; // Path to JS custom scripts folder.
var jsCustomDestination = './assets/js/'; // Path to place the compiled JS custom scripts file.
var jsCustomFile = 'app';

// Watch files paths.
var styleWatchFiles = './assets/scss/*.scss'; // Path to all *.scss files inside css folder and inside them.
var vendorJSWatchFiles = './assets/js/vendor/*.js'; // Path to all vendor JS files.
var mainJSWatchFiles = './assets/js/partials/*.js'; // Path to all custom JS files.
var projectPHPWatchFiles = './**/*.php'; // Path to all PHP files.


const AUTOPREFIXER_BROWSERS = [
    'last 2 version',
    '> 1%',
    'ie >= 10',
    'ie_mob >= 10',
    'ff >= 34',
    'chrome >= 39',
    'safari >= 7',
    'opera >= 23',
    'ios >= 8',
    'android >= 4',
    'bb >= 10'
  ];

var gulp = require( 'gulp' );

// CSS related plugins.
var sass = require( 'gulp-sass' ); // Gulp plugin for Sass compilation.
var minifycss = require( 'gulp-uglifycss' ); // Minifies CSS files.
var autoprefixer = require( 'gulp-autoprefixer' ); // Autoprefixing magic.
var mmq = require( 'gulp-merge-media-queries' ); // Combine matching media queries into one media query definition.

var concat = require( 'gulp-concat' ); // Concatenates JS files
var uglify = require( 'gulp-uglify' ); // Minifies JS files

// Utilities.
var rename = require( 'gulp-rename' );
var filter = require( 'gulp-filter' );

var sourcemaps = require( 'gulp-sourcemaps' );

var notify = require( 'gulp-notify' );
var browserSync = require( 'browser-sync' ).create();
var reload = browserSync.reload;

gulp.task( 'browser-sync', function() {
	browserSync.init( {

		proxy: projectURL,

		// can get annoying
		open: false,

		// reload for every css change
		// injectChanges: true,

		// custom port
		// port: 7000,

	} );
} );


gulp.task( 'styles', function() {

	gulp.src( styleSRC )
		.pipe( sourcemaps.init() )
		.pipe( sass( {
			errLogToConsole: true,
			// choose from 'compressed', 'nested', or 'expanded'
			outputStyle: 'compact',
			precision: 10
		} ) )
		.on( 'error', console.error.bind( console ) )
		.pipe( sourcemaps.write( {
			includeContent: false
		} ) )
		.pipe( sourcemaps.init( {
			loadMaps: true
		} ) )
		.pipe( autoprefixer( AUTOPREFIXER_BROWSERS ) )

	.pipe( sourcemaps.write( styleDestination ) )
		.pipe( gulp.dest( styleDestination ) )

	.pipe( filter( '**/*.css' ) )
		.pipe( mmq( {
			log: true
		} ) )

	.pipe( rename( {
		suffix: '.min'
	} ) )
		.pipe( minifycss( {
			maxLineLen: 10
		} ) )
		.pipe( gulp.dest( styleDestination ) )
		.pipe( browserSync.stream() )
		.pipe( notify( {
			message: 'wphierarchy task: "styles" is totes done!',
			onLast: true
		} ) )
} );


gulp.task( 'vendorJs', function() {
	gulp.src( jsVendorRC )
		.pipe( concat( jsVendorFile + '.js' ) )
		.pipe( gulp.dest( jsVendorDestination ) )
		.pipe( rename( {
			basename: jsVendorFile,
			suffix: '.min'
		} ) )
		.pipe( uglify() )
		.pipe( gulp.dest( jsVendorDestination ) )
		.pipe( notify( {
			message: 'wphierarchy task: "vendorJS" is totes done!',
			onLast: true
		} ) );
} );

gulp.task( 'mainJS', function() {
	gulp.src( jsCustomSRC )
		.pipe( concat( jsCustomFile + '.js' ) )
		.pipe( gulp.dest( jsCustomDestination ) )
		.pipe( rename( {
			basename: jsCustomFile,
			suffix: '.min'
		} ) )
		.pipe( uglify() )
		.pipe( gulp.dest( jsCustomDestination ) )
		.pipe( notify( {
			message: 'wphierarchy task: "mainJS" is totes done!',
			onLast: true
		} ) );
} );

// watch dat shit
gulp.task( 'default', [ 'styles', 'vendorJs', 'mainJS' ], function() {
	gulp.watch( projectPHPWatchFiles, reload );
	gulp.watch( styleWatchFiles, [ 'styles', reload ] );
	gulp.watch( vendorJSWatchFiles, [ 'vendorJs', reload ] );
	gulp.watch( mainJSWatchFiles, [ 'mainJS', reload ] );
} );
