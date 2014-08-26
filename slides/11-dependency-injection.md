#### Step 11: Dependency Injection

A) Create a "logger" property inside of `RandomGenerator`.

B) Create a `__construct` method like:

    public function __construct($logger)
    {
        $this->logger = $logger;
    }

C) Update `generateString` to use the `logger` property

    $this->logger->info('Random string is '.$randomString);

D) Add an `arguments` beneath the `class` key in `config.yml`:

    services:
        random_generator:
            class: AppBundle\Service\RandomGenerator
            arguments: ["@logger"]

**GOAL**

When you refresh, you should now be able to go and see the log message
that you saw before.

**EXTRA CREDIT**

* Use the `container:debug` app/console command to figure out what
the class is for the "logger" service. Then, add a "type hint" to the
__construct function! What's the advantage to doing this?

