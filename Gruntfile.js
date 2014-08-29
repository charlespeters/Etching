module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            build: {
                src: ['src/js/lib/*.js', 'src/js/global.js'],
                dest: 'build/js/global.min.js'
            }
        },
        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    sourcemap: true
                },
                files: {
                    'build/css/main.css': 'src/scss/main.scss',
                }
            }
        },
        autoprefixer: {
            options: {
                browsers: ['last 2 version', 'ie 8', 'ie 9']
            },
            single_file: {
                src: 'build/css/main.css',
                dest: 'build/css/main.prefixed.css'
            },
        },
        cssmin: {
            minify: {
                src: 'build/css/main.prefixed.css',
                dest: 'build/css/main.min.css',
            }
        },
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'src/img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'build/img/'
                }]
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
            php: {
                files: ['**/*.php'],
                options: { livereload: 35729 }
            },
            img: {
                files: ['src/img/*.**'],
                tasks: ['imagemin'],
            },
            css: {
                files: ['src/scss/*.scss','src/scss/**/*.scss'],
                tasks: ['sass', 'autoprefixer'],
                options: { livereload: 35729 }
            },
        },
    });

    // Loaded tasks
    grunt.loadNpmTasks( 'grunt-contrib-uglify' );
    grunt.loadNpmTasks( 'grunt-contrib-sass' );
    grunt.loadNpmTasks( 'grunt-contrib-watch' );
    grunt.loadNpmTasks( 'grunt-contrib-cssmin' );
    grunt.loadNpmTasks( 'grunt-contrib-imagemin' );
    grunt.loadNpmTasks( 'grunt-autoprefixer' );
    grunt.loadNpmTasks( 'grunt-notify' );

    // Registered task(s).
    grunt.registerTask('default', ['notify']);
    grunt.registerTask('build', ['uglify', 'sass', 'autoprefixer', 'imagemin']);
    grunt.registerTask('dev', ['watch']);
};
