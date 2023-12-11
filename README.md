# vue-2 
进阶版vue
# 版本vue2 文档参考：https://v2.cn.vuejs.org/v2/guide/

# 1、简单的Todo App
- 数据双向绑定,表单用的多: v-model
- 数据列表循环: v-for
- 事件: v-on:click; v-on:submit;v-on:click; form点击提交，新增。删除

# 2、computed和v-bind:class的应用场景
- computed对于代码逻辑和业务逻辑的处理非常有用；【其实就是个方法，写在computed里面】
- v-bind:class则是应用页面的样式和渲染方面，使web应用更具体验性;【做一些样式判断的添加,两种写法】

# 3、组件化开发：在前后端分离的情况下，组件化不仅可重用，可读性更高，并且可维护的成本也更低
- 自定义标签名
- 自定义模版名称
- 如何传递参数到组件内 props
- 组件内的方法要在组件内写
- 如何定义data：组件内书写方式 data(){return{具体内容}}

# 4、vue脚手架工具进行组件化开发
- vue-cli安装：npm install -g vue-cli [参考：https://zhuanlan.zhihu.com/p/666412575]
- vue init 《template-name》《project-name》