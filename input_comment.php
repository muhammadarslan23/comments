<?php

    include "head.html";    

?>
    <p>company1: <?php echo $_GET['company1']; ?></p>

    <p>agencysegment: <?php echo $_GET['agencysegment']; ?></p>

    <p>mediasegment: <?php echo $_GET['mediasegment']; ?></p>
	
	<p>username: <?php echo $_GET['username']; ?></p>
	


        <form action="submit_insert.php" method="post">

            Comment:<br>

            <textarea name="comment" rows="15" cols="15">Enter your comment here.</textarea><br>

            <input type="hidden" name="company1" value="<?php echo $_GET['company1']; ?>">

            <input type="hidden" name="agencysegment" value="<?php echo $_GET['agencysegment']; ?>">

            <input type="hidden" name="mediasegment" value="<?php echo $_GET['mediasegment']; ?>">

            <input type="hidden" name="username" value="<?php echo $_GET['username']; ?>">



            <input type="submit" value="Submit Comment">

        </form>

        

<?php

    include "foot.html";    

?>