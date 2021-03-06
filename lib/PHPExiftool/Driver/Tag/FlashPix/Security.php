<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FlashPix;

use PHPExiftool\Driver\AbstractTag;

class Security extends AbstractTag
{

    protected $Id = 19;

    protected $Name = 'Security';

    protected $FullName = 'FlashPix::SummaryInfo';

    protected $GroupName = 'FlashPix';

    protected $g0 = 'FlashPix';

    protected $g1 = 'FlashPix';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Security';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Password protected',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Read-only recommended',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Read-only enforced',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Locked for annotations',
        ),
    );

}
