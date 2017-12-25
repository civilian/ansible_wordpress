cd provision-and-deploy;
ansible-playbook --limit=localmachine -i inventory/hosts -u vagrant vagrant.yml