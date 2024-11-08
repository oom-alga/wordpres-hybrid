const sass = require("node-sass");

module.exports = function (grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),

    sass: {
      dist: {
        options: {
          implementation: sass,
          outputStyle: "expanded",
          sourceMap: false
        },
        files: {
          "assets/css/admin-editor.min.css": "assets/scss/admin-editor.scss",
          "assets/css/global.min.css": "assets/scss/global.scss",
          "assets/css/home.min.css": "assets/scss/home.scss",
          "assets/css/single.min.css": "assets/scss/single.scss",
          "assets/css/archive.min.css": "assets/scss/archive.scss",
          "assets/css/page.min.css": "assets/scss/page.scss",
          "assets/vendors/accordions/accordions.css": "assets/scss/vendors/accordions.scss"
        }
      }
    },

    // configure autoprefixer for css -----------------------------------
    autoprefixer: {
      dist: {
        options: {
          map: false,
          browsers: ["last 2 version", "ie 8"]
        },
        files: {
          "assets/css/admin-editor.min.css": "assets/css/admin-editor.min.css",
          "assets/css/global.min.css": "assets/css/global.min.css",
          "assets/css/home.min.css": "assets/css/home.min.css",
          "assets/css/single.min.css": "assets/css/single.min.css",
          "assets/css/archive.min.css": "assets/css/archive.min.css",
          "assets/css/page.min.css": "assets/css/page.min.css",
          "assets/vendors/accordions/accordions.css": "assets/vendors/accordions/accordions.css"
        }
      }
    },

    // config postcss
    // postcss: {
    // 	options: {
    // 		map: false,
    // 		processors: [
    // 			require('tailwindcss')(),
    // 			require('autoprefixer')({overrideBrowserslist: ['defaults']}),
    // 			require('cssnano')({
		//             preset: 'default',
		//         })
    // 		]
    // 	},
    // 	dist: {
    // 		files: [
	  //   		{
	  //   			src: 'assets/css-dev/global.css',
	  //   			dest: 'assets/css/global.min.css'
	  //   		},
	  //   		{
	  //   			src: 'assets/css-dev/home.css',
	  //   			dest: 'assets/css/home.min.css'
	  //   		},
	  //   		{
	  //   			src: 'assets/css-dev/archive.css',
	  //   			dest: 'assets/css/archive.min.css'
	  //   		},
	  //   		{
	  //   			src: 'assets/css-dev/single.css',
	  //   			dest: 'assets/css/single.min.css'
	  //   		}
    // 		]
    // 	}
    // },

    // configure watch task -----------------------------------
    watch: {
      scripts: {
        files: [
          "assets/scss/**/*.scss"
        ],
        tasks: ["sass:dist", "autoprefixer:dist"]
      }
    }
  });

  grunt.registerTask("default", ["watch"]);

  grunt.loadNpmTasks("grunt-sass");
  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks("grunt-autoprefixer");

};