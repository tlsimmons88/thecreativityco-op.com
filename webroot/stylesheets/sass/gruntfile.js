module.exports = function (grunt) {
	grunt.initConfig({
		autoprefixer: {
			build: {
				options: {
					browsers: ['> 1%', 'last 5 versions', 'ff 24', 'opera 12.1']
				},
				files: {
					'../screen.css': '../screen.css'
				}
			}
		},
		sass: {
			build: {
				options: {
					sourcemap: true,
					style: 'expanded'
				},
				files: {
					'../screen.css': 'screen.scss'
				}
			}
		},
		watch: {
			options: {
				livereload: true
			},
			css: {
				files: ['**/*.scss', '*.scss'],
				tasks: ['sass', 'autoprefixer']
			},
			html: {
				files: ['../../views/**/*.phtml', '../*.html']
			},
			js: {
				files: ['../javascript/*.js']
			}
		}
	});
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-shell');
	grunt.registerTask('default', ['watch']);
};
