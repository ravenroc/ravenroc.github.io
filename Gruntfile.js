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
                    'css/dist/main.css': 'css/build/main.scss'	//-- compiled files: raw files 
                }
            } 
        },

        postcss: {
            map: true,
            processors: [
                require('autoprefixer-core')({browsers: 'last 2 version'}).postcss,
                require('csswring').postcss
            ],
            dist: { src: 'css/build/*.css' }
        },

        watch: {
            options: {
                livereload: true,
            },
            /*scripts: {
                files: ['js/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },*/
            css: {
                files: ['css/build/*.scss'],
                tasks: ['sass'],
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
    grunt.loadNpmTasks('grunt-postcss');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['sass','imagemin', 'watch']);

};