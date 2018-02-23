<?php

// connect to the database
$conn = mysqli_connect('10.20.50.1', 'bsonali', 'bsonali');
if (!$conn or !mysqli_select_db('batch2015_bsonali', $conn)) die('cannot connect to db');
 
// handle new searches
if (isset($_GET['action']) and $_GET['action'] == 'search')
{
    // get the current time
   // $now = date("Y-m-d H:i:s");
 
    // get the submitted term and prepare it for the database query
    $term = mysqli_real_escape_string(strip_tags(trim($_GET['term'])));
 
    // check if the term has been submitted before
    //if (mysqli_result(mysqli_query($conn,"SELECT COUNT(id) FROM search WHERE term = '$term'"), 0) > 0)
   if (mysqli_result(mysqli_query($conn,"SELECT counter FROM search WHERE term = '$term'"), 0) > 0)
    {
        // the term exists - update the counter and the last search timestamp
        mysqli_query($conn,"UPDATE search SET counter = counter+1 WHERE term = '$term'");
    } else {
        // the term does not exist - insert a new record
        mysqli_query($conn,"INSERT INTO search(term) VALUES('$term')");
    }
}
 
// prepare the tag cloud array for display
$terms = array(); // create empty array
$maximum = 0; // $maximum is the highest counter for a search term
 
$query = mysqli_query($conn,"SELECT term, counter FROM search ORDER BY counter DESC LIMIT 30");
 
while ($row = mysqli_fetch_array($query))
{
    $term = $row['term'];
    $counter = $row['counter'];
 
    // update $maximum if this term is more popular than the previous terms
    if ($counter > $maximum) $maximum = $counter;
 
    $terms[] = array('term' => $term, 'counter' => $counter);
 
}
 
// shuffle terms unless you want to retain the order of highest to lowest
shuffle($terms); 

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tag Cloud Example</title>
        <style type="text/css">
            #tagcloud {
                width: 300px;
                background:#CFE3FF;
                color:#0066FF;
                padding: 10px;
                border: 1px solid #559DFF;
                text-align:center;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
            }

            #tagcloud a:link, #tagcloud a:visited {
                text-decoration:none;
                color: #333;
            }

            #tagcloud a:hover {
                text-decoration: underline;
            }

            #tagcloud span {
                padding: 4px;
            }

            #tagcloud .smallest {
                font-size: x-small;
            }

            #tagcloud .small {
                font-size: small;
            }

            #tagcloud .medium {
                font-size:medium;
            }

            #tagcloud .large {
                font-size:large;
            }

            #tagcloud .largest {
                font-size:larger;
            }
        </style>
    </head>

    <body>
        <h1>Search</h1>
        <form id="search" method="get" action="?action=search">
	<!--<form id="search" method="get" action="Search.php"> -->
            <input type="text" name="term" id="term" />
            <input type="submit" name="submit" id="submit" value="Search" />
        </form>
        
        <h2>Popular Searches</h2>
        <div id="tagcloud">
            <?php 
            // start looping through the tags
            foreach ($terms as $term):
                // determine the popularity of this term as a percentage
                $percent = floor(($term['counter'] / $maximum) * 100);

                // determine the class for this term based on the percentage
                if ($percent < 20):
                    $class = 'smallest';
                elseif ($percent >= 20 and $percent < 40):
                    $class = 'small';
                elseif ($percent >= 40 and $percent < 60):
                    $class = 'medium';
                elseif ($percent >= 60 and $percent < 80):
                    $class = 'large';
                else:
                    $class = 'largest';
                endif;
            ?>
           <span class="<?php echo $class; ?>">
            <a href="Search.php?bname=<?php echo urlencode($term['term']); ?>"><?php echo $term['term']; ?></a>
		<!--<a href="Search.php?bname=$term['term']"><?php echo $term['term']; ?></a>-->
		            </span>
            <?php endforeach; ?>
        </div>
    </body>
</html>
