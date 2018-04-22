# assignment5

## Information Architecture 

### files purposes
files for admin functionality:
register.php -- sign up to be admin and gain access to the database 
login.php -- log in page for admin 
logout.php -- log out from the admin accessable page 
config.php -- contains database credentials 
admin_data.php -- if admin login successfully in login.php, it will forward the user to this page. At this page, the admin (user) can perform the "four functions on the database table" (see, add, edit adn delete)
delete.php -- delete the selected data in the database 
edit.php -- edit selected data in the database 
insert.php -- insert specfic data in the database 
select.php -- select the required data from the database 

files that all users can access, no log in needed:
index.html -- the main page
survey.html -- the survey page 

### basic information 
This website focus on pizza. It will encourage the user to fill out a survey related to the pizza. Regular users can access the index page and the survey page. The admin will need to either log in if they already have an admin account or register for an account if they don't have one. After the admin log in, he or she will be able to see and alter the database. 

### intended layout
For all the pages:
Nevigation bar:  All the page will have idential navigation bar, which contains links to three pages. They are index.php, survey.php and login.php. The navigation bar will always stand at the very top of the website horizontally. The user should be able to go to all three pages at any point of time. After the admin login and reach the admin_data.php, he or she will be able to log out by simply clicking the logout botton. It will take the user back to the login page. From there the user can decide whether to login again or go to index.php or survey.php by using the navigation bar on the top of the page. 

Pizza logo: All the page will have the pizza logo. The logo is the link that can take the user back to the index.php.

Header: except for the index.php, all the pages will have header at the top of the page, right above the navigation bar. 

index.php -- This page will use z- pattern to attract users attention. The left up corner will be the pizza logo for the website. It is in the class "primary", which stand for the primary optical area. The right up corner will be some text to encourage user to fill out the survey. It is in the the class "strong", which stand for strong follow area. The left down corner will be the a simple text asking if the user want to share his or her idea about pizza. It is in the class "weak", which stand for weak visual area. The right down corner will the link for user to go survey.php to fill out the survey. It is in the class "terminal", which stand for the terminal area. 

survey.php -- This page will contain the heading of "Yummy pizza, Yummy survey". The survey will ask for users' name, email and the following two questions. 
How offen do you eat pizza? -- for thowhis question we are expecting the user to give an interger. It is recommoned for the coder to implement a plugin to check for user input if possible. The input will be in type text, name frequence and id frequence.
What is your favourite kind of pizza? -- for this question we are expecting the respond to be in type char. The input will be in type text, name favourite and id favourite. 
For both name and email, the input will be in type text, name will be name and email, and value will also be name and email. It is recommanded for the coder to implement an simple email validation. 

For login.php and admin_data.php, the content of the page should stay under the header and navigation bar. The content should stand at the middle of the page. 




### intended mood/feeling 
For all the pages: 
  All the pages excpet index.php should have idential background color or background picture. The background picture for index.php have already chose and kept in the folder.  
  The choose of background color should be related to pizza. For example the color of pepperoni. It should give a "tasty" feeling to the reader. The font for the website should give a yummy and pizza related feeling. My recommendation is to search for "pizza font", which are the fonts commonly used on pizza advertisement. They can help the reader to bring up their memory about pizza. 
  The color for the nevigation bar should stand out from the background. But not high contrast color, just make sure the user can notice the existance of the nevigation bar.
  All the heading should have the same font size and font choice. The header should be strong and clear. The header should quickly get the readers' attention so that the reader can understand the main purpose of the website at the very firt glance. 
