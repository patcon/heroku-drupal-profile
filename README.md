### Clone the project

    git clone https://github.com/patcon/heroku-drupal-profile.git
    cd heroku-drupal-profile

Can work with a tightly locked down environment that project was tested
under, or can use a quick-and-easy environment where versions are all
uncontrolled. Recommend quick-and-easy first, then locked-down
environment if you run into issues.

### a. Quick and easy environment

    gem install heroku

### b. Locked-down environment

    # Install requirements via Homebrew, following instructions after installation.
    brew install rbenv ruby-build rbenv-bundler
    # Relaunch shell.
    exec $SHELL
    # Install bundler.
    gem install bundler
    bundle install --path vendor/bundle
    rbenv rehash

### Common steps

    # Create the Heroku app and push your code
    heroku create --stack cedar --buildpack https://github.com/patcon/heroku-buildpack-php-drupal.git
    git push -u heroku master
    # Watch the output as your app is deployed to a url like:
    # http://YOUR_APP_NAME.herokuapp.com/install.php

    # Scale up to one webserver "dyno".
    # A "dyno" is a term in heroku's process model of deployment.
    heroku scale web=1
