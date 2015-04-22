/*
 * Список скриптов
 */
var scripts = [
    'js/test.js',
    'js/ready.js'
];

/*
 * Список стилей
 */
var styles = [
    'css/reset.css',
    'css/style.css'
];

/*
 * Список загружаемых Node.js модулей.
 */
var tasks = [
    "grunt-contrib-watch",
    "grunt-autoprefixer",
    "grunt-contrib-uglify",
    "grunt-contrib-cssmin"
];

/*
 * Список задач для стандартной задачи
 */
var defaultTask = [
    //'watch', 
    'uglify', 
    'cssmin', 
    'autoprefixer'
];

module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            options: {

            },
           
            scripts: {
                files: scripts,
                tasks: ['uglify']
            },

            styles: {
                files: styles,
                tasks: ['cssmin', 'autoprefixer']
            }
        },

        uglify: {
            options: {

            },

            main: {
                files: {
                    'prod/production.js': scripts
                }
            }
        },

        cssmin: {
            options: {

            },

            main: {
                files: {
                    'prod/production.css': styles
                }
            }
        },

        autoprefixer: {
            options: {

            },
            
            main: {
                files: {
                    'prod/production.css': 'prod/production.css'
                }
            }
        }
    });

    for(var i = 0; i < tasks.length; i++){
        grunt.loadNpmTasks(tasks[i]);
    }

    grunt.registerTask('default', defaultTask);
};


