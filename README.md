# flex-scheduler
The scheduler project using symfony 3.3 and the new flex config sysytem

## Setup
```bash
git clone https://github.com/jclyons52/flex-scheduler.git
cd flex-scheduler
composer install
./bin/console doctrine:database:create
./bin/console doctrine:schema:update --force
make serve
```
