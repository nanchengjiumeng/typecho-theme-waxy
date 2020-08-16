# Waxy 简约自适应博客主题

**[在线预览 | PREVIEW ](https://www.idzd.top)**

Waxy 简约自适应博客主题，轻量高效，悦于书写！支持主题自定义、短代码、文章置顶/标星、公告等功能。

![Waxy 简约自适应博客主题](https://github.com/dingzd1995/typecho-theme-waxy/blob/master/screenshot.png)

>本主题参考**seventeen主题**，由其修改更新而来，感谢原作者的辛苦付出！

## 安装主题

[主题下载地址](https://github.com/dingzd1995/typecho-theme-waxy/releases/tag/v2020.06.15)

把主题上传到 Typecho 安装路径下的 `usr/themes/` 目录，然后解压，你也可以先解压在上传。

解压完成后，请将主题目录重命名为`Waxy`，并保证所有主题文件在此目录下。

登录 Typecho 的管理后台，进入 `控制台` -> `外观`，点击 **Waxy** 主题下方的`启用`按钮即可启用。

如需修改主题设置，请点击`设置外观`进入主题设置。

## 主题功能介绍

- 响应式布局
- 轻量高效，悦于书写
- 短代码快捷功能
- 自定义侧边栏
- 图片懒加载
- 图片灯箱
- 文章标星
- 文章缩略图
- 内容失效提醒
- 置顶公告
- 文章置顶
- CDN切换


### 短代码

短代码可以快速为你提供更多展示效果。使文章层次更丰富。

#### 使用方法

```bash
#多彩提示框
[info]一般提示[/info]

[warning]警告提示[/warning]

[danger]危险提示[/danger]

[info]多行内容测试：<br />
生活如酒，或芳香，或浓烈，因为诚实，它变得醇厚；生活如歌，或高昂，或低沉，因为守信，它变得悦耳； 生活如画，或明丽，或素雅，因为诚信，它变得美丽。[/info]

#文字提示
[em]警告文字样式[/em]

[hi]高亮文字样式[/hi]

[lo]备注文字样式[/lo]


#插入视频
[video src="视频地址" poster="视频封面地址（可省略）" ]

#插入音频
[audio src="音频地址"]
```



#### 效果

![多彩提示框](/doc/img/21894651.png)
![文字提示](/doc/img/0d30a994.png)
![视频](/doc/img/e1ef9808.png)


### 代码高亮

基于[prism.js](https://prismjs.com/download.html#themes=prism-okaidia&languages=markup+css+clike+javascript+apacheconf+c+csharp+bash+cpp+aspnet+coffeescript+markup-templating+git+less+java+php+javadoclike+markdown+json+nginx+sql+python+javadoc+smarty&plugins=line-numbers+toolbar+normalize-whitespace+show-language+copy-to-clipboard+match-braces)实现，自带8种主题。

![代码高亮设置](/doc/img/06dc523e.png)

>移植于[CodeHighlighter-for-Typecho插件](https://github.com/Copterfly/CodeHighlighter-for-Typecho)，感谢原作者的辛苦劳动！

### 自定义侧边栏

- 显示搜索
- 显示分类
- 显示标签云
- 显示最新文章
- 显示最近回复
- 显示归档
- 显示微信公众号
- 显示友情链接
- 显示其它杂项

### 文章缩略图

如果想使用缩略图，请在文章自定义字段 img 添加网址即可

### 文章标星

如果想在文章右上角显示一个显眼的标记，请添加文章自定义字段 star 即可

![cc76186f.png](/doc/img/cc76186f.png)

### 文章内容失效提醒

![13267df4.png](/doc/img/13267df4.png)

### 置顶公告

![43845bf9.png](/doc/img/43845bf9.png)


### 文章置顶

![2b17fa90.png](/doc/img/2b17fa90.png)

--------------

