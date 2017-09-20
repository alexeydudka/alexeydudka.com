module.exports = function(grunt) {
    'use strict';
    grunt.initConfig({
        sass: {
            options: {
                sourceMap: false
            },
            dist: {
                files: {
                    'inc/css/assembled.css': 'inc/css/scss/main.scss'
                }
            }
        },
        uglify: {
            options: {
                sourceMap: false,
                roundingPrecision: -1
            }, 
            js: {
                files: {          
                    'inc/js/common.min.js': 'inc/js/assets/common.js',
                }
            }
        },

        cssmin: {
            options: {
                keepSpecialComments: false,
                shorthandCompacting: false,
                sourceMap: false,
                roundingPrecision: -1
            },
            target: {
                files: {
                    'inc/css/style.min.css': 'inc/css/assembled.css'
                }
            }
        },
        
        clean: {
            css: ['inc/css/assembled.css']
        },

        watch: {
            all: {
                files: ['inc/css/scss/*.scss', 'inc/js/assets/*.js'],
                tasks: ['update']
            }
        }
    });

    require('load-grunt-tasks')(grunt);
    
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('update', ['sass', 'cssmin', 'clean:css', 'uglify:js']);
    grunt.registerTask('watchall', ['watch:all']);
}