# Spin8  

**A framework to help developers to create WordPress plugins.**  

## This Repo  

The Spin8 standard project template, the beginning of every Spin8 project.  

## Installation  

1. `cd` in the folder where you installed this project template  
2. run `cp .env.example .env` and adjust the settings based on your necessities  
3. run `docker compose up -d` (this will use the env vars setted in the previous step, so make sure they are right)  
4. run `docker exec spin8_wordpress spin8_install_wp`  

To restart the project simply repeat points 1 and 3.  