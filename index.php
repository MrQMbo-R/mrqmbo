<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr-Q-Mbo</title>
    <?php
    require "php/links.php";
      
    ?>
    
    
</head>
<body>
    <main>
        <header>
            <img src="images/codeclock.png" alt="logo"> 
            <nav>
<ul>
    <li><a href="About">About</a></li>
    
    <li><a href="Lessons">Lessons</a></li>
    
</ul>
            </nav>
        </header>
        <section>
            <h2>greeting section</h2>
           <!--Greeting and description-->
        </section>
        <section>
            <h2>Image sections</h2>
                <!--Picture overlapping section
                   description of service 
                -->
        </section>
        <section>
            <p>carousol with info</p>
            <!--projects in line spaced out with images
                and text over them. 
            -->
    </section>
    <section>
        <p>
            Lesson selection
        </p>
        <!--two rows of 3 colums with material for lessons
        -->
</section>
 <footer>
<form action="php/comment_insert.php" method="POST">
<label for="name">Name</label>
<input type="text"name="username" placeholder="Naam">
<label for="comment">comment</label>
<textarea name="comment" id="" cols="30" rows="5">

</textarea>
<input type="submit" name="submit" value="Comment">


</form>
 </footer>
    </main>
</body>
</html>