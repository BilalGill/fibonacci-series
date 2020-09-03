#!/bin/sh

#build and start the container
docker-compose up -d

#Run static code analyzer for "src" and "tests" folders at level 8
docker exec fibonacci-flix_app vendor/bin/phpstan analyse -l 8 src tests

#Run test case for the project
docker exec fibonacci-flix_app vendor/bin/phpunit tests/FibonacciTest.php
