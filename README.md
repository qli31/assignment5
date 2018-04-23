# Assignment 5

## Information Architecture
ATTENTION: Since the readme has serveral updates, please let me know if there is any kind of inconsistent in the description. I will surely clarify it. Also if there is anything you find unclear, please contact me on slack or email (qli31@u.rochester.edu) me. Thank you. :D

### Files Purposes

files for admin functionality:

1.  **register.php** -- sign up to be admin and gain access to the database
2.  **login.php** -- log in page for admin
3.  **logout.php** -- log out from the admin accessable page
4.  **config.php** -- contains database credentials
5.  **admin_data.php** -- if admin login successfully in login.php, it will forward the user to this page. At this page, the admin (user) can perform the "four functions on the database table" (see, add, edit adn delete)
6.  **delete.php** -- delete the selected data in the database
7.  **edit.php** -- edit selected data in the database
8.  **insert.php** -- insert specfic data in the database
9.  **select.php** -- select the required data from the database

files that all users can access, no log in needed:
index.html -- the main page
survey.html -- the survey page

### Basic Information

This website focus on pizza. It will encourage the user to fill out a survey related to the pizza. All the survey questions will be related to pizza. All the pages will have similar touch in color and fonts to give the readers the best "enviornment for pizza. The taxonomy and choreograph be present in detail in the following paragraphs. Regular users can access the index page and the survey page. The admin will need to either log in if they already have an admin account or register for an account if they don't have one. After the admin log in, he or she will be able to see and alter the database.

### Intended Layout

For all the pages:
Nevigation bar: All the page except for the index.php will have idential navigation bar, which contains links to two pages. They are index.php and survey.php. The navigation bar will always stand at the very top of the website horizontally. The user should be able to go to all three pages at any point of time. After the admin login and reach the admin_data.php, he or she will be able to log out by simply clicking the logout botton. It will take the user back to the login page. From there the user can decide whether to login again or go to index.php or survey.php by using the navigation bar on the top of the page.

Pizza logo: All the page will have the pizza logo. The logo is the link that can take the user back to the index.php. It will stay at the top right corner of the page.

Header: except for the index.php, all the pages will have header at the top of the page, right above the navigation bar. The pizza logo will stay at the same level of the header. The header will be at the middle of the page.

index.php -- This page will use z- pattern to attract users attention. The left up corner will be the pizza logo for the website. It is in the class "primary", which stand for the primary optical area. The right up corner will be the login for the admin. It is in the class "strong", which stand for strong follow area. The left down corner will be the a text to encourage the users to do the survey (example: fill out the survey and get free pizza). It is in the class "weak", which stand for weak visual area. The right down corner will the link for user to go survey.php to fill out the survey. It is in the class "terminal", which stand for the terminal area. The center of the page will be a big heading for pizza and a subtitle right under the heading. The heading will be at the center of the page.

survey.php -- This page will contain the heading of "Yummy pizza, Yummy survey". The survey will ask for users' name, email and the following two questions.
How offen do you eat pizza? -- for thowhis question we are expecting the user to give an interger. It is recommoned for the coder to implement a plugin to check for user input if possible. The input will be in type text, name frequence and id frequence.
What is your favourite kind of pizza? -- for this question we are expecting the respond to be in type char. The input will be in type text, name favourite and id favourite.
For both name and email, the input will be in type text, name will be name and email, and value will also be name and email. It is recommanded for the coder to implement an simple email validation.
All the content will stay under heading and navigation bar. It should be at the middle of the page.

For login.php and admin_data.php, the content of the page should stay under the header and navigation bar. The content should stand at the middle of the page.

### Intended Mood/Feeling

For all the pages:
All the pages excpet index.php should have idential background color or background picture. The background picture for index.php have already chose and kept in the folder.

The choose of background color should be related to pizza. For example the color of pepperoni. It should give a "tasty" feeling to the reader. The font for the website should give a yummy and pizza related feeling. My recommendation is to search for "pizza font", which are the fonts commonly used on pizza advertisement. They can help the reader to bring up their memory about pizza.
The color for the nevigation bar should stand out from the background. But not high contrast color, just make sure the user can notice the existance of the nevigation bar.

All the heading should have the same font size and font choice excpet the one in the idex.php. The header should be strong and clear. The header should quickly get the readers' attention so that the reader can understand the main purpose of the website at the very firt glance. The heading in index.php should really stand out and quickly attract the user's attention. I would recommend a relatively large font size.

### Intended Interactivity

It is recommend for the coder to use ajax for the database and login logout system for this website. References:

*   [https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php](https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php)
*   [https://www.webslesson.info/2016/02/live-table-add-edit-delete-using-ajax-jquery-in-php-mysql.html](https://www.webslesson.info/2016/02/live-table-add-edit-delete-using-ajax-jquery-in-php-mysql.html)

The related files are already in the folder. There will be two table (both in the same database) related to this website. They are the "survey table" and the "admin info table". The general users can access the index.php and survey.php without any limitation. The survey.php will gather the user information and save it in the "survey table".

Here are the information about the html form:
For both name and email, the input will be in type text, name will be name and email, and value will also be name and email. It is recommanded for the coder to implement an simple email validation.
How offen do you eat pizza? -- for thowhis question we are expecting the user to give an interger. It is recommoned for the coder to implement a plugin to check for user input if possible. The input will be in type text, name frequence and id frequence.
What is your favourite kind of pizza? -- for this question we are expecting the respond to be in type char. The input will be in type text, name favourite and id favourite.

The admin can register and login to admin_data.php. The admin_data can only be access if the user have login successfully. The register.php should gather the admin info and save the data in the "admin info database". The login page should check for the user's id and password to see if they are allowed to access the admin_data.php. In the admin_data.php, the admin can see, add, edit and delete the data in the "survey table".

## Design

## Coder
