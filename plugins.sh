#script to install WP plugins one chunk at a time

# Download the plugin that allows for Wordpress to work properly on codio 
wget http://downloads.wordpress.org/plugin/permalink-fix-disable-canonical-redirects-pack.1.0.3.zip
 
# Install plugin - ensure directory is the one you want
unzip  permalink-fix-disable-canonical-redirects-pack.1.0.3.zip -d ./wordpress/wp-content/plugins 
 
 
# delete install files
rm permalink-fix-disable-canonical-redirects-pack.1.0.3.zip