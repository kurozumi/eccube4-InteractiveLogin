<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plugin\InteractiveLogin\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;

/**
 * Description of SecurityListener
 *
 * @author Akira Kurozumi <info@a-zumi.net>
 */
class SecurityListener implements EventSubscriberInterface {

    public static function getSubscribedEvents(): array
    {
        return [
            SecurityEvents::INTERACTIVE_LOGIN => 'onInteractiveLogin',
        ];
    }
    
    /**
     * ログインしたときに何かする
     * 
     * @param InteractiveLoginEvent $event
     */
    public function onInteractiveLogin(InteractiveLoginEvent $event)
    {
        // ログインユーザーデータを取得
        $User = $event
                ->getAuthenticationToken()
                ->getUser();
    }

}
