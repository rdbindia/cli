# Cli

Given three geometric elements: circles, lines, and points. Detect the intersection of 

1. A point inside a circle

2. A circle intersecting with another circle

3. A line intersecting with another line

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

1. Install Xampp Server on your Local Machine. The software can be found at https://www.apachefriends.org/download.html.
2. Codeigniter Framework from https://codeigniter.com/download
3. Any IDE can be used for PHP files (here I am using PhpStorm as my IDE).
4. Windows CMD.
5. Install Git Bash from https://git-scm.com/downloads 

### Installing

A step by step series of examples that tell you how to get a development env running

#### For installing CodeIgniter on Windows
1. Download the package from https://codeigniter.com/download.
2. Unzip the package inside ```xampp\htdocs```.
3. All controller files will be stored inside the application/controller folder inside the codeigniter folder.

#### For installing Xampp on Windows

1. Open the XAMPP website. Go to https://www.apachefriends.org/download.html in your computer's web browser.
2. Double-click the downloaded file.
3. You may have to click OK on a warning if you have User Account Control (UAC) activated on your computer.
4. Click Next. It's at the bottom of the setup window.
5. Select aspects of XAMPP to install. Review the list of XAMPP attributes on the left side of the window; if you see an attribute that you don't want to install as part of XAMPP, uncheck its box.
   By default, all attributes are included in your XAMPP installation.
6. Select an installation location. Click the folder-shaped icon to the right of the current installation destination, then click a folder on your computer.
7. Begin installing XAMPP. Click Next at the bottom of the window to do so. XAMPP will begin installing its files into the folder that you selected.
8. Click Finish when prompted. It's at the bottom of the XAMPP window. Doing so will close the window and open the XAMPP Control Panel, which is where you'll access your servers.
9. Click on the Apache services on the Control Panel to initialise the PHP service on the localhost

##### For installing Git on Windows

1. Download the latest Git from https://git-scm.com/downloads.
2. When you've successfully started the installer, you should see the Git Setup wizard screen. Follow the Next and Finish prompts to complete the installation. The default options are pretty sensible for most users.
3. Open a Command Prompt (or Git Bash if during installation you elected not to use Git from the Windows Command Prompt).
4. Run the following commands to configure your Git username and email using the following commands, replacing Emma's name with your own. These details will be associated with any commits that you create:
```
$ git config --global user.name "<YOUR_GIT_USER_NAME>"
$ git config --global user.email "<YOUR_GIT_EMAIL>"
```

For any other Operating Systems other than Windows please refer : https://www.atlassian.com/git/tutorials/install-git


## Running the tests

1. To detect the intersection of a point inside a circle
    - A point inside a circle will have an x and y co-ordinate 
    - A circle will be represented by a x,y co-ordinate and a radius.
    - The code for this can be found inside application/controllers/Intersect.php, using the point().
    - Open windows cmd and navigate to the folder that needs execution using the following command: 
    ```
    cd /<location_where_xampp_folder_is_created>/xampp/htdocs/<folder_name>
    ```
    - The following command can be used for running the program on CLI    
    ```
    php index.php intersect point
    ```

2. A circle intersecting with another circle
    - A circle here has its own points and radiuses represented by [x1,y1] and [x2,y2] and r1,r2 respectively.
    - The code for this can be found inside application/controllers/Intersect.php, using the circleIntersect().
    - Open windows cmd and navigate to the folder that needs execution using the following command: 
    ```
    cd /<location_where_xampp_folder_is_created>/xampp/htdocs/<folder_name>
    ```
    - The following command can be used for running the program on CLI    
    ```
    php index.php intersect circleIntersect
    ```    

3. A line intersecting with another line
    - The two lines that need to be check for intersection has points represented by [x1,y1][x2,y2] and [x3,y3][x4,y4]
    - The code for this can be found inside application/controllers/Intersect.php, using the circleIntersect().
    - Open windows cmd and navigate to the folder that needs execution using the following command: 
    ```
    cd /<location_where_xampp_folder_is_created>/xampp/htdocs/<folder_name>
    ```
    - The following command can be used for running the program on CLI    
    ```
    php index.php intersect lineIntersect
    ```    

## Deployment

1. To detect the intersection of a point inside a circle.

```
> php index.php intersect point
--------------
Circle Points
Circle X==0  Circle Y==1
---------------
Point value
Point X==0 Point Y==0
--------------
Is Point Inside Circle?
Yes
--------------
```

2. A circle intersecting with another circle

```
>php index.php intersect circleIntersect
Circle do not touch each other.
```

3. A line intersecting with another line

```
>php index.php intersect lineIntersect
The intersection of the given lines AB and CD is: display point(x==1.5,y==1)
```

## Built With

* [CodeIgniter](https://codeigniter.com) - The web framework used
* [XAMPP](https://www.apachefriends.org) - Initializing Localhost setup to host web based application
* [Windows CMD] - Run program using command line
* [PhpStorm] () - UI used to build application 


## Versioning
Used Github for versioning.(https://github.com/)

## Improved Approach
The approach can be improved by creating a geometry class having functions for each shape to determine area, intersection of different shapes and distances.
This can also help with code reusability. 
