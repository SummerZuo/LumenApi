##  Lumen API

### 1.路由处理(dingo/api)
	#### 1.1 lumen注册

```php
$app->register(Dingo\Api\Provider\LumenServiceProvider::class);
```



#### 1. 2 前端版本设置

```php
header中设置Accept信息

application/prs.lumenapi.v1+json

设置规则参照 （文件：vendor/dingo/api/src/Http/Parse/Accept.php）

$pattern = '/application\/'.$this->standardsTree.'\.('.$this->subtype.')\.([\w\d\.\-]+)\+([\w]+)/';
```



#### 1.3 后端版本获取

```php
$request = app('Dingo\Api\Http\Request');
dd($request->version());
```



### 2. 响应(response)

### 3. 转换层(transoformers)
 将对象转化为数组

