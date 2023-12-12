<script>
export default {
  props: ['todos'],
  methods:{
    deleteTodo(index){
      this.todos.splice(index, 1) //2.0的写法
    },
    toggleCompletion(todo){
      todo.completed = !todo.completed;
    }
  }
}
</script>

<template>
  <ul class="list-group">
    <li class="list-group-item "
        v-bind:class="{'completed': todo.completed}"
        v-for="(todo,index) in todos">
      {{todo.title}}
      <button class="btn btn-warning btn-xs pull-right"
              v-on:click="toggleCompletion(todo)"
              v-bind:class="[todo.completed ? 'btn-danger' : 'btn-success']"
      >{{todo.completed ? 'Undo' : 'Completed'}}
      </button>
      <button class="btn btn-waring btn-xs pull-right"
              v-on:click="deleteTodo(index)">Delete</button>
    </li>
  </ul>
</template>

<style>
  .completed {
    color: green;
    text-decoration: line-through;
  }
</style>
