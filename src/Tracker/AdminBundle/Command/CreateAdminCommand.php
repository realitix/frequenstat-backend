<?php
namespace Tracker\AdminBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Tracker\UserBundle\Entity\User;

class CreateAdminCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('tracker:admin:create')
            ->setDescription('Create an admin')
            ->setDefinition(array(
                new InputArgument('email', InputArgument::REQUIRED, 'Email'),
                new InputArgument('password', InputArgument::REQUIRED, 'Mot de passe'),
                new InputArgument('firstName', InputArgument::REQUIRED, 'Prénom'),
                new InputArgument('lastName', InputArgument::REQUIRED, 'Nom'),
                new InputArgument('company', InputArgument::REQUIRED, 'Société'),
                new InputArgument('phoneNumber', InputArgument::REQUIRED, 'Téléphone'),
            ))
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $email       = $input->getArgument('email');
        $password    = $input->getArgument('password');
        $firstName   = $input->getArgument('firstName');
        $lastName    = $input->getArgument('lastName');
        $company     = $input->getArgument('company');
        $phoneNumber = $input->getArgument('phoneNumber');
        
        $userManager = $this->getContainer()->get('fos_user.user_manager');
        $user = $userManager->createUser();
        
        $user->setEmail($email);
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setCompany($company);
        $user->setEnabled(true);
        $user->setPhoneNumber1($phoneNumber);
        $user->setPlainPassword($password);
        $user->addRole('ROLE_ADMIN');
        
        $userManager->updateUser($user);
        $em = $this->getContainer()->get('doctrine')->getManager();
        $em->persist($user);
        $em->flush();
    }
}