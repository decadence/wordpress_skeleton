/*
 * Список скриптов
 */
var scripts = [
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
    //"grunt-contrib-watch",
    "grunt-autoprefixer",
    "grunt-contrib-uglify",
    "grunt-contrib-cssmin",
    "grunt-contrib-jshint",
    "grunt-contrib-csslint",
    "grunt-spritesmith",
    //"grunt-contrib-imagemin"
];

/*
 * Список задач для стандартной задачи
 */
var defaultTask = [
    //"watch",
    "sprite",
    "jshint",
    "csslint",
    "uglify",
    "cssmin",
    "autoprefixer",
    //"imagemin"
];

module.exports = function(grunt) {

    //require('time-grunt')(grunt);

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

        sprite: {
            all: {
                src: 'img/sprite/*.{jpg,png}',
                dest: 'prod/spritesheet.png',
                destCss: 'prod/sprites.css',
                padding: 10,
                algorithm: "top-down"
            }
        },

        jshint: {
            main: {
                src: scripts
            }
        },

        csslint: {
            main: styles
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
        },

        imagemin: {
            main: {
                files: [{
                    expand: true,
                    cwd: 'img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'prod/img/'
                }]
            }
        }
    });

    for(var i = 0; i < tasks.length; i++){
        grunt.loadNpmTasks(tasks[i]);
    }

    grunt.registerTask('default', defaultTask);
};


