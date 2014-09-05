#### Step 2 - Formatting!
Stuck? No worries: http://bit.ly/summer-symfony

A) Print a new message at the beginning
the command and surround it with <comment> and </comment>:

    <comment>Saying Hello</comment>

B) Surround the name being printed with `<info>`.

**GOAL**

You can still run `demo:greet`, but now
you see pretty colors.

**EXTRA CREDIT**

Use the "formatter helper" to print a big block of text:

    $formatter = $this->getHelper('formatter');
    $line = $formatter->formatBlock(array(
        'This is the first line',
        'This is the second line'
    ), 'question');
    $output->writeln($line);

More information:
http://symfony.com/doc/current/components/console/helpers/formatterhelper.html
