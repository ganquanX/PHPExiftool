<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class DateTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0040,A120';

    protected $Name = 'DateTime';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Date Time';

}