<template>
  <div id="app">
    <img src="./assets/logo.png">
<!--    <HelloWorld/>-->
    <todos :todos="todos"></todos>
    <todo-form :todos="todos"></todo-form>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld'
import Todos from "./components/Todos.vue";
import TodoForm from "./components/TodoForm.vue";

export default {
  name: 'App',
  data(){//这个app是个组件，所以需要定义成函数的形式
    return {
      todos:[
        {id:1, title:'Learn Vuejs',completed:false}
      ]
    }
    // newTodo:{
    //     id:null,
    //     title:'',
    //     completed:false
    // },
  },
  mounted() {
    this.axios.get().then(

    );
  },
  computed:{
    todosCount(){
      return this.todos.length;
    }
  },
  components: {
    HelloWorld,Todos,TodoForm
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
