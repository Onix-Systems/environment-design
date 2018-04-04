#!/bin/bash

cd $(dirname $0)

vagrant ssh -c "cd /vagrant/provision; sudo ansible-playbook -i hosts/production setup.yml"
