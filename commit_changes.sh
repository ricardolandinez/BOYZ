#!/bin/bash

# This script is used to commit changes to the repository

if [[ ! $1 ]]; then
    echo "Please provide a commit message"
    exit 1
fi

BRANCH=$(git branch --show-current)

git reset --soft main
git add .
git commit -m "$1"
git push --force origin $BRANCH