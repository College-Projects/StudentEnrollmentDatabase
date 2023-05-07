# StudentEnrollmentDatabase

<h3>Team members:</h3>
<li>Mariam Medhat Mahmoud Fahmy</li>
<li>Yomna Waleed Tawfeek</li>
<li>Alaa Ahmed Ibrahim Idrees</li>
<li>Zeinab Ahmed Younis Ahmed</li>
<li>Sayed Ibrahim Sayed Ibrahim</li>

<h3>Project’s Idea:</h3>

It’s a user-friendly website that allows the user to add, display, update, and delete students’ data from the database. Our website is executed using HTML, PHP, CSS, and SQL languages. 

<h3>Brief description:</h3>

A website that allows the user to modify data about students through forms which 
directly changes the data in the database. The data is stored in the 
XAMPP which is connected directly to the university’s website. The 
user enters the website through an account; and he or she can add, 
modify, update, and delete students data through forms. The students 
data are ID , full name, gender, age, email, nationality, phone number, 
date of join, address, academic year, department, image of the student. 
Finnally the website and the database are connected using free server 
called infinityfreeapp.

<h3>XAMPP:</h3>
Through the XAMPP control panel we admin the Apache, MySQL to 
control the database. To connect the website and the database we use 
the localhost website.

In the localhost/phpMyAdmin contains the database called test3. Test3 
contains two main tables user and registration. The user table contains 
information about the user who can uses and modifies the data.The second table is called registration table that contains the students’ 
information. 

<h3>The web developer:</h3>
The user can use the website if only he or she already signed up and has 
his or her account. For the user’s first time accessing the site he must 
sign up to form a new account. The data is simply displayed to the user 
after login for any type of modification. the web gives the user 
accessibility for searching, adding, deleting, updating, and entering user 
profile.

<h3>Code:</h3>
The code consists of files ( HTML, CSS, PHP ).

<h3>Connect file:</h3>
Php file to connect the database and the website.

<h3>Index file:</h3>
it is the first page in the webside and connects to database. It contains 
form in it to enter the email or user name and password if it is already 
had it. if not, the user will click to Register Account to make a new 
account. after check the correctness of account ,it will enter to display 
page.

<h3>Login file :</h3>
this used to check if database contain this user’s email and the 
password is true or not .if correctness ,it will enter to display page .

<h3>register file:</h3>
this contains forms where user can fill it up to make anew account to 
control of the user information. But first, the code must check if this 
email or user account have already exit in database(will alert “this 
account already exit ”) or not (will enter to display page ) and here 
check the equality of password and conform password if matching or 
not(will print password didn'n match).

<h3>Test files:</h3>
The html file consists of html code for the form of the registration that 
adds or updates student’s data. The test.php file contains of SQL code 
that saves the data from the registration form into the registration table 
in the database.

<h3>Display file:</h3>
It is a php file that consists of HTML CSS for displaying the table of data 
of all students in the database. The SQL codes such as SELECT are used 
to take data form data base and then display it using query.

<h3>Search2 file:</h3>
initially we define getAge($dop) function that calculates age of the 
student from date of birth . there are form to input the name that you 
want to search for it, after click search link it will search for that name if 
exists will display the information, else it will print No Record Found.

<h3>Delete file:</h3>
A php file that deletes a student with all of his or her data.

<h3>Update file:</h3>
A file that contains the most of the test’s codes that give a registration 
form for any updates of the student’s data.

<h3>User file:</h3>
in this we can display information about user (gender, image, fullname)
and there are 2 links to update and logout.

<h3>Log-out file:</h3>
it enters to login page, and destroy the old user.

<h4>There is a point of clarification, and it is that we cannot control any data 
unless user logged in.</h4>

finally the following link is to enter the web :
http://studentenroll.infinityfreeapp.com/








