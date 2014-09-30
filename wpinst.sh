# Script to copy install process explained in codio Wordpress Install
# Copy the contents of this file to a file called 'wpinst.sh' in the root of your machines file system
# Then run the script in the terminal window by typing
 
#        bash wpinst.sh 
 
# set the hostname variable
host=`cat /etc/hostname`  
 
# Download and decompress the latest version of Wordpres
wget http://wordpress.org/latest.tar.gz
tar -xzvf latest.tar.gz
 
# Install php mysql and apache services 
parts install php5 php5-apache2 php5-pdo-mysql php5-zlib mysql
 
# Start the apache and mysql services
parts start apache2 mysql
 
# Create the MySQL database that WP will use
# This script uses the default password 'password' - IT IS NOT SECURE!
echo "CREATE DATABASE wordpress;" > msqlcmds.txt
echo "USE wordpress;" >> msqlcmds.txt
echo "CREATE USER wordpressuser@localhost;" >> msqlcmds.txt
# note escaped quotes on line below
echo "SET PASSWORD FOR wordpressuser@localhost= PASSWORD(\"password\");" >> msqlcmds.txt
########################                  wordpressuser    ########
 
echo "GRANT ALL PRIVILEGES ON wordpress.* TO wordpressuser@localhost IDENTIFIED BY 'password';" >> msqlcmds.txt
########################                                         wordpressuser      ########
echo "FLUSH PRIVILEGES;" >> msqlcmds.txt
echo "exit" >> msqlcmds.txt
 
echo The password for the MySQL server is blank!
echo You should change it after instalation.
echo - 
echo For now - Just press the enter key to enter the blank password
mysql -u root -p < msqlcmds.txt -v
 
# Create a wp-config file from the sample
cp ./wordpress/wp-config-sample.php  ./wordpress/wp-config.php
 
# Edit the wp-config file with username and password
sed -i "s/define('DB_NAME', 'database_name_here');/define('DB_NAME', 'wordpress');/g" ./wordpress/wp-config.php
sed -i "s/define('DB_USER', 'username_here');/define('DB_USER', 'wordpressuser');/g" ./wordpress/wp-config.php
sed -i "s/define('DB_PASSWORD', 'password_here');/define('DB_PASSWORD', 'password');/g" ./wordpress/wp-config.php
###########################                             wordpressuser    ########   
 
 
# Set WP for codio domain names  
sed -i "36i define('WP_HOME','http://WORD1-WORD2.codio.io:3000/wordpress');" ./wordpress/wp-config.php
sed -i "37i define('WP_SITEURL','http://WORD1-WORD2.codio.io:3000/wordpress');" ./wordpress/wp-config.php
sed -i s_WORD1-WORD2_"$host"_g  ./wordpress/wp-config.php
 
 
# Download the plugin that allows for Wordpress to work properly on codio 
wget http://downloads.wordpress.org/plugin/permalink-fix-disable-canonical-redirects-pack.1.0.3.zip
 
# Install plugin
unzip  permalink-fix-disable-canonical-redirects-pack.1.0.3.zip -d ./wordpress/wp-content/plugins 
 
 
# delete install files
rm latest.tar.gz
rm permalink-fix-disable-canonical-redirects-pack.1.0.3.zip
rm msqlcmds.txt
 
echo .......Wordpress Installed!
echo -
echo - Two MySQL accounts have been created which 
echo are not secure and should be changed;
echo 1. The MySQL admin account: 
echo username=root, password is blank
echo 2. The MySQL account used by Wordpress: 
echo username=wordpressuser, password=password
echo -
echo You may now use Wordpress itself to complete the setup.
echo Once in Wordpress you will be asked to create the 
echo first Wordpress user and then login as that user.
echo 
echo Once logged in you should go to the plugins page and
echo enable an instaled plugin called - 
echo permalink-fix-disable-canonical-redirects
echo which is necessary for Wordpress to work correctly on codio.
echo -
echo To get to your Wordpress site, open your browser and go to - 
echo http://"$host".codio.io:3000/wordpress/wp-admin