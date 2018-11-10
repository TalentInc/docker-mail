<?php
    $config['db_dsnw'] = 'mysql://root:rootpassword@mysql/roundcubemail';
    $config['db_dsnr'] = '';
    $config['default_host'] = 'mail';
    $config['default_port'] = '143';
    $config['smtp_server'] = 'mail';
    $config['smtp_port'] = '25';
    $config['smtp_user'] = '%u';
    $config['smtp_pass'] = '%p';
    $config['temp_dir'] = '/var/www/html/temp';
    $config['plugins'] = ['archive', 'zipdownload'];
    $config['zipdownload_selection'] = true;
    $config['log_driver'] = 'stdout';
    $config['basepath'] = '/wm';
    
