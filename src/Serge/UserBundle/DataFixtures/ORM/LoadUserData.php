<?php
/**
 * Created by spolischook
 */

namespace Serge\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Serge\UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $oUser = new User();
        $oUser->setUsername('user');
        $oUser->setPassword($this->encodePassword($oUser, 'user'));
        $manager->persist($oUser);

        $oAdmin = new User();
        $oAdmin->setUsername('admin');
        $oAdmin->setPassword($this->encodePassword($oAdmin, 'admin'));
        $manager->persist($oAdmin);

        $manager->flush();
    }

    private function encodePassword($user, $plainPassword)
    {
        $encoder = $this->container->get("security.encoder_factory")
            ->getEncoder($user)
        ;

        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }

    /**
     * Sets the Container.
     *
     * @param ContainerInterface $container A ContainerInterface instance
     *
     * @api
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}

?>