# BI_21-22_Gr11
This project is a semester final project on 'Business And Internet' subject at University of Prishtina. Built with php and MySQL.

# Setting it up

After you have succesfully pulled the app to your local computer these are the steps that you need to do in order to run the app:

## Setting up the database
1. Go to MySQL Workbench (its an app you need to have installed along with MySQL) and log in as the root user
2. In the folder mysql_connection you will find this file app_creator.sql, copy its contents
3. Create a new SQL file and paste the contents 
4. Run the sript, and you will see that the app_creator database has been creates under schemas

## Setting up xampp
1. Place the app folder inside your xampp C:\xampp\htdocs folder (things might not work well if you have Wordpress there, so please move Wordpress to another folder for now)
2. Open the XAMPP control panel and press Start for Apache Server
3. Visit http://localhost:2521/punimi/login.php (NOTE my port is 2521, you can check your port on the XAMPP control panel)
(ANOTHER NOTE: "punimi" in url is the name of the folder that I placed the files on, for your case type the name of your folder)
4. On your browser you shoud see something like this: 
![image](https://user-images.githubusercontent.com/45471217/168468991-c1c8cd96-1794-44f4-b6f3-75c1c5f35764.png)

Go on nd create your first user and test the app!
