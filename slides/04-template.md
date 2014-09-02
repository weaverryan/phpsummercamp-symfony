#### Step 4:  Render a Template
Stuck? No worries: http://bit.ly/summer-symfony

A) Render a Twig template that prints the random number

Follow along with *Step 3* on the "Creating Pages" document:
    http://bit.ly/1pYTnvD

**GOAL**

Go to `http://sfbasics.ezsc/app_dev.php/random/5` and
see the same random number as before. But now you're using
a template!

**EXTRA CREDIT**

* Use the Twig `random()` function to print a second random number

* Create a DateTime object in your controller (see below),
pass it into Twig and then use the `date` filter to print it:

    // in your controller
    $nextMonth = new \DateTime('+1 month');
    // then pass this variable into Twig
