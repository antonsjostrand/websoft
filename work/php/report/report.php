<?php 
    $pageTitle = "Report";
    require __DIR__ . "\\view\\header.php";     
?>
<article>

<header>
    <h1>A report from the course DA377B</h1>
</header>

<section>
    <h2>S01</h2>

    <p class="report-question">
        Did you before know about the techniques Git, GitHub, Markdown and/or GitHub Pages? 
    </p>

    <p class="report-answer">
        I did know about the techniques Git and GitHub. These are tools that we have used throughout the program
        and I've utilized them when working as well. I didn't know about Markdown or GitHub Pages, however they seem 
        to be really convenient and I look forward to utilize them more.
    </p>
    
    <p class="report-question">Have you ever created websites before?</p>

    <p class="report-answer">
        I haven't created a complete website before that I've published for others to see. I have however tried both HTML and CSS, both privately and at work.
        At work I've done some minor changes to web applications which involved altering some HTML and CSS code.
    </p>
    
    <p class="report-question">
        Briefly explain your experience and knowledge of web application development.
    </p>

    <p class="report-answer" >
        I haven't gotten that much experience or knowledge in the field of web application development at this very moment. 
        The only experience I have at this very moment comes from working a bit at Axis in Lund where I coded a 
        bit in PHP in their CRM-system and as previously mentioned some HTML and CSS. Unfortunately I had other tasks as well which mean I didn't get to do it all that much.
        My knowledge basically consists of the very basic stuff, such as what the different parts are invovled (front-end/back-end) and how web applications can 
        communicate with each other. But now I've just started working at "Studentlitteratur" where I will be working in the back-end of one of their web applications.
        So hopefully within a couple of weeks my knowledge and experience will be way greater than it is right now.
    </p>
    
    <p class="report-question">What is your TIL for this course section?</p>

    <p class="report-answer">
        My TIL for this section I would say is mostly git related topics. I had never forked a repository before and found that interesting.
        I've also learned how to utilize GitHub Pages, which was extremely convenient and fun to use. I've learned some new git commands, such as tag.
        I also increased my understanding of how repositories work and what is meant by upstream and downstream.   
    </p>
</section>

<section>
    <h2>S02</h2>
    <p class="report-question">
        Have you any previous experience of HTML, CSS and/or JavaScript?
    </p>

    <p class="report-answer">
        I haven't gotten that much experience of either of this techniques.
        As I mentioned in the previous report I've done some HTML and CSS privately and some at work but nothing major.
        Perhaps only changed a few lines of code, easy work such as changing color or sizes mostly. 
        I haven't really worked with JavaScript at all at. I've seen it, but haven't worked with it.
    </p>

    <p class="report-question">
        Explain the role of HTML, CSS and JavaScript in web development.
    </p>

    <p class="report-answer">
        HTML is used by web-developers to structure the content of a website. Basically one can say that HTML provides a skeleton that could be further built upon using other languages.
        CSS is the code with which web-developers can style their websites. That is you style the skeleton created by HTML, both by altering the looks of the elements but also by changing the position of said elements.
        And finally JavaScript. JavaScript is used to make a website interactive, without it a website would be very stale. With JavaScript web-developers can add such things as animations to their website.
        To conclude you can shortly say that: HTML is the skeleton of the web, CSS is what adds the flesh and muscle and JavaScript brings the page to life.
    </p>

    <p class="report-question">
        Give a brief explanation of how the browser, the HTTP protocol and the web server interacts.
    </p>

    <p class="report-answer">
        So basically what happens is that a user enters the URL to a page that they want to visit. To know where this page can be found the browser first needs to consult a DNS-server.
        When the browser knows the address of the page it sends a get request, that is it utilizes the HTTP protocol, to the web-server asking for a copy of the requested website. 
        The web-server accepts the request and responds with a response code to indicate that it is okey for the browser to access the page. This code is "200 OK".
        The web-server then transmits the data to the browser making it possible for the user of the browser to view the page he/she requested.
    </p>

    <p class="report-question">What is your TIL for this course section?</p>

    <p class="report-answer">
        Due to the fact that I've encountered HTML and CSS at work and done some stuff privately I can't say that I've learned that much about those aspects of this section.
        However, I feel that I've gotten a better understanding of JavaScript and I'm looking forward to write some JavaScript-code.
    </p>
</section>

<section>
    <h2>S03</h2>
    <p class="report-question">Do you have any previous experience of client side JavaScript?</p>

<p class="report-answer">
    As previously mentioned I don't have that much experience of JavaScript, absolutely none when it comes to the server side. However, since the previous assignments questions were answered I've actually encountered JavaScript a bit more at my new job. I'm hired to work in the backend but sometimes I have to go through the front-end code as well. This front-end is written in React.js, and I've read quite many lines of it up until this point and therefore learned a bit more about it.
</p>

<p class="report-question">Can you compare and relate the JavaScript language to any other language you know?</p>
 
<p class="report-answer">
    Since I've almost exclusively worked with Java there is not much else that I can compare and relate it to. However, what I've noticed is that the syntax of Java and JavaScript is not all to different. Sure there are differences, but I still find it quite easy to grasp JavaScript code quite quickly due to my previous experience of Java. One thing that I'm not sure if I like or don't is the fact that JavaScript is more "relaxed" compared to Java. One of these "relaxed" attributes of JavaScript is that it is weakly typed. I think it is convenient but I still prefer the strongly typed language that Java is. I feel like it gives you more control and structure. However, I find it very fun to write JavaScript code due to the fact that you are creating something interactive!
</p>

<p class="report-question">Describe how you worked with the coding exercise, what grade do you aim for and how did your code turn out to be?</p>

<p class="report-answer">
    So for this coding exercise I figured that I would like to aim for grade 5. To achieve this I had to learn a lot of new things and understand the tasks correctly. Always when I work with coding tasks I try to be quite structured in the way I work, working with one task at the time. In this case I started working with everything that involved the school-api and finialized everything needed for grade 5. I then went on to the moving object and finally the flags. I would say that my code is decent, there is certainly room for improvement. But I guess the improvements will come as I get more experienced in working with JavaScript. There are certainly features that I don't know about and have therefore not utilized. But all in all, I feel that my code is structured properly and does what it is supposed to do. One thing that I do feel could be done better is the utilization of the JavaScript objects. I think that I found good use for them, but still feel that there is more to them than what I'm utilzing right now, which could feel a bit clunky.<br/><br/>
    
    <strong>Grade 3:</strong>
    The requirements for this grade are fulfilled. <br/>
    I created a table that is filled with data for the selected municipality. There is no reload needed for the data to be shown in the table. I added my own style to the table as well, making it look quite nice in my opinion. <br/>
    Regarding the moveable object I added a HKR-logo to the footer via the move.js script. The functionality is quite simple, each click moves it either left or right depending on its current position.<br/>
    All pages were added to the navbar aswell.<br/><br/>

    <strong>Grade 4:</strong>
    The requirements are fulfilled.<br/>
    To make my moveable object a bit more dynamic I added an event to the footer of the page. When entering the footer the object is shown, when leaving the footer the object is hidden.<br/>
    I added a flag.html page as well, and the flags were created purely with HTML and CSS.<br/><br/>

    <strong>Grade 5:</strong>
    The requirements are fulfilled.<br/>
    I added a select to the selection of schools which is filled with the name of each municipality. When clicking on a name all the schools are fetched for that municipality. Instead of fetching the data from three different JSON-files I utilized a CORS-proxy, this allows me to fetch all the data directly from the api with my browser. Therefore, in my select all the municipalities are shown.<br/>
    I added a transition for the flags. You have to click the name for the flag to show up, with a smooth transistion from hidden to visible. Before you can change to another flag you have to click the flag that pops up to make it go from visible to hidden in a smooth transistion.<br/>
    I also utilized JS-objects to handle both my moveable object and the flags. I felt that I found a good use for them.<br/><br/>


</p>

<p class="report-question">What is your TIL for this course section?</p>
    
<p class="report-answer">
    In this section I've learned a lot more about CSS and JavaScript.
    When it comes to CSS I feel like I can more quickly create the design I want, understanding the different tools and functions at hand. But there is still a long way to go before I could design a web-page/application without the help of exernal sources of information. But in short, I like CSS so far and I'm becoming better and better at it. I found the transition function of CSS very cool to learn, it feels that it is a simple way of making basic elements very interactive with the users.
    When it comes to JavaScript I've learned quite a lot, just basic stuff but still. I've experimented with different functions and I've structured the code in different ways. I feel that I understand JavaScript better and how it interacts with the HTML-elements. I also learned how to bypass the CORS-problem encountered when using the provided api.
</p>
</section>

<section>
<h2>S04</h2>

<p class="report-question">Tell me about your previous experience on node/npm or any equal programming tools.</p>
    
<p class="report-answer">
I haven't worked with any of the tools mentioned in the question. Neither have I worked with any similar tool, atleast not that I can think of.
</p>

<p class="report-question">How do you feel about working with JavaScript, Node and Express?</p>
    
<p class="report-answer">
Well I would say that I enjoy it very much actually!
I feel like it is quite easy to grasp what is going on and therefore easy to work with. Even though I'm not that experienced in working with these techniques I still feel that I can produce something of actual value. 
</p>

<p class="report-question">Explain how you did take on the coding assignment, did you have a plan and did it work?</p>
    
<p class="report-answer">
Well, this coding assignment I worked my way up from the bottom. I started with all the requirements for grade 3, then I moved on to all the requirements for grade 4 and then finally all the requirements for grade 5. So basically my plan was to take it slow and structured, finalizing each grades-requirements before moving on to the next one. I would say that it worked good actually. I encountered some problems with how I coded something for one task that had to be changed for another task. But nothing big, so overall I would say that my plan worked.<br/><br/>

<strong>Grade 3:</strong>
The requirements for this grade are fulfilled. <br/>
When running my application you can start it with the command "node index" and the port will be 1337. <br/>
I added a copy of my report folder so that all the different pages are accessible from the node application.<br/>
I added a path "lotto" that does exactly what the instructions say, printing out a random series of 7 numbers.<br/>
The code is well organized.<br/><br/>

<strong>Grade 4:</strong>
The requirements are fulfilled.<br/>
The path lotto-json will provide you with a JSON-response that holds the data of the lotto draw<br/>
Sending in your on lotto row as a querystring will provide you with a json-response, containing: The lotto series, your row and the amount of matching numbers.<br/><br/>

<strong>Grade 5:</strong>
The requirements are fulfilled.<br/>
I added the possibility to send in the querystring on the path "lotto". <br/>
The webpage will contain the following when you do this: <br/>
- A table showing the random numbers (the lotto series). <br/>
- A table showing your numbers (the lotto row)<br/>
- An explanation of how which numbers you had correct and how many.<br/>
- I also added for fun an output in both tables marking the matching numbers in green <br/><br/>


</p>

<p class="report-question">What grade did you aim for and was it a difficult level?</p>
    
<p class="report-answer">
I aimed for grade 5. Well, it wasn't all to difficult. The backend code was quite straightforward, the bigger problems arose in the front-end part of the application. I had some trouble with displaying the tables as I wanted and at the specific places on the webpage. These issues were solved with CSS mainly and how the JSON-response was utilized in the .ejs file.
</p>

<p class="report-question">What is your TIL for this course section?</p>
    
<p class="report-answer">
This section I learned a lot more new stuff about JavaScript and its functionalities. But also I learned how to work with Node and Express. One thing that I've never thought about before was how routing was done in the webpages, so that was interesting and something I will keep in mind in the future.
</p>
</section>

<section>
<h2>S05</h2>
<p class="report-question">How do you feel about PHP as a programming language?</p>
    
<p class="report-answer">
Well I would say, even though I have limited experience with PHP, that I could imagine working with it after I graduate. As with every programming language it sure has features I like and some that I don't like. One feature that is a little of both is the variable declaration, I'm so used to having to declare the type when creating variables and when I don't have to it is both satisfying and not, I also miss the feeling of extra control that hard-typed languages provide. One thing that I liked was the way we worked with the database through the PDO class.
</p>

<p class="report-question">Can you compare PHP to other languages you know?</p>
    
<p class="report-answer">
There is one similarity that comes to mind when comparing JS and PHP, and that is the variable declaration. They way they don't need to have type. Comparing PHP to the programming language we have used the most Java, nothing similar comes to mind except that both are server-side languages. The most similar language I've seen and worked with a little bit is Perl. I touched perl at Axis, and the syntax and formatting is quite similar to PHP.
</p>

<p class="report-question">Describe how you took on the coding exercise, what grade did you aim for and are you satisfied with the result?</p>
    
<p class="report-answer">
I aimed for the grade 5 this exercise. Yet again I tried to work my way through all the requirements one by one, commiting and pushing my changes when I had reached each grade. I must say that I'm quite pleased with the result, the functionality is in place and it does what it is supposed to. However I feel like I could probably have structured the code a bit better and probably made it even better. I also feel that the design of the pages could have been better as well.<br/><br/>

<strong>Grade 3:</strong>
The requirements for this grade are fulfilled. <br/>
I converted all my .html files to .php.<br/>
I created a view for the header and one for the footer, these were included in my different pages and were used to structure the pages nicely.<br/>
I updated my database according to the instructions.<br/>
I implemented a search-page in which you can perform a wildcard search. <br/>
All the pages were added to the navbar.<br/><br/>

<strong>Grade 4:</strong>
The requirements are fulfilled.<br/>
Through the navbar you can access a create-page in which you can create new rows that are inserted into the database. <br/>
Through the navbar you can also access a update-page that does what its name suggests, you can here update rows in the database.<br/><br/>

<strong>Grade 5:</strong>
The requirements are fulfilled.<br/>
A delete-page was added, allowing users to delete rows from the database if they want to. <br/>
A read-page was added, this page presents all the data from the database in a HTML-table. It also contains four links that you can click to perform all the different CRUD-operations on the data in the database.<br/>
When clicking a link the page renders that particular CRUD-operation below the HTML-table. This means that you stay at the same page (read.php) and from there you can perform all the different CRUD-operations.<br/>
To make this possible I had to create views of each of the CRUD-operations and requiring them when the link is clicked.<br/><br/>
</p>

<p class="report-question">What is your TIL for this course section?</p>
    
<p class="report-answer">
In this section I must say that I enchanced both my basic HTML skills, but most importantly I've started to understand PHP better and what it is capable of. One thing that I learned that I found quite fun and useful is how to format a querystring from the HTML-form.
</p>
</section>

<section>
<h2>S06</h2>
<p class="report-question">What is your own opinion on popularity of programming languages and what are your thoughts of future popularity among programming languages?
</p>
        
<p class="report-answer">
I would say that my opinion is that the current popularity of programming languages are in a stage were the programming languages that have been around for a long time is the most popular. I guess this is due to the fact that they are the most well-developed languages at this very moment but also from the fact that there might not have been to many competitors back when they were created. Such languages as Java and C fit into this quite well. The future popularity of programming languages I think will soley depend on easy they are to learn but still provide good functionality, and this is because I think this area of work will become more and more popular. Especially now since the schools are picking up programming at earlier stages in educations, such as junior schools. Therefore, I think that the easier one language is to understand and use the more popular it will become. The more advanced, controlling languages such as C and Java might not be as popular. But I guess they will always be needed. To conclude, I think that high-level languages will be increasingly popular.
</p>

<p class="report-question">What will be your own choice for selecting future programming languages?</p>
     
<p class="report-answer">
My choice of programming language to work with and conduct my own projects within will have to wait until I have gathered enough experience from working to make a fair choice. However, if I were to guess I will be ending up in the back-end part of applications. Therefore I might choose to work with languages such as Go, C# or even Java.
</p>

<p class="report-question">Do your own investigation on https://trends.google.com to customize your own comparison on programming languages (or frameworks) and elaborate on the results.</p>
        
<p class="report-answer">
The area of my investigation is tied to my workplace and the programming languages I interact with there. I find it interesting to see how the popularity of these techniques have changed throughout the years, according to google-trends. So, the different languages I've interacted with is Go and PHP at my current workplace. They have changed from mostly PHP to only Go for all their new applications, or atleast as much as possible. According to google-trends, the popularity of PHP has dropped significantly the last few years, while that of Go has been either slightly increasing or staying stable. PHP is still more "popular" than Go, but according to this trend, this will change in the near future. I think this mostly depends on the fact that people might want to try something new, and that Go offers some new features but also binds a lot of good features of other programming languages together into one language. I also think that people are always looking for the best way to do things, resulting in them experimenting with new things. Therefore, this could also be temporary, resulting in PHP increasing in popularity again and Go remaining where it is.
</p>

<p class="report-question">If you were to recommend a language/framework/technology to your potential employer and your next large project, what would it be and how would you “sell it”?</p>
        
<p class="report-answer">
Depending on the project I guess, but for the projects similar to the ones I'm interacting with in school and at work I would recommend them to work with some type of JavaScript. There is a lot of people that wants to work with JavaScript so finding new personnel that could easily get into the code and start working wouldn't be hard. I guess I would recommend them to utilize TypeScript, this due to the fact that I think this should be the standard for everyone. I feel like TypeScript easily erases some problems due to its strong typing. So I guess my USP:s for TypeScript would be that it is a lot of people that could work with it and that provides strong typing.
</p>

<p class="report-question">What is your TIL for this course section?</p>
        
<p class="report-answer">
My "TIL" for this course section was basically to use tools to find data on how programming languages are utilized and how popular they are. I also found out that Go is not nearly as popular as I thought it was and that Java and C is still the kings of programming languages when it comes to utilization.
</p>
</section>

<section>
<h2>S07</h2>
<p class="report-question">Try to explain the platform .NET (C#, ASP.NET) to a skilled programmer, but newbie to this Microsoft technology.</p>

<p class="report-answer">
    So .NET is a developing platform that can be used to build many different applications. You can build everything from regular desktop applications to games and IoT applications. The applications you build can be used across different systems. ASP.NET is an extension of the .NET platform which is used to create webapplications. The ASP.NET platform provides additional tools and libraries to ease the development of webapplications. C# is a object-oriented programming language and is one of many languages that can be used in the .NET platform environment.
</p>

<p class="report-question">Elaborate by comparing .NET technologies with the other technologies we learned during the course.</p>

<p class="report-answer">
    When looking back at the techniques we have worked with during this course I would say that .NET was by far the hardest one to grasp. I feel that there is so much to learn in .NET/ASP.NET since they are quite complex and there is so much that it can do. When working with .NET/ASP.NET it feels like you are given so many templates and so much help that it is hard to understand what is going on at some times. Sure, all of the techniques we have utilized were hard in their own way, but .NET was a bit tougher than the rest.
</p>

<p class="report-question">Describe how you took on the coding exercise, what grade did you aim for and are you satisfied with the result?</p>

<p class="report-answer">
    For this coding exercise I did one application at a time, starting with the console application. I don't know why but the console application intrigued me more than the webapplication for this assignment. I aimed for grade 5 and I'm quite happy with the result. Everything works and I learned a lot throughout the assignment. There is for sure room for improvement though.<br/><br/>

    <strong>Grade 3:</strong>
    The requirements for this grade are fulfilled. <br/>
    <strong>Console:</strong><br/>
    My console application provides the user with a menu in which they can choose between the required assignment choices. <br/>
    I also provide a pretty output that makes it easier to read and understand the result of each choice<br/><br/>

    <strong>Webapp:</strong><br/>
    I've created a webapp that has a page About, describing the task briefly. In the homepage I have table showing all the different accounts available from the JSON-file. I have a model class named Account and a service class handling the json-file, basically the service class is my "database interactor".<br/>
    I have added the paths needed, "api/accounts" and "api/account/<em>number</em>".<br/>
    The paths are handled by my controller AccountController, the controller intern communicates with my service to perform the correct action.<br/>
    The paths do what they are supposed to do and they can be accessed directly from the homepage, "api/accounts" is a link that responds with the data of all accounts in json-format. "api/account/<em>number</em>" responds with an individual accounts data and can be accessed from the HTML-table.<br/><br/>
  
    <strong>Grade 4:</strong>
    The requirements are fulfilled.<br/>
    <strong>Console:</strong><br/>
    I added a search option to the console application, allowing the user to search for a string.<br/>
    I also added a move option, this allows the users to move money from one account to another. These changes are then saved to the JSON-file so that if the application is restarted the new changes will be present.<br/><br/>

    <strong>Webapp:</strong><br/>
    I added the functionality to send in a PUT-request to the webapplication. This is handled by the AccountController, this is done on the path: "api/account/<em>number</em>/transfer". The targeted ID and amount of money is put into the querystring.<br/> An example: http://localhost:5000/api/account/111111/transfer?targetId=42&amount=11 <br/>
    This was tested with the tool Postman. <br/><br/>

    <strong>Grade 5:</strong>
    The requirements are fulfilled.<br/>
    <strong>Console:</strong><br/>
    Yet another choice was added to the menu, create new account. The application will ask you to enter the needed information and then it will save it to the json-file. This will result in the changes being present even if you restart the application.
    The code has also been split into three different files.  <br/><br/>

    <strong>Webapp:</strong><br/>
    I added a form on the home-page that allows the user to specify the account he/she wants to transfer money from, the account to receive the money and the amount. The form is using the POST-method and this is handled by the AccountController.<br/>
    I think that I have structured my code nicely and that I'm reusing code whenever possible.<br/><br/>

</p>

<p class="report-question">What is your TIL for this course section?</p>

<p class="report-answer">
    I would say that my TIL for this section would be everything that have to do with developing utilzing .NET/ASP.NET. I also learned that it is WAY harder to find information regarding this platform compared to the others we have worked with. This could be because of the lack of skill I have in the area, but still I found it quite tough.
</p>
</section>

<section>
<h2>S08</h2>
    <p class="report-question">Analyzation</p>
    <p class="report-answer">
        For this assignment I wanted to assess the performance of three websites that I use in my daily life and I am therefore interested in how they perform in all the different metrics analyzed by the different tools we are to use.
        The following pages are the ones I chose: stackoverflow.com, reddit.com & facebook.com. 
        <br/><br/>
        Link to the data collected in a google sheet:
        <a href="https://drive.google.com/open?id=1aA4uSr0PvlDlQscp_-hzWQ3JL1v_ev1NmZrvo63dvW0">Google Sheet</a>
        <br/><br/>
        When using the different tools of performance measuring I found the results quite interesting. When comparing the sites with Devtools I found out that the result was quite the opposite of what I thought would happen. I thought that Facebook would perform better than it did. Facebook had a massive amount of requests compared to the other two pages. At most it had 364, while stackoverflow.com only had 51. One thing that was interesting as well was how much of the data that was actually retrieved from the cache when doing a "soft" reload. This caching also resulted in quite the difference in loading speed between "hard" and "soft" reloading. This goes to show how important it is to utilize the cache well.<br/><br/>
        When comparing the websites using PageSpeed Insights the results were again quite astonishing. Reddit performed very poorly compared to the other two pages. Reddit scored 33/100 for desktop, while Stack Overflow scored an extremely good 98/100. Across the other metrics Reddit almost doubled the time of the other pages. For example, the metric "Time to interactive", Reddit had a time of 6,6s while Facebook had 2,9s and Stack Overflow 0,9s.
        This is for me an extremely important metric, since this is the metric that will affect the users the most in my opinion. Slow response time/loading time will surely lead to less people using the application. What is interesting is that the exact same pattern, across all metrics, arose when checking the Mobile scores/metrics.<br/><br/>
        When comparing the pages using Lighthouse I would say that the results were quite similar to the ones of PageSpeed Insights. Facebook and Reddit is at the bottom when it comes to performance scoring 8/100 and 20/100, Stack Overflow scored 86/100. The other metrics were quite similar across the board. The only one really sticking out was the SEO metric. Reddit nailed that with a perfect score of 100/100 while Facebook had 60/100 and Stack Overflow 80/100. Basically this means that Reddit is extremely well optimized in regards to being picked by search engines.
        <br/><br/>

        Following are some suggestions that could make each website perform better.<br/><br/>
        Facebook: <br/>
        - Avoid multiple page redirects (save 1,11s) <br/>
        - Eliminate render-blocking resources (save 0,83s)<br/>
        <br/>
        Stack Overflow: <br/>
        - Eliminate render-blocking resources (save 1,83s)<br/>
        - Remove unused CSS (save 0,3s) <br/>
        - Defer offscreen images (save 0,15s)<br/>
        <br/>
        Reddit: <br/>
        - Serve images in next-gen formats (save 3,53s)<br/>
        <br/>

        So basically what most pages need to do is to make sure that the do not block the rendering since this affects the pages performance metrics. Sending images in newer formats such as JPEG 2000 appears to be quite much better performance wise than sending it in PNG or JPEG. Reddit is a good example of a website that would benefit a lot by using another format. The formats they are using now apparently slows down the website a lot. Removing unused CSS seems like an easy task to do to increase performance as well.<br/>

    </p>

    <p class="report-question">What is your TIL for this course section?</p>
    <p class="report-answer">
        So for this section I learned a lot of things about web performance in general. I've also learned a lot about utilzing different tools to assess a website in different performance metrics. The result of the analyzation showed me that no page is perfect in all aspects and that you might not ever have the totally perfect website. The analyzation and lecture also brought the most common problems related to web performance to my attention.
    </p>
</section>

<section>
<h2>S09</h2>
<p class="report-question">Elaborate on a few (3-5) different security issues or concerns, from your own experience, related to web application security and relate them to the OWASP top ten</p>

<p class="report-answer">
    Something I've always been aware of and even more so now that I've studied computer science for almost three years and have started working in the field is the aspect of trust. How do you know that you can trust this website, and how do you know that you can trust that new software. This issue of trust is something I take very serious and always have and probably always will. For example, when developing my own projects I will always only use well-known third-party libraries that recieve regular updates to minimize the risk of my application becoming exposed to some security flaw. This issue is directly relatable to number 9 in the OWASP Top ten.<br/><br/>   

    One security issue that came to my attention during the courses we had in databases and computer security was the issue of injection attacks. That not properly validating input could lead to massive security holes, allowing attackers to get a hold of sensitive data that they weren't authenticated to get. During all of our projects here at school I've almost always ended up handling the database and its contents. I wouldn't say I'm an expert but due to these courses bringing up the subject of injection attacks I've always tried to implement, if there was enough time, a proper validation scheme when accessing the database. This issue of injection attacks are also in the top then of OWASP.<br/><br/>   

    And at the rate that society is becoming more and more digitalized and depending more and more on new technology there will always exist people will take advantage of this to harm other people. As I previously mentioned I always research a bit before starting to utilize a new website or software. I do never ever enter my own sensitive information into applications/websites that I do not know anything about. This awareness mostly comes from common sense, but also from the fact that I've understood that proper authentication might be hard to implement and any flaw could risk my data. Authentication problems that allows attackers to get a hold of my sensitive user data is one of the top ten OWASP issues.
</p>

<p class="report-question">Summarize by providing your own guidelines to a new web programmer on the topic “The essential guidelines to follow to create secure web applications”.</p>

<p class="report-answer">
    The world of security in all contexts of development is complex. For a completely new programmer this area might be quite overwhelming. But the following would be my guidelines for new programmers:<br/><br/>
    1. Use secure protocols (HTTPS)<br/>
    2. Implement a proper authentication handler. <br/>
    3. When storing data in the database, encrypt it with a secure algorithm <br/>
    4. Utilize only well-know third-party software.<br/>
    5. Validate all user input, even the smallest ones. <br/>
    6. Have routines to follow, perhaps incase of an attack <br/>
    7. Don't be afraid to consult other programmers that are more experienced. Security is a complex area that no one can handle on their own. <br/>

</p>

<p class="report-question">What is your TIL for this course section?</p>

<p class="report-answer">
    This section I learned a lot about web security. I learned about a few new areas of security risks such as "XXE" and "Insecure Deserialization". I also understood that such easy things as proper logging and monitoring can help in realizing if a system is under attack or if someone has tampered with data they are not allowed to. I didn't think of logging as this kind of tool before.
</p>
</section>

<section>
<h2>S10</h2>
<p>Here is the text for this section.</p>
</section>

</article>

<?php require __DIR__ . "../view/footer.php"; ?>

<script type="text/javascript" src="js/move.js"></script>
