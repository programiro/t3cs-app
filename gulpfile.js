/* global require */
var requireDir = require('require-dir'),
	dir = requireDir('./gulp-task');


// The actual tasks are configured in external files under ./gulp_tasks/
// https://github.com/gulpjs/gulp/blob/master/docs/recipes/split-tasks-across-multiple-files.md
// For the default task, that gets triggered with the bare 'gulp' command, see ./gulp/default.js