<template>
<div class="bg-white dark:bg-slate-500 px-3 py-3"
    v-show="selectedTab === title">
  <slot />
</div>
</template>

<script>
import {inject} from "vue";
export default {
  name: "Tab",
  props: ['title'],
  setup(){
    const selectedTab = inject('selectedTab')

    return {
      selectedTab
    }
  }
}
</script>

<style scoped>

</style>