#!/bin/sh

# download debian package for gitlab runner
curl -L https://packages.gitlab.com/install/repositories/runner/gitlab-runner/script.deb.sh | sudo bash
sudo apt-get install gitlab-runner

# register gitlab-runner in non-interactive mode,
# Please put registration-token from your gitlab runner (Settings->CI/CD->runner->Specific Runner)
sudo gitlab-runner register --non-interactive
--url https://gitlab.com/ --registration-token <Your registration token>
--executor shell --tag-list flix,testing --name flix-runner

sudo gitlab-runner restart