# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/xenial64"
  config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.provider "virtualbox" do |vb|
      vb.memory = "2048"
  end
  config.vm.provision "shell", inline: <<-SHELL
      set -e
      apt-get update
      apt-get install -y python-pip
      pip install pip --upgrade
      pip install ansible==2.4
      cd /vagrant/provision
      ansible-playbook -i hosts/vagrant setup.yml
  SHELL

end
