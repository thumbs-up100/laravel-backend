# laravel-backend
 [![PHP Version](https://img.shields.io/badge/php-%3E%3D7.2-8892BF.svg)](http://www.php.net/)

## About 
 `laravel-backend`是一个轻量级的`CMS`系统，基于`Laravel 8.x`开发。
 开箱即用，拥有丰富`web`组件，button，checkbox，uploader，images handle等。
 拥有用户管理、权限管理、菜单管理等后台管理框架的通用功能等。

## 系统环境
`linux/windows & nginx/apache/iis & mysql 5.7+ & php 7.2+`

* PHP >= 7.2.0
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

**注意事项**

* 如果缓存、队列、session用的是 redis 驱动，那还需要安装 redis 和 php redis 扩展
* 如果`PHP`安装了`opcache`扩展，请启用`opcache.save_comments`和`opcache.load_comments`配置（默认是启用的），否则无法正常使用[菜单自动获取](#菜单自动获取)功能

## 系统部署

### 获取代码并安装依赖
首先请确保系统已安装好[composer](https://getcomposer.org/)。国内用户建议先[设置 composer 镜像](https://developer.aliyun.com/composer)，避免安装过程缓慢。
```
git clone git_repository_url
cd laravel-backend
```
在`/storage/framework/`下创建目录`views`、`sessions`、`cahce`后，安装：
```
composer install
```

新建一份环境配置，并配置好数据库等相关配置:
```
cp .env.example .env
```
初始化系统：
```
php artisan migrate --seed
```

### 启动服务
```
php artisan serve
```
### 访问
```
http://127.0.0.1:8000/admin
初始化数据之后用户名和密码都是:admin
```
### 更多丰富的组件可以通过访问下面地址查看
```
http://127.0.0.1:8000/dist/index.html
```
![Image text](https://github.com/thumbs-up100/laravel-backend/blob/master/public/images/part.png)
