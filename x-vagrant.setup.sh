#!/bin/bash

cd $(dirname $0)

vagrant ssh -c "cd /vagrant/provision; ansible-playbook -i hosts/vagrant setup.yml"
