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

# 开发环境Ubuntu 16.04

# 依赖工具

nginx, php7+, mariadb or mysql, nodejs 8.x

# 安装步骤

sudo apt-get install nginx

sudo apt-get install php7.0-bcmath php7.0-cli php7.0-common php7.0-fpm php7.0-json php7.0-mbstring php7.0-mcrypt php7.0-mysql php7.0-opcache php7.0-readline php7.0-sqlite3 php7.0-xml php7.0-zip autoconf libtool nasm supervisor

# 配置php 设置php.ini memory_limit 设置为 256M, expose_php 设置为 Off, error_reporting 设置为 E_ALL

sudo install mysql 5.7
