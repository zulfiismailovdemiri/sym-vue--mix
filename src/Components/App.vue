<template>
  <div>
    <div class="flex items-center">
      <div class="w-1/3 font-bold text-4xl">
        Hallo {{ counter }}
      </div>

      <button class="p-4 bg-blue-400 text-white hover:shadow-2xl rounded-md" @click="counter++">Go Counter</button>
    </div>
  </div>
</template>
<script>
export default {
    data() {
      return {
        counter: 0
      }
    }
}
</script>