<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonScan;

use PHPExiftool\Driver\AbstractTag;

class DigitalDEEShadowAdj extends AbstractTag
{

    protected $Id = 512;

    protected $Name = 'DigitalDEEShadowAdj';

    protected $FullName = 'Nikon::Scan';

    protected $GroupName = 'NikonScan';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonScan';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Digital DEE Shadow Adj';

    protected $flag_Permanent = true;

}
