<html>
    <head>

    </head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $idea = $_POST['idea'];
        $research = $_POST['research'];
        $category = $_POST['category'];
        
        $dir = getcwd();
        
        if (empty($category)){
            $category = " - ";
        } else {
            $category = " - " . $category . " - ";
        }
        
        if (empty($idea)){
            $sort = $research;
            $idea_research = "Research";
        } else {
            $sort = $idea;
            $idea_research = "Idea";
        }
        
        $fp = fopen($dir."ideas.txt", 'a')or die("Unable to open file!");
        fwrite($fp, $idea_research . $category . $sort . "\n");
        fclose($fp);
    }
    ?>
    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        Idea: &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" id="idea" name="idea"><br>
        Research: <input type="text" id="research" name="research"><br>
        <select name="category" id="category">
            <option value="">Pick a Category</option>
            <option value="BASH">BASH</option>
            <option value="PHP">PHP</option>
            <option value="Python">Python</option>
            <option value="Raspberry Pi">Raspberry Pi</option>
        </select></br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
