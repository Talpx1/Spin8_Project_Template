# Spin8  

**A framework to help developers to create WordPress plugins.**  

!! THIS PROJECT IS STILL IN ITS SUPER-EARLY STAGES AND UNDERGOING HEAVY DEVELOPMENT !!

## This Repo  

The Spin8 standard project template, the beginning of every Spin8 project.  


## Pre-requisites  

In order to create a project using Spin8, you need Docker (https://www.docker.com/)  


## Before you start 

If you are using Windows as your main dev OS, it's **strongly** recommended to install and run Spin8 in WSL2 (https://learn.microsoft.com/en-us/windows/wsl/install).  

It's also handy to have Git (https://git-scm.com/) or GitHub CLI (https://cli.github.com/) installed in order to more easily clone the project template.  


## Installation  

1. create a folder for the new Spin8 project  
2. copy the content of this repo (https://github.com/Talpx1/Spin8_Project_Template) in the project's folder using one of the following methods:  
   - open the project's folder in a terminal ad run `git clone Talpx1/Spin8_Project_Template.git .` (it's suggested to then delete the .git folder and run `git init`).    
   - from the GitHub page of this repo, download the source as zip and extract the content in the project's folder.  
   - from the GitHub page of this repo, use the `Use this template` button and select the `Create a new repository` option.  
   - using the GitHub CLI tool, run `gh repo create <new-repo-name> --template="Talpx1/Spin8_Project_Template"`.  
3. (not required, but recommended) add `alias spin8='bash spin8'` to your `~/.zshrc` or `~/.bashrc` or `~/.bash_aliases`, if present, and then restart your shell.  
4. run `spin8 install` (or `bash spin8 install` if you skipped step 3) and follow the instructions.  
5. visit http://localhost to try your plugin while developing.    


## Run the project

In order to resume your development, you don't need to repeat the installation process.  
Just open a terminal in your project's folder (`cd` into the project's folder) and run `spin8 up -d` to restart the containers. Use `spin8 up` (no `-d` flag) to start the containers and display their outputs.  
When you are done, just run `spin8 down` to correctly stop the containers.  

**NOTE**: `spin8 up` and `spin8 down` are just proxies to `docker compose`, so they accept the same flags as the latter.  


## Containers up vs Containers down

Theoretically, you can develop your Spin8 project without running the container, but this approach causes some downsides:
- limited access to spin8 commands: you won't be able tu run the majority of the commands provided by Spin8, neither the one you may define.  
- inability to access the provided WordPress installation and test your plugin in-browser.  


## Important notes

While you could customize the `docker-compose.yml`, it's a good idea to leave it as it is, because the spin8 binary and some other important scripts rely on the default configuration to run correctly.   

If you are using Visual Studio Code as your 'IDE', you can choose to open the project folder directly from the container (attach to the running container) or from the WSL2, in case you are using it. Some useful guides on that regard:  
- https://code.visualstudio.com/docs/devcontainers/containers  
- https://code.visualstudio.com/docs/devcontainers/attach-container  
- https://code.visualstudio.com/docs/remote/wsl  

If you are running some other container or software (Laragon, XAMPP, EasyPHP, ...) that may use the network ports and interfere with the Spin8 containers, you can customize the ports used by the Spin8 services in the .env file.  
Typically, the variables you should look follow the *_PORT pattern.  
In case you change the WEBSERVER_PORT variable, your wordpress installation will respond on the http://localhost:<WEBSERVER_PORT> address.  

Also DO NOT change the *_VERSION env variables, unless you really know what you are doing. This may break your installation.  