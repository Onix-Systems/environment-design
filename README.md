### Design application environment

This is an example how can we combine development environment with future
production.

---

#### Purpose

Keep production environment very close with development.
It is important to ensure about result on customer side.

---

#### Requirements

1. Orale VirtulBox [https://www.virtualbox.org](https://www.virtualbox.org)
1. Hashicorp Vagrant [https://www.vagrantup.com/](https://www.vagrantup.com/)
1. Desire is the most important. :)

All above described tools can be deployed on different OS. Try find yours.

PS: To setup production environment on prepared server, be sure, that it is
provided server with OS `Ubuntu 16.04 xenial`. This OS distribution is used for development
environment.

---

#### Usage

By default development environment will be deployed. Development environment use
current folder as source for application.

To launch development environment use next command:

```
$ vagrant up
```

To provision virtual machine in production mode, use next command:
```
$ x-production.setup.sh
```

To provision virtual machine in development mode, use next command:
```
$ x-vagrant.setup.sh
```

---

#### Project structure

```
.
├── application (application source code)
├── provision - ansible-playbook with roles for provision target environment.
├── Vagrantfile
├── x-production.setup.sh
└── x-vagrant.setup.sh
```

---

#### Differences between development and production environment

In development mode are next things:

1. Warning and error messages will be printed when such be detected.
1. Source code in development environment is mounted inside the virtual machine.

In producition mode are next things:

1. Errors are hide and when it is possible web server shows pretty message
instead of standard server messages.
1. Source code is copied inside the environment to local folder. Is used for
remote source delivering.

---
