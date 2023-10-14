# Activity Instructions: 
S05 - Client-Server Communications

```
1. Create a login form in the index.php, that takes a username and password. Upon form submission the data is sent to "server.php" for processing.
2. In the server.php, implement a User class that will have login() and logout() method: 
	a. login method() that should handle the authentication logic of the application.
		i. If the user login the correct credentials, create a $_SESSION variable for the "email" and store the email address.
		ii. Else, create a $_SESSION variable for "login_error_message" and store a value "Incorrect username or password".
		iii. The correct credentials are:
			- Username: johnsmith@gmail.com
			- Password: 1234
	b. logout() method should implement the clearing of the users information and session.
3. In the index.php, refactor the code that will display the  "login_error_message" if the login credential is incorrect.
4. Upon login of correct credentials, refactor the code that will show a welcome message "Hello, <email>" and a logout button.
	a. If the logout button is clicked, clear the user information and show the login form again.
```


