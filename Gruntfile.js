module.exports = function(grunt) {
    // Project configuration.

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            build: {
                src: ['src/js/lib/*.js', 'src/js/global.js'],
                dest: 'build/js/<%= pkg.name %>.min.js'
            }
        },
        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    sourcemap: true
                },
                files: {
                    'build/css/<%= pkg.name %>.css': 'src/scss/main.scss',
                }
            }
        },
        autoprefixer: {
            options: {
                browsers: ['last 2 version', 'ie 8', 'ie 9']
            },
            single_file: {
                src: 'build/css/<%= pkg.name %>.css',
                dest: 'build/css/<%= pkg.name %>.prefixed.css'
            },
        },
        cssmin: {
            minify: {
                src: 'build/css/<%= pkg.name %>.prefixed.css',
                dest: 'build/css/<%= pkg.name %>.min.css',
            }
        },
        connect: {
            server: {
              options: {
                port: 9001,
                base: './',
                livereload: true
              }
            }
        },
        watch: {
            scripts: {
                files: ['src/js/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false,
                    livereload: 35729
                }
            },
            html: {
                files: ['./*.html'],
                options: { livereload: 35729 }
            },
            css: {
                files: ['src/scss/*.scss','src/scss/**/*.scss'],
                tasks: ['sass', 'autoprefixer', 'cssmin'],
                options: { livereload: 35729 }
            },
        },
    });

    // Loaded tasks
    grunt.loadNpmTasks( 'grunt-contrib-uglify' );
    grunt.loadNpmTasks( 'grunt-contrib-sass' );
    grunt.loadNpmTasks( 'grunt-contrib-watch' );
    grunt.loadNpmTasks( 'grunt-contrib-cssmin' );
    grunt.loadNpmTasks( 'grunt-contrib-copy' );
    grunt.loadNpmTasks( 'grunt-contrib-connect' );
    grunt.loadNpmTasks( 'grunt-autoprefixer' );
    grunt.loadNpmTasks( 'grunt-notify' );
    grunt.loadNpmTasks( 'grunt-bake' );

    // Registered task(s).
    grunt.registerTask('default', ['notify']);
    grunt.registerTask('build', ['uglify', 'sass', 'autoprefixer', 'cssmin']);
    grunt.registerTask('dev', ['connect', 'watch']);
};
