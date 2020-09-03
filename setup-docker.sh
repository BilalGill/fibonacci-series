#!/bin/sh

# Check if curl is installed else install it
if [ -x "$(command -v curl)" ]; then
        echo "Curl already exists..."
    else 
        echo "Installing curl..."
        sudo apt update
        sudo apt-get install curl -y
fi

# Check if Docker is installed else install it
if [ -x "$(command -v docker)" ]; then
    echo "Docker already exists..."
else
    echo "Installing docker..."
    curl -fsSL https://get.docker.com -o get-docker.sh
    sh get-docker.sh
fi

# Check if Docker Compose is installed else install it
if [ -x "$(command -v docker-compose)" ]; then
        echo "Docker-compose already exists..."
    else 
        echo "Installing docker-compose..."
        sudo apt-get install docker-compose -y
fi
