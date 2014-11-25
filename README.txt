SportSiteGen V2

This second version is planned for having a best structure (MVC) than the last version.

Tree structure :

 index.php
 - core : every class who allow us to access to data of database
 - controllers : every class who match with a functionality
 - tpl : templates
 - config : contains config file(s)
 - logs : contains log files
 - web :
    - css
    - img
    - js
    - tools : tools like smarty...

./config/config_init.php :

This file start the session, includes Smarty, load the core files, and performs the connection to database.

./config/defines.inc.php :

Declare some definitions like _PATH_ (root of the website), or _CORE_ (root of the core directory).

index.php :

Call the php file in terms of the page.
Display templates with smarty.
