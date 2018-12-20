# hpips_dag_pool

构建HPIPS中心化矿池测试版本，后期会把数据上传到IPFS网络

这个项目可以允轻松地创建一个hpips_dag矿池，并为用户提供一个美观、舒适的UI。

# 功能
详细的池和网络统计数据，包括图表（哈希表、活动挖掘器、难度、挖掘到的块…）

地址平衡检查工具

任何联营矿商的详细支出（可出口）

池中挖掘的块列表

排行榜

关于如何设置矿工的详细指南

丰富的管理界面，允许定制网站的许多方面并查看与管理相关的信息

独立于第三方服务（所有数据在本地池软件上导出/查询）

安全、代码清晰、可扩展

可选的注册允许用户在一个地方管理他们的矿工

注册矿工的散列历史

为注册用户返回在线电子邮件警报

管理员电子邮件警报：零池散列、异常池守护进程状态和离线引用挖掘器

能够使用重要消息向活动用户或所有池注册用户发送电子邮件

关于URL/status（JSON）和/status/.-readable（文本文件）的池状态和诊断信息导出-每分钟更新

# 计划功能

基于哈希拉特的近似收益能力

移动友好设计调整

翻译和语言支持，支持简单的CMS（设置页面、其他池文档和类似的）

代码重构，使用存储库和模型演示器，其他改进

添加一些定制网站设计的能力，例如通过允许上传favicon.ico，或者改变bulma主题作为一个整体

# 技能要求

为了运行这个池，您应该在Unix/Linux管理方面很流利，并且对计算机编程有基本的了解。

# 取消请求

请提交具有新特性、改进和/或bug修复的拉动请求。如果需要，使用GitHub问题跟踪器。请注意，为了开发这个池，需要良好的Laravel 5、webpack、mix、.、sass、javascript和bulma经验。所有拉请求必须具有合理的代码质量和安全性。

# 依赖环境

# 开发环境Ubuntu 16.04

# 依赖工具

nginx, php7+, mariadb or mysql, nodejs 8.x

# 矿池网站如何运作

池网站定期从池守护程序端脚本获取所需的数据。这些脚本位于单独的存储库中。这些数据在本地存储，然后进行处理。

处理的结果通常存储在数据库中。池在必要时重新读取导入的数据文件。

这意味着泳池网站完全独立于泳池本身。如果池守护程序端不可用，池网站将无休止地显示从池守护程序获得的最新信息。

# 安装步骤

无论是在网站服务器上还是在不同的服务器上。本安装指南将概述如何启动和运行池网站。它不可能深入到每个步骤，但是提供了所有重要的细节。

执行以下步骤以启动和运行网站：

1.将系统时区设置为UTC，执行sudo dpkg-figurationtzdata 并选择UTC

2.安装所有PHP7.0需求，在Ubuntu 16.04执行
sudo apt-get install php7.0-bcmath php7.0-cli php7.0-common php7.0-fpm php7.0-json php7.0-mbstring php7.0-mcrypt php7.0-mysql php7.0-opcache php7.0-readline php7.0-sqlite3 php7.0-xml php7.0-zip autoconf libtool nasm supervisor
下一步设置php.ini。设置memory_limit 至少 256M，expose_php 设置 Off ，设置 error_reporting 到 E_ALL.

3.安装nginx并设置一个PHP FPM运行在自己的矿池下面
sudo apt-get install nginx
配置PHP脚本执行文档
sudo vi /etc/nginx/sites-available/default
设置 server_name hpips_dag;
设置 index hpips_dag.php index.html index.htm;
去掉下面部分的注释用于支持 php 脚本： 
location ~ \.php$ {
include /etc/nginx/fastcgi_params; 
fastcgi_pass 127.0.0.1:9000;
fastcgi_index hpips_dag.php;
fastcgi_param SCRIPT_FILENAME /var/www/nginx-default$fastcgi_script_name;
}

5.安装 composer 和 nodejs 8.x
 curl -sS https://getcomposer.org/installer | php
 mv composer.phar composer
 chmod +x composer
 sudo mv composer /usr/local/bin
 
 curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -
 sudo apt-get install -y nodejs
 
 6.把这个项目克隆到/var/www/hpips_dag_pool
 cd /var/www/
 sudo git clone https://github.com/HPIPS/hpips_dag_pool.git

sudo apt-get install php7.0-bcmath php7.0-cli php7.0-common php7.0-fpm php7.0-json php7.0-mbstring php7.0-mcrypt php7.0-mysql php7.0-opcache php7.0-readline php7.0-sqlite3 php7.0-xml php7.0-zip autoconf libtool nasm supervisor

#配置php 设置php.ini memory_limit 设置为 256M, expose_php 设置为 Off, error_reporting 设置为 E_ALL

sudo install mysql 5.7
