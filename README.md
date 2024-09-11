# Demonstrating Laravel Pest Mutation Testing Issue With Models

1. Clone this repo
2. Follow setup protocol for an existing Laravel project
3. Run `./vendor/bin/pest --mutate`

It will run mutations that change `guarded` and `hidden` properties to see if they are captured by your tests. Despite these properties being tested in `YourModelTest.php`, the output will state they are uncovered.
