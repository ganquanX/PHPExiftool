<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPAas;

use PHPExiftool\Driver\AbstractTag;

class Curve3y extends AbstractTag
{

    protected $Id = 'Curve3y';

    protected $Name = 'Curve3y';

    protected $FullName = 'XMP::aas';

    protected $GroupName = 'XMP-aas';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-aas';

    protected $g2 = 'Image';

    protected $Type = 'real';

    protected $Writable = true;

    protected $Description = 'Curve 3y';

}
