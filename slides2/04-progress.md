#### Step 4 - Progress Bar
Stuck? No worries: http://bit.ly/summer-symfony

A) At the bottom of your command, add another
loop that just sleeps.

    for ($i = 0; $i < 100; $i++) {
        usleep(10000);
    }

We're pretending we have a task that takes some time.

B) Use the "ProgressBar" to print
out the progress during the loop

Link: http://bit.ly/console-progress

**GOAL**

When you run `php app/console demo:greet`, you
now have a cute progress bar at the end.

**EXTRA CREDIT**

Use `ProgressBar::setFormatDefinition` and
the `setFormat` method to create your own
output format.
