#### Step 1 - Basic Command
Stuck? No worries: http://bit.ly/summer-symfony

A) Use the Symfony documentation to create a
custom console command:

http://bit.ly/sf-command

Only follow the first
"Automatically Registering Commands" section

**GOAL**
You should be able to run your new `demo:greet`
`app/console` command:

    php app/console demo:greet Ivo
    php app/console demo:greet Ivo --yell

**EXTRA CREDIT**

Add a second option called "limit" that accepts
a number. Then use that number in a `for` loop
to print the "greeting" multiple times.

For example:

    php app/console demo:greet Ivo --limit=5
    
would print "Hello Ivo" 5 times.

