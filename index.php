<?php

echo "Your monitor fsid is: " . exec('uuidgen -r') . "<br><br>";

#echo "Your monitor secret is: " . exec('/usr/bin/ceph-authtool /var/www/ceph.client.admin.keyring --gen-key && /usr/bin/ceph-authtool /var/www/ceph.client.admin.keyring -l');

echo "Your monitor secret is: " . exec('/usr/bin/ceph-authtool /var/www/ceph.client.admin.keyring --gen-key && /usr/bin/ceph-authtool /var/www/ceph.client.admin.keyring -l | grep key | cut -d = -f 2 | sed -e \'s/^[ \t]*//\'');

?>
