# Inception :rocket:

## Table of Contents

- [Project Overview](#project-overview)
- [Prerequisites](#prerequisites)
- [Docker Configuration](#docker-images-and-docker-compose-configuration)
- [Getting Started](#getting-started)
- [Usage](#usage)
	- [Connection to the VM](#connection-to-the-vm)
	- [Accessing WordPress](#accessing-wordpress)
- [Folder Structure](#folder-structure)
- [Contributing](#contributing)
- [License](#license)

## Project Overview
Inception is designed to simplify the setup of a complete development environment for WordPress by automating the creation of a virtual machine (VM) and the deployment of necessary containers. It aims to streamline the development process and accelerate WordPress development tasks.

## Prerequisites

Before you can use Inception, ensure that you have the following prerequisites installed on your system:

- [![Vagrant](https://img.shields.io/badge/Vagrant-1868F2?style=for-the-badge&logo=Vagrant&logoColor=white)](https://www.vagrantup.com/)
- [![VirtualBox](https://img.shields.io/badge/VirtualBox-21416b?style=for-the-badge&logo=VirtualBox&logoColor=white)](https://www.virtualbox.org/)
- [![Ansible](https://img.shields.io/badge/Ansible-000000?style=for-the-badge&logo=ansible&logoColor=white)](https://www.ansible.com/)
- [vagrant-env](https://github.com/gosuri/vagrant-env) plugin (To manage environment variables with Vagrant)

You can install the `vagrant-env` plugin using the following command:

```bash
vagrant plugin install vagrant-env
```
## Docker Images and Docker Compose Configuration
[![Docker](https://img.shields.io/badge/Docker-2CA5E0?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com/)

The Docker Compose configuration included in this project orchestrates the deployment of three containers, creating a functional WordPress site:

| | |
| ----------- | ----------- |
| ![Nginx](https://img.shields.io/badge/Nginx-009639?style=for-the-badge&logo=nginx&logoColor=white) | Nginx container for web server |
| ![Wordpress](https://img.shields.io/badge/Wordpress-21759B?style=for-the-badge&logo=wordpress&logoColor=white) | WordPress container with PHP for the application |
| ![MariaDB](https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white) | MariaDB container for the database |

These containers work together to provide a complete and functional WordPress development environment.

## Getting Started

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/jbcaron/inception.git
   cd inception
   ```

2. Create a .env file in the srcs directory like the file exemple.env

3. Modify the Vagrantfile to suit your VM requirements. You can adjust the RAM and CPU settings as needed:

	```ruby
	RAM = 4096
	CPU = 4
	```

4. Customize the Ansible playbook playbook.yml located in the project directory to configure your VM and Docker containers as per your project requirements.

5. Start the VM and provision it by running:

	```bash
	vagrant up
	```
## Usage

### Connection to the VM

- After provisioning the VM, you can access the VM in graphical mode using VirtualBox with the information specified in the `.env` file.

- If you prefer to access the VM via SSH, you can still do so by running:

	```bash
	vagrant ssh
	```

### Accessing WordPress

- After provisioning, you can access your WordPress site in your web browser by navigating to `https://<SERVER_NAME>` (where <SERVER_NAME> is the value you set in your .env file).

## Folder Structure

Here's a brief overview of the key folders in this project:

- `srcs/`: Contains configuration files, including the `.env` file for environment variables.
- `conf/`: Stores configuration files used by Docker containers and services.
- `tools/`: Holds utility scripts, such as the `start.sh` script used to start Docker services.

Feel free to explore these folders to understand how the project is organized.
## Contributing

If you would like to contribute to Inception or report issues, please feel free to open a GitHub issue or submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](https://github.com/jbcaron/inception/blob/main/LICENSE) file for details.