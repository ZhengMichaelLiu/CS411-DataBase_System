# CS411-DataBase_System
Project for CS411 Spring 2018

Group: BigO_Range

Teammates: Anqi Shen, Yiran Li

1.	Basic Function:

Insert: 

-	Can insert new data entity to the user data entity set tables (including Normal user, Individual lessor, and Leasing agent), when the new customer sign up a new user account. 

-	Can insert new data entity to the Apartment data entity set table, if the property company want to add a new apartment/housing information.

-	Can Insert new data entity to the Private_Apartment data entity set table, if individual lessor want to add a new housing/apartment for rental on the website.

-	Can insert new relation entity to the Request relation table, if the user want to schedule a tour with the owner of the housing/apartment.

Update:

-	Can update data entity in the Apartment data entity set table, if the property company want to modify apartment/housing information.

-	Can update data entity in the Private_Apartment data entity set table, if individual lessor want to modify new housing/apartment for rental on the website.

Delete:

-	Can delete data entity from the Apartment data entity set table, if the property company want to delete new apartment/housing information.

-	Can delete data entity from the Private_Apartment data entity set table, if individual lessor want to delete housing/apartment for rental on the website.

-	Can delete relation entity from the Request relation table, if the user (only normal user who send the schedule request) want to delete scheduled tour with the owner of the housing/apartment.

Search:

-	The normal user search allow the users (including Normal user, Individual lessor, and Leasing agent) to search the apartment/housing information according to the input requirements. The Individual Lessor and Leasing Agent can search all the apartments and housing information they owned.

    Schedule Request Search (Join used here):
    
-	When the user want to see their scheduled request, our program would process the SQL query with the join of the three tables (User, request, and Apartment/ Private_apartment) and show the required information to the user. (See details in the SQL code below).

2.	Advance Function: 

-	Recommendation:

Our  website can build a recommendation list based on the schedule request of the user to help our user to find out the ideal living place in their college life. 

-	Google Map API:

When our users search the apartment, the information list of the apartments can be both seen as the table on the web page and as the markers on the google map api with the housing information if the mouse is placed on the marker.

-	Online Scheduler Emailing:

Our website allows the customers to fill the form of schedule request or information request of their target apartment, and our website would automatically help customers send their requests to the Leasing Agent or Individual Lessor.
