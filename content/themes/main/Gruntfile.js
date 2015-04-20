var scripts = [
    'js/test.js',
    'js/ready.js'
];

var styles = [
    'css/reset.css',
    'css/style.css'
];

var tasks = [
    "grunt-contrib-uglify",
    "grunt-contrib-cssmin"
];


module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        uglify: {
            main: {
                files: {
                    'prod/production.min.js': scripts
                }
            }
        },

        cssmin: {
            target: {
                files: {
                    'prod/production.min.css': styles
                }
            }
        }

    });

    for(var i = 0; i < tasks.length; i++){
        grunt.loadNpmTasks(tasks[i]);
    }

    grunt.registerTask('default', ['uglify', 'cssmin']);
};


