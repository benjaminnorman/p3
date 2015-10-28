#Project 3

###Overview
The purpose of Project 3 is to create a tool for developers to use to make their work easier. The two tools that are integrated into the site are a Lorem Ipsum generator, and a random user generator.

The Lorem Ipsum generator takes an integer between 1 and 100 as input, and generates that number of paragraphs filled with random Lorem Ipsum text. This may be quite useful to someone trying to fill space on an empty blog for design purposes, for example.

The random user generator creates fictitious details about an imaginary user for the purposes of filling forms, creating sample documents, or other similar tasks. This generator takes an integer between 1 and 100 as input, and creates that number of users and displays them on screen.

If a user enters some input besides an integer in the allowed range, they are sent to an error page instructing them to return to the form and enter an input within the parameters.


###Live URL
The live Project one can be found here:
[Live Project 3](http://p3.benorman.com)

The video presentation for this project can be found here:
[Project 3 Video](http://youtu.be/7YNMWb1X-fM)

###Instructions
Simply access the main page via the URL above, then select the tool you would like to use from the list of links.

###Other Details
On the back end, this website utilizes the routing capabilities of Laravel to transport users to the correct pages when they access certain URL's or submit forms.
There are 'create' views and 'show' views that take form input, and display the processed output, respectively.

The input data is passed from the 'create' view to the controller, where some logic creates the desired output. This output is then passed to the 'show' view for display.

The 'show' views use a small amount of the blade language combined with a simple foreach statement to iterate over the data that is passed to it.

###Plugins and Libraries
The controllers implement external packages in order to obtain the user data and lorem ipsum text. These packages are managed by Composer, and are both quite simple to implement.
Simply, the controller instantiates an instance of the package's class, then uses the methods associated with that class to generate the data.