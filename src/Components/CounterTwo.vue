<template>
    <div class="flex flex-col font-bold  mb-8">
      <div class="mb-4 text-4xl">
        Page red clicks {{ counter }}
      </div>
      <div class="flex">
        <button class="p-4 bg-red-400 text-white hover:shadow-2xl rounded-full mb-4" @click="up">Go Up Counter</button>
        <button class="p-4 bg-red-400 text-white hover:shadow-2xl rounded-full mb-4" @click="down">Go Down Counter</button>
      </div>

    </div>
</template>
<script>
export default {
  data() {
    return {
      counter: 0
    }
  },
  methods: {
    up(){
      this.counter++
    },
    down(){
      this.counter--
    }
  }
}
</script>