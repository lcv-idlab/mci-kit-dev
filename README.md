# MCI KIT DEV

## Setup

``$ npm install gulp``

``$ npm install gulp-sass``


## Run

``$ gulp & php -S localhost:3000``

### In the browser access to

``localhost:3000/panel``


## Setup ti-edu server:

``conf/setperm.local.d/sample.cfg``

add those lines

``
site/accounts/=777
thumbs/=777
assets/avatars/=777
content/=777
site/accounts/.logins=666
``


## Extra plugins for kirby

- Content Viewer (to show a MD contnet in the Kirby Panel)
	https://github.com/CalebGrove/content-viewer

- (Kirby panel MD easy styler)