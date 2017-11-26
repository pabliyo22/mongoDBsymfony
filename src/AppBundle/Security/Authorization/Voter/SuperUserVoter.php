<?php

namespace AppBundle\Security\Authorization\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;

class SuperUserVoter implements VoterInterface
{
    const SUPER_USER = 'teceng';

    public function supportsAttribute($attribute)
    {
        return true;
    }

    public function supportsClass($class)
    {
        return true;
    }

    public function vote(TokenInterface $token, $object, array $attributes)
    {
        $user = $token->getUser();
        if($user != 'anon.')
        {
            if ($user->getUsername() === self::SUPER_USER)
            {
                return VoterInterface::ACCESS_GRANTED;
            }
        }
	return VoterInterface::ACCESS_DENIED;
    }
}
