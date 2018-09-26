##  Lumen API

### 1.路由处理(dingo/api)
#### 1.1 lumen注册

```php
$app->register(Dingo\Api\Provider\LumenServiceProvider::class);
```



#### 1. 2 前端版本设置

```php
header中设置Accept信息

accept: application/prs.lumenapi.v1+json

设置规则参照 （文件：vendor/dingo/api/src/Http/Parse/Accept.php）

$pattern = '/application\/'.$this->standardsTree.'\.('.$this->subtype.')\.([\w\d\.\-]+)\+([\w]+)/';
```



#### 1.3 后端版本获取

```php
$request = app('Dingo\Api\Http\Request');
dd($request->version());
```



### 2 响应生成器（response）

​	Controller需要 `use Dingo\Api\Routing\Helpers`使用这个traits，才能调用response属性。

```php
return $this->response->item($user, new UserTransformer())
                    ->setStatusCode(201);
```



### 3. 转换层(transoformers)

​	` 将对象转化为数组`

#### 3.1 创建Transformer文件

​	根据model来定义transformer，transformer中需要实现`transform（）`方法

### 4. 生成API文档

