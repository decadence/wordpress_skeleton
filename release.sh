#!/bin/bash

# путь к файлу обслуживания
maintenance=public/wp/.maintenance
echo "<?php \$upgrading = time();" > ${maintenance}
git pull --no-edit
composer install
rm ${maintenance}
