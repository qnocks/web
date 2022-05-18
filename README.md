# Web technologies

> **Note that this repository was fast coded in copy paste way, so contains the worst practices and should not be used for education!**

## Topic

Neural networks

## Tasks

###  Task #1

Develop three pages of the site on the topic defined by the option. One page should be laid out using HTML4 (div tag),
the other page - using HTML5. One page should contain links to the sites that were used in the preparation
(page title: "Sources used"). Text, list and table should contain different information.
Elements on the page should be arranged from top to bottom. Do not use format. The topic is saved for all laboratory semesters. 
Each element of the site should correspond to the theme.

Mandatory elements of the site:
1) Site header at the top of each page (site name, page name, logo)
2) Menu with hyperlinks to navigate between pages on each page. Pages prepared during the performance of each subsequent work should be embedded in the main site. Full menu (after doing all the work): 1.. main page, 2.. second page, 3.. sources, 4.. lv3 (javascript script), 5.. questionnaire (lv 5 with form), 6.. tables from database, 7.. tables from xml.
3) Table with structure by option
4) Two-level list (type - numbered or marked - sets the option). The size of the list must be at least as large as the following scheme:

* item 1
    * item 1.1
    * item 1.2
* item 2
    * 2.1 item 2.1
    * 2.2 item 2.2
* item 3
    * 3.1 item 3.1
    * 3.2 item 3.2

5) Set of pictures
6) Text of about 3 A4 pages, approximately 1000 words.
7) "footer" at the bottom of the page

###  Task #2

Style the HTML pages developed in Lab 1 using Cascading Style Sheets. Complete tasks:
1) Use three options for connecting css tables:
- linked stylesheets (separate external file)
- global style sheets (css block in html file (style tag))
- local style sheets (locally for one tag (style attribute)).
2) In tables
- draw up borders;
- insert a picture into one of the cells, while maintaining the alignment in the table.
3) Use the following technical means:
- selectors: tags, classes, identifiers, context;
- indication of the size: in pixels, in millimeters, through a percentage;
- color indication: word, hexadecimal format, decimal format.
4) Use two pseudo selectors
5) Complete the task according to the individual option (Table 1). When designing a drop-down list, it is forbidden to use the select tag.

###  Task #3

Using the javascript editor, write a program that performs a task on a variant and uses an array.

Write an algorithm that fills a matrix of arbitrary size according to the sample

|     1     |     2     |     3     |     4     |     5     |
|-----------|-----------|-----------|-----------|-----------|
|     10    |     9     |     8     |     7     |     6     |
|     11    |     12    |     13    |     14    |     15    |

### Task #4

Prepare several scenarios for the tasks below. Embed all scripts in the site from laboratory work No. 2. The options in Table 1 determine how the scripts are implemented (type of event, method of including the script, method of selecting an element on the page, design of the function).
1) Calling a pop-up window with the name and group of the author of the site
2) Write the task from laboratory work No. 3 on the html page as a function, following the example program from listing 1. The function must contain one parameter that is used to pass the data input option: through initialization or through user input. To select an option, make two buttons. The page should print the task, the array, and the result of the calculation.
3) Add a scenario according to the option from Table 1 (column "scenario")
4) Add/remove table row
5) Change the color or size of an element

*Script #2*: A clock that displays the time in the format: it is now 19 hours 20 minutes

### Task #5

Based on the examples given, prepare a web page where the user enters several values ​​and sends them to the server. After sending to the server, the entered data is printed on the page. The variant determines the type of request sent to the server (get or post) and the appearance of the displayed data. In addition, the variant specifies an additional form element that you need to master and include in the form yourself.
The questionnaire questions should reflect the theme of the site chosen in laboratory work No. 1. Mandatory form fields for the questionnaire: full name, list with a choice of values, a set of checkboxes (checkbox), a set of radio buttons (radio).
The server script is written in python.
When using the get method, the contents of the address bar should be included in the report after receiving a response from the server.
The page should be built into the site prepared in previous works.

### Task #6

Install 3-tier architecture components. It is allowed to use Apache + PHP + MySQL (WAMP software package - XAMPP, Denver, etc.)
as links of a 3-level architecture. Server scripting language - PHP. Prepare a database consisting of 2 tables linked by
a one-to-many relationship. Each table must be in 3 normal form and contain at least 5 fields. The content of the table
fields must match the theme of the site. All data from the tables must be displayed on the page included in the developed site.

### Task #7

Develop an AJAX application to access the database prepared in the previous lab.

Automatic search for information when the user specifies the search parameters in the form. 
Example: searching for profiles without reloading the page. When the user selects any parameter, information about the 
number of records that match the search conditions appears on the screen.

### Task #8

Prepare an xml file containing the data for the table. The content of the table is determined by the option selected in lab 1.
The table must contain at least 4 columns and 10 rows, one of the columns must display graphic files.
Use XML Schema or Document Type Definition to validate the generated XML document.
Use XSLT technology to display the content of an XML file on a website. Display data from an XML file in two ways: in a 
table (example 1) and line by line (example 2). Embed the created pages into the site developed earlier.
