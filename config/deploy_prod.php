<?php

use EasyCorp\Bundle\EasyDeployBundle\Deployer\DefaultDeployer;

return new class extends DefaultDeployer
{
    public function configure()
    {
        return $this->getConfigBuilder()
            ->server('root@77.246.157.200')
            ->deployDir('/var/www/inhouse/data/www/budnyam.net/local/symfony_app')
            ->repositoryUrl('git@github.com:symfony/symfony-demo.git')
            ->repositoryBranch('master');
    }
};
