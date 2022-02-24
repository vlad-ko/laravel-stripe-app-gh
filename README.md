You will need to enter into the "sail" docker to run a few setup commands. Change to your working app directory and run composer update.

cd /srv/app-stripe-test
composer update
Once all the necessary dependencies are pulled down, let's setup the .env file. You will have to cp .env.example .env Please make sure that database credenitals are in there and you have the right database name listed. And Stripe API key must be added (just another line in the file): STRIPE_API_KEY=your_test_key_here

Finally, in the same directory run: php artisan migrate to setup the DB. (You should see a copuple of tables created).

To pull down some initial data you may use: php artisan stripe:charges 50. (The number after the command name is the limit of records, and defaults to 10).

If all goes well, the output should be something like:

[2022-01-09 14:12:31] - Total records processed: 16
