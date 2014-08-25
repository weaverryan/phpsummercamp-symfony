#### Step 8: Register a Service

A) Register the new class a service in
`app/config/config.yml`.

Reference: `http://bit.ly/VKW8os`
(but don't include an `arguments` key)

B) In `indexAction`, replace the `new RandomGenerator`
line with by `get`ing the service from the container

Reference: The `sendEmailAction` code block in the
above link

**GOAL**

When you go to `http://sfbasics.ezsc/app_dev.php/random/5`, you
still see the random string that is 5 characters long.
