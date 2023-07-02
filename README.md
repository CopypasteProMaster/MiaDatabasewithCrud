# Developing an Online Database System for Cold Case Missing Persons in Agusan del Norte using PHP

## Requirements

-   PHP >= 8.2.4

## Instructions

Add this to the httpd-vhosts.conf file located in "xampp\apache\conf\extra\"

```
NameVirtualHost *:80
<VirtualHost 127.0.0.1:80>
    DocumentRoot "path_to_xampp\XAMPP\htdocs"
    ServerName localhost
</VirtualHost>

Listen port_number
NameVirtualHost *:port_number
<VirtualHost 127.0.0.1:port_number>
    DocumentRoot "path_to_project\public"
    <Directory "path_to_project\public">
        Require all granted
        AllowOverride All
    </Directory>
    ServerName localhost
    ErrorLog "logs/project_name.log"
    CustomLog "logs/project_name.log" common
</VirtualHost>

```

Replace

-   path_to_xampp
-   port_number 
-   path_to_project
-   project_name

with appropriate values
