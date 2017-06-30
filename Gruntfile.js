module.exports = function(grunt) {
    'use strict';
    grunt.initConfig({
        sass: {
            options: {
                sourceMap: false
            },
            dist: {
                files: {
                    'alexeydudkacom/inc/css/assembled.css': 'alexeydudkacom/inc/css/scss/main.scss'
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
                    'alexeydudkacom/inc/js/common.min.js': 'alexeydudkacom/inc/js/assets/common.js',
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
                    'alexeydudkacom/inc/css/style.min.css': 'alexeydudkacom/inc/css/assembled.css'
                }
            }
        },
        
        clean: {
            css: ['alexeydudkacom/inc/css/assembled.css']
        },

        watch: {
            all: {
                files: ['alexeydudkacom/inc/css/scss/*.scss', 'alexeydudkacom/inc/js/assets/*.js'],
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