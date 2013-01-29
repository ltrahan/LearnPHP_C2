<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Pursue1</title>
    </head>
    <body>
        <?php // Pursue Script 1
        $wife="Martha";  // first declare a simple string
        $son="Skyler";  // and now another
        $our_company_link="http://www.lastminutetraining.ca";  //declare a URL 
        $our_company="LastMinuteTraining.ca";
        // now lets try a key:value pair array for inlaws
        $inlaws = array('father in law'=>'Ruben Antonio','mother in law'=>'Rita','sister in law'=>'nina');
        // display the variable in a way that makes sense
        print "My wife's name is $wife and we have a son named $son.<br />
            My inlaws are:<br />";
        foreach ($inlaws as $title => $inlaw) {    // ok so I had to cheat and look at chapter 7 to figure this out
            print "$title: $inlaw<br />";
        };
        print "<p>$wife and I own a company named <a href='$our_company_link'>$our_company</a>.";
        
        ?>
    </body>
</html>
