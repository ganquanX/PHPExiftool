<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIEDoc;

use PHPExiftool\Driver\AbstractTag;

class Software extends AbstractTag
{

    protected $Id = 'Software';

    protected $Name = 'Software';

    protected $FullName = 'MIE::Doc';

    protected $GroupName = 'MIE-Doc';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Doc';

    protected $g2 = 'Document';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Software';

}
