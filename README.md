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
- vue init webpack【构建工具】 my-project : vue init webpack vuejs-2.0-cli
- 打完包后，在包里面执行 npm install / npm run dev
- 编写组件

# 5、vue和laralve前后端分离
- 之前官方推荐vue-resource
- 作者推荐使用： npm install axios
- 只在vue中使用的话：npm install --save axios vue-axios
- 在main.js中分别引入：import axios from "axios"; import VueAxios from "vue-axios";
- this.axios.get(api).then(response=>{})

# 6、跨域扩展包
- composer require barryvdh/laravel-cors

# 7、vue-router处理前端路由，构建基础的单页应用
- npm install vue-router  注意版本兼容问题
- import VueRouter from 'vue-router' 引入
- Vue.use(VueRouter)

# 8、vuex：通过一种 state 管理机制来实现数据传递和实时更新，非常便捷和实用
- 














