<template>
    <div class="flex flex-col lg:flex-row items-center justify-around">
      <Navigation />
      <Counter />
    </div>
</template>
<script>

import Navigation from "./Navigation";
import Counter from "./Counter";

export default {
    data() {
      return {
        counter: 0,
      }
    },
  components: {
      Counter,
      Navigation
  }
}
</script>