<?php

namespace App\Services\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic as BasePolicies;

class Basic extends BasePolicies
{
    public function configure()
    {
        parent::configure();

        $this
            ->addDirective(
                Directive::STYLE,
                "'sha256-voXja0NHK+kj/CO6kVFGewEz+qyDFbxR+WW6e9vfN3o='"
            )
            ->addDirective(
                Directive::IMG,
                'matomo.elhebert.be'
            )
            ->addDirective(
                Directive::SCRIPT,
                [
                    'matomo.elhebert.be',
                    "'sha256-lVZW/G9pHinOeo4xog2tA+nFKzWlyppceyB2ZTdnBLA='",
                ]
            );
    }
}
