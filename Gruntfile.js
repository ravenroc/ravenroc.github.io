module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        // 2. Configuration for concatinating files goes here.

		imagemin: {
			dynamic: {
				files: [{
					expand: true,
					cwd: 'img/raw/',
					src: ['**/*.{png,jpg,gif}'],
					dest: 'img/'
				}]
			}
		},

        sass: {
            dist: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'css/dist/main.css': 'css/build/main.scss'
                }
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions']
            },
            main: {
                expand: true,
                flatten: true,
                src: 'dist/*.css',
                dest: 'dist/'
            }
        },

        watch: {
            options: {
                livereload: true,
            },
            css: {
                files: ['css/build/*.scss'],
                tasks: ['sass','autoprefixer'],
                options: {
                    spawn: false,
                }
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['sass','imagemin','autoprefixer', 'watch']);

};
