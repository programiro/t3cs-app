module.exports = function () {
	var resources = 'src/';
	var	bowerPath = 'bower_components/';
	var	scssPath = resources + 'StyleSheets/';
	var	javascriptPath = resources + 'JavaScripts/';
	var	buildPath = 'web/typo3conf/ext/siteconfig/Resources/Public/';
	var typo3Vendor = 'vendor/bin/';

	config = {
		"js": {
			"src": [
				javascriptPath + '*.js'
			],
			"watch": [
				javascriptPath + '*.js'
			],
			"dest": buildPath + "JavaScripts/",
			"destFileName": "main.js",
			"destVendorFileName": "vendor.js"
		},
		"css": {
			"src": scssPath + "main.scss",
			"dest": buildPath + "StyleSheets/",
			"watch": scssPath + "**/*.scss"
		},
		"typo3": {
			"fluidWatch": [
				"web/typo3conf/ext/siteconfig/Resources/Private/**/*.html"
			],
			"fluid": [
				typo3Vendor + 'fluidlint ' + "web/typo3conf/ext/siteconfig/Resources/Private/**/*.html"
			],
			"typoscriptWatch": [
				"web/typo3conf/ext/**/Configuration/**/**/*.t3s"
			],
			"typoscript": [
				typo3Vendor + 'typoscript-lint ' + "web/typo3conf/ext/**/Configuration/**/**/*.t3s"
			]
		},
		"copy":
		{
			"fonts": {
				"src": resources + 'Fonts',
				"dest": buildPath + 'Fonts',
				"watch": resources + "Fonts/**/*.*"
			},
			"misc": {
				"src": resources + 'Misc',
				"dest": buildPath + 'Misc',
				"watch": resources + "Misc/**/*.*"
			},
			"images": {
				"src": resources + 'Images',
				"dest": buildPath + 'Images',
				"watch": resources + "Images/**/*.*"
			}
		},
		"gulphelp": {
			"options": {
				"hideEmpty": true,
				"hideDepsMessage": true,
				"description": ''
			}
		}
	}

	return config;
};
