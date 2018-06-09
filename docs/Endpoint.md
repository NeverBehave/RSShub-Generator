# 支持的接口

## /url.php

用于获得给定链接所有可能的RSS订阅

### 参数：
- url
    - 需要生成RSS的链接
    
### 例子

#### 请求

GET `/url.php?url=https://github.com/neverbehave`

#### 返回
```json
{"status":200,"message":"success","data":[{"status":true,"url":"https:\/\/rsshub.app\/github\/repos\/neverbehave","compose":{"identification":"GithubUser","name":"Github User","description":"\u8ba2\u9605\u6307\u5b9a\u7528\u6237\u7684\u4ed3\u5e93","docs":"https:\/\/docs.rsshub.app\/#\u7528\u6237\u4ed3\u5e93","parameters":{"username":["required"]}}},{"status":false,"url":"","compose":{"identification":"GithubTrending","name":"Github Trending","description":"\u83b7\u5f97\u7279\u5b9a\u8bed\u8a00\u7684\u70ed\u95e8\u4ed3\u5e93","docs":"https:\/\/docs.rsshub.app\/#trending","parameters":{"since":["required"],"language":["optional"]}}}]}
```


## /documentation.php

获得所有支持的方法的文档

### 参数
无

### 例子

#### 请求

GET `/documentation.php`

#### 返回

```json
{"status":200,"message":"success","data":{"compose":[{"identification":"BilibiliUserVideo","name":"B\u7ad9UP\u6295\u7a3f","description":"\u6295\u7a3f\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#up-\u4e3b\u6295\u7a3f","parameters":{"uid":["required"]}},{"identification":"CCTVCategory","name":"CCTV\u592e\u89c6\u65b0\u95fb","description":"\u4e13\u9898\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u4e13\u9898-2","parameters":{"category":["required"]}},{"identification":"Dapenti","name":"\u56fe\u5366","description":"\u6253\u55b7\u568f->\u56fe\u5366","docs":"https:\/\/docs.rsshub.app\/#\u56fe\u5366","parameters":[]},{"identification":"DisqusForum","name":"Disque \u8bba\u575b","description":"\u8bba\u575b\u8bc4\u8bba\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u8bc4\u8bba","parameters":{"forum":["required"]}},{"identification":"DouyuRoomOnline","name":"\u6597\u9c7c\u623f\u95f4","description":"\u6597\u9c7c\u623f\u95f4\u5f00\u64ad","docs":"https:\/\/docs.rsshub.app\/#\u76f4\u64ad\u95f4\u5f00\u64ad","parameters":{"id":["number"]}},{"identification":"GithubTrending","name":"Github Trending","description":"\u83b7\u5f97\u7279\u5b9a\u8bed\u8a00\u7684\u70ed\u95e8\u4ed3\u5e93","docs":"https:\/\/docs.rsshub.app\/#trending","parameters":{"since":["required"],"language":["optional"]}},{"identification":"GithubUser","name":"Github User","description":"\u8ba2\u9605\u6307\u5b9a\u7528\u6237\u7684\u4ed3\u5e93","docs":"https:\/\/docs.rsshub.app\/#\u7528\u6237\u4ed3\u5e93","parameters":{"username":["required"]}},{"identification":"InstagramUser","name":"Instagram \u7528\u6237","description":"Instagram \u7528\u6237\u52a8\u6001\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u7528\u6237-2","parameters":{"id":["required"]}},{"identification":"IqiyiComic","name":"\u7231\u5947\u827a\u52a8\u6f2b","description":"\u52a8\u6f2b\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u52a8\u6f2b","parameters":{"id":["required"]}},{"identification":"Jiandan","name":"\u714e\u86cb\u65e0\u804a\u56fe","description":"\u6700\u8fd1\u714e\u86cb\u7684\u4e00\u4e9b\u65e0\u804a\u56fe","docs":"https:\/\/docs.rsshub.app\/#\u65e0\u804a\u56fe","parameters":[]},{"identification":"JinritoutiaoKeyword","name":"\u4eca\u65e5\u5934\u6761\u5173\u952e\u8bcd","description":"","docs":"https:\/\/docs.rsshub.app\/#\u5173\u952e\u8bcd-2","parameters":{"keyword":["required"]}},{"identification":"NYMorning","name":"\u7ebd\u7ea6\u65f6\u62a5","description":"\u7ebd\u7ea6\u65f6\u62a5\u65b0\u95fb\u65e9\u62a5\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u65b0\u95fb\u65e9\u62a5","parameters":[]},{"identification":"NeteaseMusicArtistPlayList","name":"\u7f51\u6613\u4e91\u97f3\u4e50\u6b4c\u624b\u4e13\u8f91","description":"\u6b4c\u624b\u4e13\u8f91\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u6b4c\u624b\u4e13\u8f91","parameters":{"id":["number"]}},{"identification":"NeteaseMusicPlayList","name":"\u7f51\u6613\u4e91\u97f3\u4e50\u6b4c\u5355\u6b4c\u66f2","description":"\u6b4c\u5355\u6b4c\u66f2\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u6b4c\u5355\u6b4c\u66f2","parameters":{"id":["number"]}},{"identification":"NeteaseMusicUserPlayList","name":"\u7f51\u6613\u4e91\u97f3\u4e50\u7528\u6237\u6b4c\u5355","description":"\u7528\u6237\u6b4c\u5355\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u7528\u6237\u6b4c\u5355","parameters":{"uid":["number"]}},{"identification":"ReadhubCategory","name":"ReadHub \u5206\u7c7b","description":"ReadHub \u5206\u7c7bRSS","docs":"https:\/\/docs.rsshub.app\/#\u5206\u7c7b-3","parameters":{"category":["required"]}},{"identification":"TelegramChannel","name":"Telegram \u9891\u9053\u8ba2\u9605","description":"Telegram \u9891\u9053\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u9891\u9053-2","parameters":{"username":["required"]}},{"identification":"Tieba","name":"\u8d34\u5427\u5e16\u5b50","description":"\u5e16\u5b50\u5217\u8868\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u5e16\u5b50\u5217\u8868","parameters":{"name":["required"]}},{"identification":"TwitterUser","name":"Twitter \u7528\u6237","description":"\u7528\u6237\u52a8\u6001\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u7528\u6237","parameters":{"id":["required"]}},{"identification":"UUNovel","name":"UU\u5c0f\u8bf4\u7ae0\u8282","description":"\u83b7\u53d6\u5c0f\u8bf4\u7ae0\u8282","docs":"https:\/\/docs.rsshub.app\/#\u5c0f\u8bf4\u7ae0\u8282-2","parameters":{"id":["number"]}},{"identification":"YandeReRecentPost","name":"Popular Recent Posts","description":"\u6700\u70ed\u5e16\u5b50","docs":"https:\/\/docs.rsshub.app\/#popular-recent-posts-2","parameters":{"period":["optional"]}},{"identification":"YandeReTag","name":"yande.re Post","description":"\u83b7\u53d6\u5e16\u5b50","docs":"https:\/\/docs.rsshub.app\/#posts-2","parameters":{"tags":["optional"]}},{"identification":"YoutubeChannel","name":"Youtube \u9891\u9053","description":"Youtube \u9891\u9053\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u9891\u9053","parameters":{"id":["required"]}},{"identification":"YoutubeUser","name":"Youtube \u7528\u6237","description":"\u7528\u6237\u8ba2\u9605","docs":"https:\/\/docs.rsshub.app\/#\u7528\u6237-3","parameters":{"username":["required"]}}]}}
```

## /compose.php
根据指定`Compose`生成链接

### 参数
- Identification
    - 指定Compose模块
- 所有`required`参数

### 例子

#### 请求

GET `/compose.php?identification=GithubUser&username=neverbehave`

#### 返回

```json
{"status":200,"message":"success","data":{"identification":"GithubUser","name":"Github User","description":"\u8ba2\u9605\u6307\u5b9a\u7528\u6237\u7684\u4ed3\u5e93","docs":"https:\/\/docs.rsshub.app\/#\u7528\u6237\u4ed3\u5e93","parameters":{"username":["required"]},"status":true,"url":"https:\/\/rsshub.app\/github\/repos\/neverbehave"}}
```


# 错误处理

## 状态码

- 400 
    - 请求的参数不正确/不符合规范
- 500
    - Internal Service Err，请上报这个问题

错误信息通常跟随着`message`