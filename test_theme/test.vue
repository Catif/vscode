<script setup>
const element = reactive({
  name: "test",
  age: 18,
});

const array = ref([1, 2, 3, 4, 5]);

onMounted(() => {
  console.log("mounted");
});

watch(
  () => element.age,
  (newVal, oldVal) => {
    console.log("age changed", newVal, oldVal);
  }
);
</script>

<template>
  <div>
    <h1>{{ element.name }}</h1>
    <h2
      :style="{ red: element.age < 21, green: element.age >= 21 }"
      @click="element.age === 18 ? (element.age = 30) : (element.age = 18)"
      >{{ element.age }}</h2
    >

    <div v-for="item in array" :key="item">
      <span>{{ item }}</span>
    </div>
  </div>
</template>

<style scoped></style>
