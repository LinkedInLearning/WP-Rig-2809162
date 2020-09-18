# WordPress: Building Progressive Themes with WP Rig
This is the repository for the LinkedIn Learning course WordPress: Building Progressive Themes with WP Rig. The full course is available from [LinkedIn Learning][lil-course-url].

![WordPress: Building Progressive Themes with WP Rig][lil-thumbnail-url] 
WP Rig, a new toolkit, makes building progressive themes in WordPress easy. It ships with a fully styled starter theme that can be easily customized, and it lints, optimizes, and minifies your changes as you code, making your themes as fast and performant as possible. In this course, instructor Morten Rand-Henriksen shows how to install and configure WP Rig and build a new progressive theme right out of the box. Learn how to edit the underlying CSS, PHP, and JavaScript code and add advanced features such as widgets, custom menus, backgrounds, and logos. Watch a practical example of how to extend WP Rig. Plus, see demonstrations of how to add a footer widget, build a basic component, and export a theme.

### Learning objectives
- Setting up a WordPress theme development environment
- Installing WP Rig
- Building, activating, and testing a new progressive theme
- Editing CSS
- Using web fonts
- Editing existing templates
- Editing PHP and JavaScript code
- Adding advanced features
- Translating a theme

## Instructions

This repository has branches for each of the videos in the course. You can use the branch pop up menu in github to switch to a specific branch and take a look at the course at that stage, or you can add `/tree/BRANCH_NAME` to the URL to go to the branch you want to access.

## Branches

The branches are structured to correspond to the videos in the course. The naming convention is `CHAPTER#_MOVIE#`. As an example, the branch named `02_03` corresponds to the second chapter and the third video in that chapter.
Some branches will have a beginning and an end state. These are marked with the letters `b` for "beginning" and `e` for "end". The `b` branch contains the code as it is at the beginning of the movie. The `e` branch contains the code as it is at the end of the movie. The `master` branch holds the final state of the code when in the course.

## Installing

1. To use these exercise files, you must have the following installed:
   - WordPress
   - Node and NPM
2. Clone this repository to the `/wp-content/plugins/` folder of your local WordPress installation using the terminal (Mac), CMD (Windows), or a GUI tool like SourceTree.
3. Run `npm install` in terminal to install dependencies.
4. Run `npm run start` to start the development process.
5. In WordPress, activate the "Podkit" plugin.

## Recommended VS Code extensions

- [ESLint](https://marketplace.visualstudio.com/itemdetails?itemName=dbaeumer.vscode-eslint)
- [phpcs](https://marketplace.visualstudio.com/items?itemName=ikappas.phpcs)
- [PHP IntelliSense](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-intellisense)
- [Prettier - Code formatter](https://marketplace.visualstudio.com/itemdetails?itemName=esbenp.prettier-vscode)
- [stylelint](https://marketplace.visualstudio.com/itemdetails?itemName=shinnn.stylelint)


### Instructor

**Morten Rand-Hendriksen**

_Web Designer and Developer_

[Other courses by the instructor](https://www.linkedin.com/learning/instructors/morten-rand-hendriksen?u=104)

[lil-course-url]: https://www.linkedin.com/learning/web-portfolio-projects-api-based-chrome-developer-tool
[lil-thumbnail-url]: https://cdn.lynda.com/course/2809162/2809162-1563296193231-16x9.jpg
