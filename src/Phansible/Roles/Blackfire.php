<?php

namespace Phansible\Roles;

use Phansible\BaseRole;

class Blackfire extends BaseRole
{
    public function getName()
    {
        return 'Blackfire';
    }

    public function getSlug()
    {
        return 'blackfire';
    }

    public function getRole()
    {
        return 'blackfire';
    }

    public function getInitialValues()
    {
        return [
          'install' => 0,
          'server_id' => '',
          'server_token' => '',
        ];
    }
}
