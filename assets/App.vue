<template>
  <div id="app">
    <el-container>
      <el-header>
        <h1>Добавление мероприятия</h1>
      </el-header>
      <el-main>
        <choice-event-type/>
      </el-main>
    </el-container>
  </div>
</template>

<script>
  import choiceEventType from "./views/choiceEventType";

  export default {
    components: {choiceEventType}
  }
</script>
