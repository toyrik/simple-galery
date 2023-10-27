site-up:
	php8.1 -S localhost:8000 -t public/

links:
	ln -s $(PWD)/storage $(PWD)/public/storage
