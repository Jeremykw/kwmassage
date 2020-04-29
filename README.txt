***
This is an adaptation of the original KWmassage.com WordPress website. Jekyll is now used to generate a static version of the website, ./lib/kemassage_importer.rb was written to import data into the new jekyll site from the ./lib/kwmassage_export.xml file.
***

* to run locally 'bundle exec jekyll serve'
* to build locally without local server 'bundle exec jekyll build'


Deployment - Stage

* build stage site: 		bundle exec jekyll serve --config _config_production.yml 
* Minify:            		change const SITE to ../kwmassage-stage', gulp min
* push to gh-pages:  		cd ../kwmassage-stage, git push origin gh-pages

Deployment - Production

* build production site: 	bundle exec jekyll serve --config _config_production.yml 

* Minify:					change const SITE to '_site_production', gulp min
* Compress:					cd .../rails_dev/, tar -zcvf kwmassage_2020_02_27.tar.gz kwmassage/_site_production



** DONT FORGET TO CONFIRM ANY FORMSPREE FORMS FOR NEW PAGES OR POSTS CRESTED **