<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RTF;

use PHPExiftool\Driver\AbstractTag;

class TotalEditTime extends AbstractTag
{

    protected $Id = 'edmins';

    protected $Name = 'TotalEditTime';

    protected $FullName = 'RTF::Main';

    protected $GroupName = 'RTF';

    protected $g0 = 'RTF';

    protected $g1 = 'RTF';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Total Edit Time';

}
