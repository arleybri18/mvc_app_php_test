https://www.youtube.com/watch?v=BEyNt7PAK0E


regla para dierccionar siempre al index archivo .htaccess

RewriteEngine On
RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]