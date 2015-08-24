<?php

$ds_name[1] = 'Memory Usage';
$opt[1]  = "-T 55 -l 0 --vertical-label 'Bytes' --title \"$hostname / APC Memory Usage\"";
$def[1]  = rrd::def('var0', $rrdfile, $DS[1], 'AVERAGE');
$def[1] .= rrd::area('var0', rrd::color(1), 'Used');
$def[1] .= rrd::gprint('var0', array('LAST','MAX','AVERAGE'), '%4.1lf %s');

$def[1] .= rrd::def('var1', $rrdfile, $DS[2], 'AVERAGE');
$def[1] .= rrd::area('var1', rrd::color(2), 'Free', 'STACK');
$def[1] .= rrd::gprint('var1', array('LAST','MAX','AVERAGE'), '%4.1lf %s');

$ds_name[2] = 'Fragmentation';
$opt[2]  = "-T 55 -l 0 --vertical-label 'Bytes' --title \"$hostname / APC Memory Fragmentation\"";
$def[2] = rrd::def('var1', $rrdfile, $DS[2], 'AVERAGE');
$def[2] .= rrd::area('var1', rrd::color(2), 'Free');
$def[2] .= rrd::gprint('var1', array('LAST','MAX','AVERAGE'), '%4.1lf %s');

$def[2] .= rrd::def('var2', $rrdfile, $DS[3], 'AVERAGE');
$def[2] .= rrd::area('var2', rrd::color(3), 'Fragmented');
$def[2] .= rrd::gprint('var2', array('LAST','MAX','AVERAGE'), '%4.1lf %s');

$ds_name[3] = 'Usage by Cache Type';
$opt[3]  = "-T 55 -l 0 --vertical-label 'Bytes' --title \"$hostname / APC Usage by Cache Type\"";
$def[3]  = rrd::def('var3', $rrdfile, $DS[4], 'AVERAGE');
$def[3] .= rrd::area('var3', rrd::color(4), 'File Cache');
$def[3] .= rrd::gprint('var3', array('LAST','MAX','AVERAGE'), '%4.1lf %s');

$def[3] .= rrd::def('var4', $rrdfile, $DS[5], 'AVERAGE');
$def[3] .= rrd::area('var4', rrd::color(5), 'User Cache', 'STACK');
$def[3] .= rrd::gprint('var4', array('LAST','MAX','AVERAGE'), '%4.1lf %s');

$ds_name[4] = 'Overall Runtime Hit Percent';
$opt[4]  = "-T 55 -l 0 --vertical-label 'Bytes' --title \"$hostname / APC Overall Runtime Hit Percent\"";
$def[4]  = rrd::def('var5', $rrdfile, $DS[6], 'AVERAGE');
$def[4] .= rrd::area('var5', rrd::color(8), 'Hit percent');
$def[4] .= rrd::gprint('var5', array('LAST','MAX','AVERAGE'), '%4.1lf %s');

