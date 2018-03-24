@servers(['local' => '127.0.0.1', 'web' => 'root@128.199.64.142'])

@story('deploy')
	push
    pull-server
@endstory

@task('pull-server', ['on' => 'web'])
	cd /var/www/html/erp-pamindo/
	chown www-data:www-data -R *
	git stash
	git pull origin master
	composer dump-autoload
@endtask

@task('push', ['on' => 'local'])
	git push origin master
	composer dump-autoload
@endtask

@task('server-refresh', ['on' => 'web'])
	cd /var/www/html/erp-pamindo/public
	rm -rf images
	rm -rf sounds
	rm -rf documents
	rm -rf videos
	cd /var/www/html/erp-pamindo/
	php artisan migrate:refresh --seed
	chown www-data:www-data -R *
	chmod 777 -R storage/
@endtask

@task('up', ['on' => 'web'])
	cd /var/www/html/erp-pamindo/
	php artisan up
@endtask

@task('down', ['on' => 'web'])
	cd /var/www/html/erp-pamindo/
	php artisan down
@endtask