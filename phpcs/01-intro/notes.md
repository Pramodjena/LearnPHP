# Introduction to Web Development

## What is Web Development?

- Web development is the process of creating applications that run on the internet using web technologies.

It includes:

    - Frontend (Client Side)

    - Backend (Server Side)

    - Database

## Components of Web Development

    1. Frontend (Client Side)

        Runs inside the browser.

        Technologies:

            - HTML
            - CSS
            - JavaScript

        Responsible for:

            - Design
            - Layout
            - User interaction

2. Backend (Server Side)

        Runs on the server.

Technologies:

            - PHP
            - Python
            - Node.js
            - Java

        Responsible for:

            - Processing data
            - Handling authentication
            - Connecting to database
            - Business logic

3. Database

        Stores data permanently.

            Examples:

            - MySQL
            - PostgreSQL
            - MongoDB

## What is Server-Side Technology?

- Server-side technology refers to programming that executes on the web server before sending a response to the client.
The browser never sees server-side code — it only sees the output.

   Why Do We Need Server-Side?

        - Because HTML alone cannot:
        - Process login
        - Store data
        - Validate users
        - Connect to database
        - Perform calculations securely

Can HTML verify authentication ?
- NO

- PHP (Solution)

What is client ?

- A client is a device or browser that sends a request to a server.

- Chrome 
- Brave 
- FireFox 

What is server ?

- A server is  a system that :
   - Receives request 
   - Processes it 
   - Sends responses 


## How the communication happens

- User types URL 
- Browser sends HTTPs request 
- Server processes it 
- Server returns response
- Browser displays the output 


Q. Can we write php code in notepad and open it directly in browser ? 

- No 
- It needs a web server to execute.

PHP is interpreted by web server like (Apache,Nginx) without this browser treats as plain text. 

## What is web server 
- Server that handles HTTP request.
  - Apache 
  - Nginx 
  - IIS

## Static vs Dynamic 

- Static website :

   - Fixed content 
   - No database 
   - Same for all users 
   - Only HTML,CSS

- Dynamic website 
    - Content changes 
    - Uses server-side language 
    - Connect with database 
    - Different output for different user 


- <?php(opening tag)  - This is the syntax to write php code 
- ?>(closing tag)

- echo ( To print it in browser)