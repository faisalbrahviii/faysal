<!DOCTYPE html>
<html>
<head>
    <title>Title Generation</title>
</head>
<body>
    <h1>Title Generation</h1>
    <form method="post" action="">
     <input type="text" name="paragraph">
        <br>
        <input type="submit" value="Generate Title">
    </form>

    <?php
    function f($paragraph) {
        // Split the paragraph into individual words
        $words = explode(" ", $paragraph);

        // Select the first word as the title
        $title = $words[0];

        return $title;
    }

    // Example usage
    if (isset($_POST['paragraph'])) {
        $inputParagraph = $_POST['paragraph'];

        // Generate title
        $generatedTitle = generateTitle($inputParagraph);

        echo "<h2>Generated Title: " . $generatedTitle . "</h2>";
    }
    ?>
</body>
</html>
