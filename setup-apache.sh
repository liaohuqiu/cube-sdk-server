#!/bin/bash

function make_dir()
{
    ensure_dir $1
}

function ensure_dir()
{
    if [ ! -d $1 ]; then
        exe_cmd "mkdir -p $1"
    fi
}
function link_dir()
{
    if [ -e $2 ];then
        exe_cmd "rm $2"
        exe_cmd "ln -sf $1 $2"
    fi
}

function exe_cmd()
{
    echo $1
    eval $1
}

current_dir=`pwd`
app_dir='/prj/apps/cube'
ensure_dir $app_dir
exe_cmd "ln -sf $current_dir/htdocs $app_dir/htdocs"
exe_cmd "sudo chown -RL www:www $app_dir"

apache_conf_dir="/usr/local/apache/conf/vhosts"
ensure_dir $apache_conf_dir
exe_cmd "sudo cp $current_dir/conf/cube.vhost.prod.conf $apache_conf_dir"
exe_cmd "sudo service httpd restart"
