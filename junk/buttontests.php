
        
        <?php
        
        if (isset($_POST['submit1']))
        {
            $username= $_POST['username'];
            if ($username == "bobo")
            {
                print ("Welcom back, $username!");
            }
            else
            {
                print ($username);
            }
        }
        
            if (isset($_POST['testing']))
            {
                print ("BOO!"); 
            }
            
            
        ?>

