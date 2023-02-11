sh setup.sh
cd cms
mysql -u root -p
cd cms
sudo composer require laravel/breeze --dev
php artisan breeze:install
npm install
npm run build
php artisan migrate
php artisan serve --port=8080
Ctrl + C
ssh-keygen -t rsa -b 4096 -C "arrown" -f  ~/.ssh/id_rsa
cd
v
mkdir ~/.ssh
chmod 700 ~/.ssh
pbcopy < ~/.ssh/id_rsa.pub
cat ~/.ssh/id_rsa.pub
git init
cd enviroment
