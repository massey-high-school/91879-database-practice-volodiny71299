<?php include "head_nav.php";


// if find button pushed...
if(isset($_POST['find_title']))
    
{
// Retrieves title and sanitises it.
$title=test_input(mysqli_real_escape_string($dbconnect,$_POST['title']));

$showall_sql="SELECT * FROM `2020_L1_prac_reviews` WHERE `Title` LIKE '%$title%' ORDER BY 'Title' ASC ";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?> 
        
        <div class="box main">
            
            <h2>Title Search</h2>
            
            <?php
            
            // check if there are any results
            
            if ($count<1)
                
            {
                
                ?>
            
            <div class="error">
                Sorry! There are no results that match your search. Please use the search 
            </div>
                
                <?php
            
            } // end count 'if'
            
            // if there are no results, output and error
            else {
                
                do {
                    
                ?>
            
            <!-- Results go here -->
            <div class="results">

                <p>Title: <span class="sub_heading"><?php echo $showall_rs['Title']; ?></span></p>

                <p>Author: <span class="sub_heading"><?php echo $showall_rs['Author']; ?></span></p>

                <p>Genre: <span class="sub_heading"><?php echo $showall_rs['Genre']; ?></span></p>

                <p>Rating: <span class="sub_heading"><?php echo $showall_rs['Rating']; ?></span></p>

                <p>
                    <?php echo $showall_rs['Review']; ?>
                </p>
            
                
            </div>
            
                <br>
            
            <?php
            
                } // end of 'do'
                
                while($showall_rs=mysqli_fetch_assoc($showall_query));
                
            } // end else
            
            
            // if there are results, display them
            
    
            } // end isset
            
            ?>
                
        </div>    <!-- / main -->
        
        
<?php include "footer.php";?>