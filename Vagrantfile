# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    config.vm.box = "ubuntu/precise64"

    # Counting down from 50777 is develop
    config.vm.network :forwarded_port, guest: 22, host: 50777, id: 'ssh'
    config.vm.network :forwarded_port, guest: 80, host: 50776

    # config.vm.provider :virtualbox do |vb|
    #     vb.gui = true
    # end

    config.vm.provision :ansible do |ansible|
        ansible.limit = 'localmachine'
        ansible.inventory_path = "provision-and-deploy/inventory/hosts"
        
        ansible.playbook = "provision-and-deploy/vagrant.yml"
        #ansible.playbook = "provision-and-deploy/site-dump.yml"
        #ansible.playbook = "provision-and-deploy/site-restore.yml"
    	  
        # Debug
          #ansible.verbose = 'vvvv'
    end

end
