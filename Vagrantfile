# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    config.vm.box = "ubuntu/precise64"

    # TODO; CHANGE PORT
    config.vm.network "forwarded_port", guest: 80, host: 8080

    config.vm.provider :virtualbox do |vb|
        vb.gui = true
    end

    config.vm.provision :ansible do |ansible|
        ansible.limit = 'development'
    	  ansible.playbook = "./provision_and_deploy/site.yml"
    	  ansible.inventory_path = "./provision_and_deploy/inventory/hosts"
        # Debug
        #ansible.verbose = 'vvvv'
    end

end
