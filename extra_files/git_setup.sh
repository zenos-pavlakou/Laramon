#!/bin/bash
​
echo "Enter your Git username:"
read username
​
echo "Enter your Git password:"
read -s password
​
echo "Enter your Git email:"
read email
​
# Set the username and email in the global Git config file
git config --global user.name "$username"
git config --global user.email "$email"
​
# Set the username and password in the credential helper
git config --global credential.helper 'cache --timeout=3600'
echo "protocol=https" | git credential-store --file ~/.git-credentials store
echo "host=github.com" | git credential-store --file ~/.git-credentials store
echo "username=$username" | git credential-store --file ~/.git-credentials store
echo "password=$password" | git credential-store --file ~/.git-credentials store
​
echo "Your Git credentials have been stored."