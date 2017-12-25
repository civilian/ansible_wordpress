Ansible + Wordpress
==============================

Installing, and managing [Wordpress](http://wordpress.com/) via [Ansible](ansible.cc) on [Ubuntu](http://www.ubuntu.com/server).

What is this: a standalone ansible playbook that manages wordpress.
What is not; a Vagrant system in wich we can manage wordpress via vagrant.

Ansible roles that are in this repo:

 - dist_upgrade: Handy for just doing general updates.
 - install_wordpress: Installs wordpress through apt. Also does some tweaking, so that it can be auto upgraded through Wordpress as well (the default version had issues)
 - dump_wordpress: takes a development backup of your wordpress install. (currently does not backup uploads)
 - restore_wordpress: restores a wordpress backup to a given wordpress install.

The example playbooks use the settings I use for my local development. I would suggest changing them as you need.

How to test with vagrant

-Install Vagrant.
-Install ansible.
-Go to localhost:50776

TODO:

 - Migration from one server to another, so you do dev/production deploys as well.