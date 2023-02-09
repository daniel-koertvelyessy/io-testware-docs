<template>
  <div>
    <div class="sm:hidden px-4 py-2">
      <label class="sr-only"
      >{{ __('components.tabs.selector.label') }}
      </label>
      <select v-model="tabSelector"
              class="block w-full focus:ring-sky-500 focus:border-sky-500 border-slate-300 rounded-md"
              @change="selectTabSelector"
      >
        <option v-for="tab in tabs">{{ tab }}</option>
      </select>
    </div>
    <div class="hidden sm:block">
      <div class="border-b border-slate-200 bg-white dark:bg-slate-400 rounded-t ">
        <nav class="-mb-px flex"
             aria-label="Tabs"
        >
          <button type="button"
                  @click="selectTab(tab)"
                  v-for="tab in tabs"
                  :class="[tab === selectedTab ? 'border-sky-500 text-sky-600 dark:text-slate-100 dark:border-sky-800' : 'border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300 dark:hover:border-slate-500 dark:text-slate-300', 'w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm']"
                  :aria-current="tab===selectedTab ? 'page' : undefined"
          >
            {{ tab }}
          </button>
        </nav>
      </div>
    </div>
    <slot/>
  </div>
</template>

<script setup>
import {provide, ref, useSlots} from "vue";
const tab_id = defineProps({id:String})
const slots = useSlots()
const tabs = ref(slots.default().map((tab) => tab.props.title))
const selectedTab = (localStorage.getItem(tab_id.id )) ? ref(localStorage.getItem(tab_id.id)) : ref(tabs.value[0])
const tabSelector = (localStorage.getItem(tab_id.id )) ? ref(localStorage.getItem(tab_id.id)) : ref(tabs.value[0])
const selectTabSelector = () => {
  selectedTab.value = tabSelector.value
  localStorage.setItem(tab_id.id,selectedTab.value)
}

const selectTab = (tab) => {
  selectedTab.value = tab
  localStorage.setItem(tab_id.id,selectedTab.value)
}

provide('selectedTab', selectedTab)

</script>
