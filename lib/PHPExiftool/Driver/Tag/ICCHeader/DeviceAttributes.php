<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ICCHeader;

use PHPExiftool\Driver\AbstractTag;

class DeviceAttributes extends AbstractTag
{

    protected $Id = 56;

    protected $Name = 'DeviceAttributes';

    protected $FullName = 'ICC_Profile::Header';

    protected $GroupName = 'ICC-header';

    protected $g0 = 'ICC_Profile';

    protected $g1 = 'ICC-header';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Device Attributes';

    protected $MaxLength = 2;

}
