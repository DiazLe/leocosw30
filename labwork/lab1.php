<!doctype html>
<html>
    <head><title>Labwork 1: Hello World</title></head>
    <?php
    /*echo 'Filename: lab1.php 
     Author:Leonor Diaz
     Date Created: 08/29/2019';*/
    ?>
    <style>
        body{
            margin:5% 10%;
            background-color:#f4c3c2;
            color:navy;
        }
        
        h1{
            font-size:32px;
            border:2px dashed navy;
            padding:1%;
        }
    </style>
    <body>
        <h1>Leonor Diaz</h1>
        
        <p>Hello, I prefer to go by Leo. Currently, I am attending Long Beach City College to learn web development. I have enjoyed being in
        the web dev program, because it is very interesting and there are people that are very creative with their work. I would like to 
        work as a developer or in design of web apps. Moreover, I am willing to learn as much as I can and am excited about what I'll
        end up doing with my new skills. Some things that I enjoy:</p>
        
        <ol>
            <li>Reading</li>
            <li>Going to the movies</li>
            <li>Being in nature</li>
        </ol>
        
        <p>You can check out my <a href="https://github.com/DiazLe" target="_blank">Github account.</a></p>
        
        <?php  
            echo "<p>One of my favorite websites is <a href='http://diazleo.com/wp/'>my WordPress blog</a>. I created this blog for
            the Intro to Content Management course and it is on book reviews. I plan to keep it up, because I enjoyed posting my thoughts
            on certain books. Another site that I enjoy spending time on is <a href='https://www.youtube.com/'>YouTube</a>. I like 
            watching music videos as well as review videos.</p>";
            
            echo "<p>This assignment was a bit challenging for me, because it took me a few seconds to remember how to open this PHP file.
            Also, I am a complete beginner with PHP. I would say that the easy part is the HTML and possibly the CSS I know the commiting 
            part of the assignment will bring some challenges as well, but it will be fine.</p>";
        ?>
    </body>
</html>