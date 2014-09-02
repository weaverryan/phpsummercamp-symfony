#### Step 8: Register a Service
Stuck? No worries: http://bit.ly/summer-symfony

A) Register the new class as a service in
`app/config/config.yml`.

Reference: `http://bit.ly/VKW8os`
(but don't include an `arguments` key)

B) In `indexAction`, replace the `new RandomGenerator`
line using the `get()` method on the container to get the service:

Reference: The `sendEmailAction` code block in the
above link.

**GOAL**

When you go to `http://sfbasics.ezsc/app_dev.php/random/5`, you
still see the random string that is 5 characters long.

**EXTRA CREDIT**

* Most of `config.yml` is configuration for third party bundles.
Look around at the configuration options at
http://symfony.com/doc/current/reference/index.html
