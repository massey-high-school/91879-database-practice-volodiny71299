<?php include "head_nav.php";

$showall_sql="SELECT *
FROM `2020_L1_prac_reviews`
ORDER BY `2020_L1_prac_reviews`.`Title` ASC";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall, query);
$count=mysqli_num_rows($showall_query);

?> 
        
        <div class="box main">
            
            <h2>All Items</h2>
            
            <!-- Results go here -->
            
            <p>Title: <span class="sub_heading">title holder</span></p>
            
            <p>Author: <span class="sub_heading">title holder</span></p>
            
            <p>Genre: <span class="sub_heading">title holder</span></p>
            
            <p>Rating: <span class="sub_heading">title holder</span></p>
            
            <p>
                Review placeholder
            </p>
            
        </div>    <!-- / main -->
        
        
<?php include "footer.php";?>