# -*- mode: ruby -*-
# vi: set ft=ruby :

require('dotenv') # vagrant plugin install vagrant-env
Dotenv.load("./srcs/.env")

RAM = 4096
CPU = 4

Vagrant.configure("2") do |config|
	config.vm.box = "debian/bookworm64"
	config.env.enable
	config.vm.hostname = ENV['SERVER_NAME']

	config.vm.provider "virtualbox" do |vb|
	  vb.memory = RAM
	  vb.cpus = CPU
	  vb.gui = true
	end

	config.vm.synced_folder "./", "/inception/"

	config.vm.provision "ansible" do |as|
		#as.raw_arguments = "-v"
		as.playbook = "playbook.yml"
		as.extra_vars = {
			"user_name" => ENV['VM_USER'],
			"password" => ENV['VM_CRYPTED_PASSWORD'],
		}
	end
  end