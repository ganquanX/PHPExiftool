<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class CustomWBSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 38;

    protected $Name = 'CustomWBSetting';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Custom WB Setting';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Setup',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Recall',
        ),
    );

}