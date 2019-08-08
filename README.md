# Comparison of PHPMD and PHPNSC

This is a tool to compare the functionality of https://github.com/researchgate/phpnsc and https://github.com/phpmd/phpmd.

## Usage

```
git clone git@github.com:josephdpurcell/phpmd-phpnsc-comparison.git
cd phpmd-phpnsc-comparison
composer install
./vendor/bin/phpmd src text cleancode > dist/phpmd.txt
./vendor/bin/phpnsc run phpnsc_config.json > dist/phpnsc.txt
```

Then, compare the output of those last two commands.

