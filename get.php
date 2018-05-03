




<?php 
function get_all_books()
{
    $get_all_books_query = "SELECT title, date_published, author, reviews, rate, image FROM book;";
    $response = $GLOBALS['conn']->query($get_all_books_query);
    
    echo "<p id='numR'>".$response->num_rows."</p>";
    $num = 0;
    if ($response && $response->num_rows > 0) {
           while ($row = $response->fetch_array()) {
            echo "<li id='title".$num."'>".$row[0]."</li>";
            echo "<li id='date_published".$row."'>".$row[1]."</li>";
            echo "<li id='author".$row."'>".$row[2]."</li>";
            echo "<li id='reviews".$row."'>".$row[3]."</li>";
            echo "<li id='rate".$row."'>".$row[4]."</li>";
            echo "<li id='image".$row."'>".$row[5]."</li>";
            $row++;
        }
    } else {
        echo '<h2>book  is empty!</h2>';
    }
}
?>

