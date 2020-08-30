<div class="box side">
        
            <h2>Search | <a class="side" href="show_all.php">Show all</a></h2>
            
            <i>Type part of the title / author name if desired</i>
            
            <hr />
                
            <!-- Start of Title Search -->
            <form method="post" action="title_search.php" enctype="multipart/form-data" >
    
                <input class="search" type="text" name="title" size="40" value="" required placeholder="Title..." />
                
                <input class="submit" type="submit" name="find_title" value="Search" />
                
            </form>
            <!-- End of Title Search -->
    
            <hr />
    
            <!-- Start of author Search -->
            <form method="post" action="author_search.php" enctype="multipart/form-data" >
    
                <input class="search" type="text" name="author" size="40" value="" required placeholder="Author..." />
                
                <input class="submit" type="submit" name="find_author" value="Search" />
                
            </form>
            <!-- End of author Search -->
    
            <hr />
    
            <!-- Start of genre Search -->
            <form method="post" action="genre_search.php" enctype="multipart/form-data" >
                
                <select name="genre" required>
                    <option value="" disabled selected>Genre...</option>
                    <option value="Sci Fi">Science Fiction</option>
                    <option value="Humour">Humour</option>
                    <option value="Non Fiction">Non Fiction</option>
                    <option value="Historical Fiction">Historical Fiction</option>
                    
                </select>
                
                <input class="submit" type="submit" name="find_genre" value="Search" />
                
                
            </form>
            <!-- end of genre Search -->
    
            <hr />
    <!-- start of rating Search -->
    
    <form method="post" action="rating_search.php" enctype="multipart/form-data">
        <select class="half_width" name="amount">
            <option value="exactly" selected>Exactly...</option>
            <option value="more">At least...</option>
            <option value="less">At most...</option>
        </select>
        
        <select class="half_width" name="stars">
            <option value=1>&#9733;</option>
            <option value=2>&#9733;&#9733;</option>
            <option value=3>&#9733;&#9733;&#9733;</option>
            <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
            <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
        </select>
    
        <input type="submit" class="submit" name="find_rating" value="Search" />
    
    </form>
    
    
    
    <!-- end of rating Search -->
            
            
        </div> <!-- / side -->

        <div class="box footer">
            CC YV 2020
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->
    
</body>